<?php
class ReservesController extends Controller implements crud
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
            $data = json_decode(parent::encode_utf8("php://input"), true);

            // ------------------------------------------------------------
            // バリデーション
            // ------------------------------------------------------------
            // 必須チェック(取得データがあるか)
            if (empty($data)) {
                // 取得データがないときはエラー
                return parent::error(400, "invalid_param");
            }

            // 必須チェック(取得データ内に指定のデータが含まれているか)
            if (
                !array_key_exists("manage_id", $data)
                || !array_key_exists("member_id", $data)
                || !array_key_exists("seat", $data)
            ) {
                return parent::error(400, "invalid_param");
            }

            // FIXME: 重複チェック(座席の重複)
            // FIXME: 整合性チェック(既存の予約座席との衝突がないか)

            // ------------------------------------------------------------
            // DB登録処理
            // ------------------------------------------------------------
            // FIXME: 会員のみ購入可能(会員以外の対応まだです)
            // return $this->insert($_REQUEST["manage_id"], $_REQUEST["member_id"], $_REQUEST["seat"]);
            return $this->insert($data["manage_id"], $data["member_id"], $data["seat"]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function put(): array
    {
        return parent::fatal_error();
    }

    public function delete($reserve_id = null): array
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
            $data = json_decode(parent::encode_utf8("php://input"), true);

            // ------------------------------------------------------------
            // バリデーション
            // ------------------------------------------------------------
            // 必須チェック(取得データがあるか)
            if (empty($data)) {
                // 取得データがないときはエラー
                return parent::error(400, "invalid_param");
            }

            // 必須チェック(取得データ内に指定のデータが含まれているか)
            if (!array_key_exists("seat", $data)) {
                return parent::error(400, "invalid_param");
            }

            // ------------------------------------------------------------
            // DB検索処理
            // ------------------------------------------------------------
            return
                $this->is_set($reserve_id) ?
                $this->del($reserve_id, $data["seat"])      // 会員IDで抽出
                : parent::fatal_error();        // エラー
        } catch (\Throwable $th) {
            $th;
        }
    }

    // 予約情報(最新1件)を取得する
    private function getById($member_id): array
    {
        $reserves   = parent::selectById(Seats::GetByMemberId, $member_id);
        return $reserves ? $reserves : parent::fatal_error();
    }

    // 予約を登録する
    private function insert($manage_id, $member_id, $seats): array
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


    // 削除
    private function del($reserve_id, $seats): array
    {
        foreach ($seats as $seat) {
            // 予約座席の削除
            $statement = $this->connectDb()->prepare(Seats::Del);
            $statement->bindValue(":id", $reserve_id, PDO::PARAM_INT);
            $statement->bindValue(":seat", $seat, PDO::PARAM_STR);
            $statement->execute();
        }

        $exist_reserve = parent::selectById(Seats::GetCountByReserveId, $reserve_id)[0]["count"];

        if ($exist_reserve == 0) {
            // 予約の削除
            $statement = $this->connectDb()->prepare(Reserves::Del);
            $statement->bindValue(":id", $reserve_id, PDO::PARAM_INT);
            $statement->execute();
        }

        // 更新内容を返却
        $this->code = 201;

        $reserves = parent::selectById(Reserves::GetByReserveId, $reserve_id);
        return $reserves ? $reserves : parent::fatal_error();
    }
}
