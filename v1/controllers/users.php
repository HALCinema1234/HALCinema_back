<?php
class UsersController extends Controller implements crad
{
    public function get(): array
    {
        return parent::fatal_error();
    }

    public function post(): array
    {
        include_once(__DIR__ . "/../sql/Users.php");

        $data = json_decode(parent::encode_utf8("php://input"), true);

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
    }

    public function put($isNew = null): array
    {
        include_once(__DIR__ . "/../sql/Users.php");

        $data = json_decode(parent::encode_utf8("php://input"), true);

        // データが存在するか
        if (empty($data)) {
            return parent::error(400, "invalid_param");
        }

        // FIXME: バリデーション
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

        if ($this->is_set($isNew)) {
            // 新規作成
            return $isNew === "make"
                ? $this->insert($data)
                : parent::error(400, "invalid_param");;
        } else {
            // 更新
            return array_key_exists("member_id", $data)
                ? $this->update($data)
                : parent::error(400, "invalid_param");
        }
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }

    // ================================================================
    // 関数
    // ================================================================
    private function postById($member_id): array
    {
        // 会員IDで抽出
        $sourses = parent::selectById(Users::GetById, $member_id);
        return $sourses ? $sourses : parent::fatal_error();
    }

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

        $member_id = parent::select(Sql::GetMaxUserId)[0]["member_id"];
        $this->code = 201;
        return $this->postById($member_id);
    }

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

        $this->code = 201;
        return $this->postById($data["member_id"]);
    }
}
