<?php
class ReservesController extends Controller implements crad
{

    public function get($member_id = null): array
    {
        include_once(__DIR__ . "/../sql/Seats.php");
        include_once(__DIR__ . "/../sql/Reserves.php");

        return
            $this->is_set($member_id) ?
            $this->getById($member_id)      // 会員IDで抽出
            : parent::fatal_error();        // エラー
    }

    public function post(): array
    {
        return parent::fatal_error();
    }

    public function put(): array
    {
        include_once(__DIR__ . "/../sql/Seats.php");
        include_once(__DIR__ . "/../sql/Reserves.php");

        $data = json_decode(parent::encode_utf8("php://input"), true);

        if (empty($data)) {
            return parent::error(400, "invalid_param");
        }

        // FIXME: バリデーション未実装(座席の重複など)
        if (
            !array_key_exists("manage_id", $data)
            || !array_key_exists("member_id", $data)
            || !array_key_exists("seat", $data)
        ) {
            return parent::error(400, "invalid_param");
        }

        // FIXME: 会員のみ購入可能(会員以外の対応まだです)
        return $this->putReserves($data["manage_id"], $data["member_id"], $data["seat"]);
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }

    // ================================================================
    // 関数
    // ================================================================
    public function getById($member_id): array
    {
        // 会員IDで抽出
        $reserves           = parent::selectById(Reserves::GetById, $member_id)[0];
        $reserves["seat"]   = parent::selectById(Seats::GetByReserveId, $reserves["id"]);

        return $reserves ? $reserves : parent::fatal_error();
    }

    public function putReserves($manage_id, $member_id, $seats): array
    {
        // FIXME: トランザクション未設定(予約TBLと座席予約TBLの整合性が保てない可能性がある)

        // -------------------------------------------------------------------------
        // DB登録
        // -------------------------------------------------------------------------
        // t_reserve(予約TBL)登録
        $statement = $this->connectDb()->prepare(Reserves::Add);
        $statement->bindparam(":manage_id", $manage_id, PDO::PARAM_INT);
        $statement->bindValue(":member_id", $member_id, PDO::PARAM_INT);
        $statement->execute();

        if ($statement->rowCount() == 1) {
            $reserve_id =  parent::selectById(Reserves::GetMaxId, $member_id)[0]["id"];

            foreach ($seats as $seat) {
                // t_seats(座席予約TBL)登録
                $statement = $this->connectDb()->prepare(Seats::Add);
                $statement->bindparam(":id", $reserve_id, PDO::PARAM_INT);
                $statement->bindValue(":name", $seat["name"], PDO::PARAM_STR);
                $statement->bindValue(":ticket", $seat["ticket"], PDO::PARAM_INT);
                $statement->execute();
            }

            $this->code = 201;
            return $this->getById($member_id);
        }

        return parent::fatal_error();
    }
}
