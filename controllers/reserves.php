<?php
class ReservesController extends Controller
{
    // =============================================================================
    // get
    // =============================================================================
    // public function get(): array
    // {
    //     if ($this->is_set($id)) {
    //         return $this->getById($id);
    //     } else {
    //         $this->code = 500;
    //         return ["error" => ["type" => "fatal_error"]];
    //     }
    // }

    // =============================================================================
    // put
    // =============================================================================
    public function put(): array
    {
        return $this->putReserves();
    }

    public function putReserves($id = null): array
    {
        $data = json_decode(parent::encode_utf8("php://input"), true);

        if (empty($data)) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        // TODO: 会員のみ購入可能(会員以外の対応まだです)
        if (
            !array_key_exists("manage_id", $data)
            || !array_key_exists("member_id", $data)
            || !array_key_exists("seat", $data)
        ) {
            // $postに必要なキーが存在することをチェック
            $this->code = 400;
            return ["error" => ["type" => "invalid_param"]];
        }

        return ["data" => $data];

        // DB登録

        // if ($res) {
        //     $this->code = 201;
        //     header("Location: " . $this->url . $post["id"]);
        //     return [];
        // } else {
        //     $this->code = 500;
        //     return ["error" => ["type" => "fatal_error"]];
        // }
    }
}
