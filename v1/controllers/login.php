<?php
class LoginController extends Controller
{

    // =============================================================================
    // post
    // =============================================================================
    public function post(): array
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

        $sourses = parent::connectDb()->prepare(Login::Check);
        $sourses->bindparam(":email", $email, PDO::PARAM_STR);
        $sourses->bindparam(":password", $password, PDO::PARAM_STR);
        $sourses->execute();
        $member = $sourses->fetch(PDO::FETCH_ASSOC);

        if ($member) {
            return $member;
        } else {
            $this->code = 401;
            return ["error" => ["type" => "login_failed"]];
        }
    }
}
