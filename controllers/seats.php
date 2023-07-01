<?php
class SeatsController extends Controller
{

    // =============================================================================
    // get
    // =============================================================================
    public function get($id = null): array
    {
        if ($this->is_set($id)) {
            return $this->getById($id);
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // idで抽出
    private function getById($id): array
    {
        // 席の予約状況を取得
        $res_seats  = parent::selectById(Sql::SelectSeatsById, $id);

        if ($res_seats) {
            return $res_seats;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }
}
