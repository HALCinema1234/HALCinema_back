<?php
class LoginController extends Controller
{

    public function get(): array
    {
        try {
            include_once(__DIR__ . "/../sql/Login.php");
            return $this->login();
        } catch (\Throwable $th) {
            $th;
        }
    }

    // ログイン処理
    private function login(): array
    {
        $data = json_decode(parent::encode_utf8("php://input"), true);
        // $data = $_REQUEST;

        if (empty($data)) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        if (!array_key_exists("email", $data) || !array_key_exists("password", $data)) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        $email      = $data["email"];
        $password   = $data["password"];

        return parent::check_users_duplication($email, $password);
    }
}
