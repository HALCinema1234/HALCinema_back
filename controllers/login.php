<?php
class LoginController extends Controller
{

    // =============================================================================
    // post
    // =============================================================================
    public function post(): array
    {
        return $this->postLogin();
    }

    // ログイン処理
    private function postLogin(): array
    {
        $data = json_decode(parent::encode_utf8("php://input"), true);

        if (empty($data)) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        if (
            !array_key_exists("manage_id", $data)
            || !array_key_exists("member_id", $data)
            || !array_key_exists("seat", $data)
        ) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        if ($res_seats) {
            return $res_seats;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }
}
