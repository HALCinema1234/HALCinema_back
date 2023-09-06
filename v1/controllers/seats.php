<?php
class SeatsController extends Controller implements crad
{

    public function get($manage_id = null): array
    {
        try {
            include_once(__DIR__ . "/../sql/Seats.php");
            include_once(__DIR__ . "/../sql/Theaters.php");

            return
                $this->is_set($manage_id)
                ? $this->getById($manage_id)        // 上映管理IDで抽出
                : parent::fatal_error();            // エラー
        } catch (\Throwable $th) {
            $th;
        }
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
        $theaters = $this->selectTheatersById($manage_id);
        $seats = parent::selectById(Seats::GetByManageId, $manage_id);

        if ($theaters) {
            return [$theaters, $seats];
        }

        return parent::fatal_error();
    }

    private function selectTheatersById($id): array
    {
        $sourses = parent::connectDb()->prepare(Theaters::GetById);
        $sourses->bindValue(":theater_large",   Env::THEATER_LARGE,     PDO::PARAM_INT);
        $sourses->bindValue(":seats_large",     Env::SEATS_LARGE,       PDO::PARAM_INT);
        $sourses->bindValue(":theater_medium",  Env::THEATER_MEDIUM,    PDO::PARAM_INT);
        $sourses->bindValue(":seats_medium",    Env::SEATS_MEDIUM,      PDO::PARAM_INT);
        $sourses->bindValue(":seats_small",     Env::SEATS_SMALL,       PDO::PARAM_INT);
        $sourses->bindValue(":id",              $id,                    PDO::PARAM_INT);
        $sourses->execute();

        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }
}
