<?php
class ReservesController extends Controller
{
    // =============================================================================
    // get
    // =============================================================================
    public function get($member_id = null): array
    {
        if ($this->is_set($member_id)) {
            return $this->getById($member_id);
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    public function getById($member_id): array
    {
        $res_reserves = parent::selectById(Sql::GetReservesById . "  LIMIT 1", $member_id)[0];
        $res_reserves["seat"] = array();
        $res_reserves["seat"] = parent::selectById(Sql::GetReserveSeatsById, $res_reserves["id"]);

        if ($res_reserves) {
            return $res_reserves;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // =============================================================================
    // put
    // =============================================================================
    public function put(): array
    {
        return $this->putReserves();
    }

    public function putReserves(): array
    {
        $data = json_decode(parent::encode_utf8("php://input"), true);

        if (empty($data)) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        // FIXME: 会員のみ購入可能(会員以外の対応まだです)
        // FIXME: バリデーション未実装(座席の重複など)
        if (
            !array_key_exists("manage_id", $data)
            || !array_key_exists("member_id", $data)
            || !array_key_exists("seat", $data)
        ) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        // REVIEW: テスト出力
        // return ["data" => $data];

        // FIXME: トランザクション未設定(予約TBLと座席予約TBLの整合性が保てない可能性がある)

        // -------------------------------------------------------------------------
        // DB登録
        // -------------------------------------------------------------------------
        // t_reserve(予約TBL)登録
        $statement = $this->connectDb()->prepare(Sql::AddReserves);
        $statement->bindparam(":manage_id", $data["manage_id"], PDO::PARAM_INT);
        $statement->bindValue(":member_id", $data["member_id"], PDO::PARAM_INT);
        $statement->execute();

        if ($statement->rowCount() == 1) {
            $reserve_id =  parent::selectById(Sql::GetMaxReservesId, $data["member_id"])[0]["id"];

            foreach ($data["seat"] as $seat) {
                // t_seats(座席予約TBL)登録
                $statement = $this->connectDb()->prepare(Sql::AddReserveSeats);
                $statement->bindparam(":id", $reserve_id, PDO::PARAM_INT);
                $statement->bindValue(":name", $seat["name"], PDO::PARAM_STR);
                $statement->bindValue(":ticket", $seat["ticket"], PDO::PARAM_INT);
                $statement->execute();
            }

            $this->code = 201;
            return $this->getById($data["member_id"]);
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }
}
