<?php

class TicketsController extends Controller implements crad
{

    public function get(): array
    {
        include_once(__DIR__ . "/../sql/Tickets.php");

        return $this->getAll();
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
    private function getAll()
    {
        // すべてを取得
        $tickets = parent::select(Tickets::GetAll);
        return $tickets ? $tickets : parent::fatal_error();
    }
}
