<?php
class SeatsController extends Controller implements crad
{

    public function get($manage_id = null): array
    {
        include_once(__DIR__ . "/../sql/Seats.php");

        return
            $this->is_set($manage_id)
            ? $this->getById($manage_id)        // 上映管理IDで抽出
            : parent::fatal_error();            // エラー
    }

    public function post(): array
    {
        return parent::fatal_error();
    }

    public function put(): array
    {
        return parent::fatal_error();
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }

    // ================================================================
    // 関数
    // ================================================================
    private function getById($manage_id): array
    {
        $seats = parent::selectById(Seats::GetByManageId, $manage_id);
        return $seats ? $seats : parent::fatal_error();;
    }
}
