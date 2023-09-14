<?php
class ReservesController extends Controller implements crad
{

    public function get($member_id = null): array
    {
        try {
            // ------------------------------------------------------------
            // SQLの読込
            // ------------------------------------------------------------
            include_once(__DIR__ . "/../sql/Seats.php");
            include_once(__DIR__ . "/../sql/Reserves.php");

            // ------------------------------------------------------------
            // DB検索処理
            // ------------------------------------------------------------
            return
                $this->is_set($member_id) ?
                $this->getById($member_id)      // 会員IDで抽出
                : parent::fatal_error();        // エラー
        } catch (\Throwable $th) {
            $th;
        }
    }

    public function post(): array
    {
        try {
            // ------------------------------------------------------------
            // SQLの読込
            // ------------------------------------------------------------
            include_once(__DIR__ . "/../sql/Seats.php");
            include_once(__DIR__ . "/../sql/Reserves.php");

            // ------------------------------------------------------------
            // データの取得
            // ------------------------------------------------------------
            // $data = json_decode(parent::encode_utf8("php://input"), true);

            // ------------------------------------------------------------
            // バリデーション
            // ------------------------------------------------------------
            // 必須チェック(取得データがあるか)
            // if (empty($data)) {
            //     // 取得データがないときはエラー
            //     return parent::error(400, "invalid_param");
            // }

            // 必須チェック(取得データ内に指定のデータが含まれているか)
            // if (
            //     !array_key_exists("manage_id", $data)
            //     || !array_key_exists("member_id", $data)
            //     || !array_key_exists("seat", $data)
            // ) {
            //     return parent::error(400, $_REQUEST);
            // }

            // FIXME: 重複チェック(座席の重複)
            // FIXME: 整合性チェック(既存の予約座席との衝突がないか)

            // ------------------------------------------------------------
            // DB登録処理
            // ------------------------------------------------------------
            // FIXME: 会員のみ購入可能(会員以外の対応まだです)
            return $this->putReserves($_REQUEST["manage_id"], $_REQUEST["member_id"], $_REQUEST["seat"]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function put(): array
    {
        return parent::fatal_error();
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }

    // 予約情報(最新1件)を取得する
    public function getById($member_id): array
    {
        // 予約情報(会員IDで抽出)を取得する
        $temp_reserves      = parent::selectById(Reserves::GetById . "  LIMIT 1", $member_id);

        if (!$temp_reserves) {
            return parent::fatal_error();
        }

        $reserves           = $temp_reserves[0];                                             // 予約情報(会員IDで抽出)を取得する
        $reserves["seat"]   = parent::selectById(Seats::GetByReserveId, $reserves["id"]);    // 取得した予約情報と紐づく座席情報を取得する

        return $reserves ? $reserves : parent::fatal_error();
    }

    // 予約を登録する
    public function putReserves($manage_id, $member_id, $seats): array
    {
        // t_reserve(予約TBL)へ取得した予約データを登録する
        $statement = $this->connectDb()->prepare(Reserves::Add);
        $statement->bindparam(":manage_id", $manage_id, PDO::PARAM_INT);
        $statement->bindValue(":member_id", $member_id, PDO::PARAM_INT);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            // 登録した予約IDを取得する
            $reserve_id =  parent::selectById(Reserves::GetMaxId, $member_id)[0]["id"];

            // t_seats(座席予約TBL)へ取得した座席データを登録する
            foreach ($seats as $seat) {
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
