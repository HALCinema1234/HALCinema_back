<?php
class UsersController extends Controller implements crad
{
    public function get(): array
    {
        try {

            include_once(__DIR__ . "/../sql/Users.php");

            // $data = json_decode(parent::encode_utf8("php://input"), true);
            $data = $_REQUEST;

            // データが存在するか
            if (empty($data)) {
                return parent::error(400, "invalid_param");
            }

            // 取得したデータに必要な要素が含まれているか
            if (!array_key_exists("member_id", $data)) {
                return parent::error(400, "invalid_param");
            }

            // 会員IDで抽出する
            return $this->postById($data["member_id"]);
        } catch (\Throwable $th) {
            $th;
        }
    }

    public function post(): array
    {
        try {
            include_once(__DIR__ . "/../sql/Users.php");

            // ------------------------------------------------------------
            // データの取得
            // ------------------------------------------------------------
            // $data = json_decode(parent::encode_utf8("php://input"), true);
            $data = $_REQUEST;

            // ------------------------------------------------------------
            // バリデーション
            // ------------------------------------------------------------
            // データが存在するか
            if (empty($data)) {
                return parent::error(400, "invalid_param");
            }

            // 必須チェック(取得データ内に指定のデータが含まれているか)
            if (
                !array_key_exists("name", $data)
                || !array_key_exists("name_kana", $data)
                || !array_key_exists("password", $data)
                || !array_key_exists("birthday", $data)
                || !array_key_exists("gender", $data)
                || !array_key_exists("phone_number", $data)
                || !array_key_exists("mail_address", $data)
                || !array_key_exists("job_id", $data)
            ) {
                return parent::error(400, "invalid_param");
            }

            // 重複チェック
            $check["duplication"] = parent::check_users_duplication($data["mail_address"], $data["password"]);
            if (!array_key_exists("error", $check["duplication"])) {
                return parent::error(422, "unprocessable_entity");
            }

            // 新規作成
            return $this->insert($data);
        } catch (\Throwable $th) {
            $th;
        }
    }

    public function put(): array
    {
        try {
            include_once(__DIR__ . "/../sql/Users.php");

            // ------------------------------------------------------------
            // データの取得
            // ------------------------------------------------------------
            // $data = json_decode(parent::encode_utf8("php://input"), true);
            $data = $_REQUEST;

            // ------------------------------------------------------------
            // バリデーション
            // ------------------------------------------------------------
            // データが存在するか
            if (empty($data)) {
                return parent::error(400, "invalid_param");
            }

            // 必須チェック(取得データ内に指定のデータが含まれているか)
            if (
                !array_key_exists("member_id", $data)
                || !array_key_exists("name", $data)
                || !array_key_exists("name_kana", $data)
                || !array_key_exists("password", $data)
                || !array_key_exists("birthday", $data)
                || !array_key_exists("gender", $data)
                || !array_key_exists("phone_number", $data)
                || !array_key_exists("mail_address", $data)
                || !array_key_exists("job_id", $data)
            ) {
                return parent::error(400, "invalid_param");
            }

            // 重複チェック
            $check["duplication"] = parent::check_users_duplication($data["mail_address"], $data["password"]);
            if (!array_key_exists("error", $check["duplication"])) {
                return parent::error(422, "unprocessable_entity");
            }

            // 更新
            return $this->update($data);
        } catch (\Throwable $th) {
            $th;
        }
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }


    // ユーザーID検索
    private function postById($member_id): array
    {
        // 会員IDで抽出
        $sourses = parent::selectById(Users::GetById, $member_id);
        return $sourses ? $sourses : parent::fatal_error();
    }

    // 新規作成
    private function insert($data): array
    {
        // 新規作成
        $statement = $this->connectDb()->prepare(Users::Add);
        $statement->bindValue(":name",      $data["name"],      PDO::PARAM_STR);
        $statement->bindValue(":name_kana", $data["name_kana"], PDO::PARAM_STR);
        $statement->bindValue(":password",  $data["password"],  PDO::PARAM_STR);
        $statement->bindValue(":birthday",  $data["birthday"],  PDO::PARAM_STR);
        $statement->bindValue(":gender",    $data["gender"],    PDO::PARAM_INT);
        $statement->bindValue(":phone_number", $data["phone_number"], PDO::PARAM_STR);
        $statement->bindValue(":mail_address", $data["mail_address"], PDO::PARAM_STR);
        $statement->bindValue(":job_id",    $data["job_id"],    PDO::PARAM_INT);
        $statement->execute();

        // 新規作成されたユーザーIDの取得
        $member_id = parent::select(Users::GetMaxMemberId)[0]["member_id"];

        // 作成内容を返却
        $this->code = 201;
        return $this->postById($member_id);
    }

    // 更新
    private function update($data): array
    {
        // 更新
        $statement = $this->connectDb()->prepare(Users::Edit);
        $statement->bindValue(":name",      $data["name"],      PDO::PARAM_STR);
        $statement->bindValue(":name_kana", $data["name_kana"], PDO::PARAM_STR);
        $statement->bindValue(":password",  $data["password"],  PDO::PARAM_STR);
        $statement->bindValue(":birthday",  $data["birthday"],  PDO::PARAM_STR);
        $statement->bindValue(":gender",    $data["gender"],    PDO::PARAM_INT);
        $statement->bindValue(":phone_number", $data["phone_number"], PDO::PARAM_STR);
        $statement->bindValue(":mail_address", $data["mail_address"], PDO::PARAM_STR);
        $statement->bindValue(":job_id",    $data["job_id"],    PDO::PARAM_INT);
        $statement->bindValue(":member_id", $data["member_id"], PDO::PARAM_INT);
        $statement->execute();

        // 更新内容を返却
        $this->code = 201;
        return $this->postById($data["member_id"]);
    }
}
