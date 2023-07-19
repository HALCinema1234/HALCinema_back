<?php
class UsersController extends Controller implements crad
{
    public function get(): array
    {
        return parent::fatal_error();
    }

    public function post(): array
    {
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
        $data = json_decode(parent::encode_utf8("php://input"), true);

        // データが存在するか
        if (empty($data)) {
            return parent::error(400, "invalid_param");
        }

        if ($this->is_set($isNew)) {
            // 更新
            $this->putUpdateUser();
        } else {
            // 新規作成
            $this->putInsertUser();
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
        $sourses = parent::selectById(Sql::GetUserById, $member_id);
        return $sourses ? $sourses : parent::fatal_error();
    }

    private function putUpdateUser(): array
    {
        // 情報更新
        return parent::fatal_error();
    }

    private function putInsertUser(): array
    {
        // 新規作成
        return parent::fatal_error();
    }
}
