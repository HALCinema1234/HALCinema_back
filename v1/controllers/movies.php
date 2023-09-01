<?php
class MoviesController extends Controller implements crad
{
    public function get($movie_id = null): array
    {
        // ------------------------------------------------------------
        // SQLの読込
        // ------------------------------------------------------------
        include_once(__DIR__ . "/../sql/Movies.php");
        include_once(__DIR__ . "/../sql/MovieTypes.php");
        include_once(__DIR__ . "/../sql/Schedules.php");
        include_once(__DIR__ . "/../sql/ManageTypes.php");
        include_once(__DIR__ . "/../sql/Images.php");

        // ------------------------------------------------------------
        // DB検索処理
        // ------------------------------------------------------------
        return
            parent::is_set($movie_id)
            ? $this->getById($movie_id)         // 映画IDで抽出
            : $this->getAll();                  // すべて
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

    // すべて取得する
    private function getAll(): array
    {
        // 映画情報を検索する
        $movies         = parent::select(Movies::GetAll);           // 映画
        $types          = parent::select(MovieTypes::GetAll);       // 上映種別
        $images         = parent::select(Images::GetAll);           // 画像

        // 上映管理(スケジュール)を検索する
        $manages        = $this->selectSchedulesAll();              // 上映スケジュール
        $manage_types   = parent::select(ManageTypes::GetAll);      // 上映種別

        $i = 0;
        while (count($movies) > $i) {
            $movie_id   = $movies[$i]["id"];

            $movies[$i]["types"]      = array();
            $movies[$i]["images"]     = array();
            $movies[$i]["manages"]    = array();

            // サムネイル
            $movies[$i]["thumbnail"] = parent::url_image($movies[$i]["thumbnail"]);

            // 上映種別
            foreach ($types as $type) {
                $movie_id == $type["id"] && array_push($movies[$i]["types"], $type["name"]);
            }

            // スクリーンショット
            foreach ($images as $image) {
                $movie_id == $image["id"] && array_push($movies[$i]["images"], parent::url_image($image["image_url"]));
            }

            $j = 0;
            while (count($manages) > $j) {
                $manages[$j]["types"]    = array();

                // 上映種別
                foreach ($manage_types as $type) {
                    $manages[$j]["id"] == $type["id"] && array_push($manages[$j]["types"], $type["name"]);
                }

                // スケジュール
                $movie_id == $manages[$j]["movie_id"] && array_push($movies[$i]["manages"], $manages[$j]);

                $j++;
            }

            $i++;
        }

        return $movies ? $movies : parent::fatal_error();
    }

    // 映画IDで抽出する
    private function getById($id): array
    {
        // 映画情報を検索する
        $movies         = parent::selectById(Movies::GetById,      $id)[0];     // 映画
        $types          = parent::selectById(MovieTypes::GetById,  $id);        // 上映種別
        $images         = parent::selectById(Images::GetById,      $id);        // スクリーンショット

        // 上映管理を検索する
        $manages        = $this->selectSchedulesById($id);                      // スケジュール
        $manage_types   = parent::selectById(ManageTypes::GetById, $id);        // 上映種別

        $movies["images"]   = array();
        $movies["type"]     = array();
        $movies["manages"]  = array();

        // スクリーンショット
        foreach ($images as $image) {
            array_push($movies["images"], parent::url_image($image["image_url"]));
        }

        // 上映種別
        foreach ($types as $type) {
            array_push($movies["type"], $type["name"]);
        }

        // 上映スケジュール
        $cnt = 0;
        while (count($manages) > $cnt) {
            $manages[$cnt]["types"] = array();

            foreach ($manage_types as $type) {
                $manages[$cnt]["id"] == $type["id"] && array_push($manages[$cnt]["types"], $type["name"]);
            }

            $cnt++;
        }
        $movies["manages"] = $manages;

        return $movies ? $movies : parent::fatal_error();
    }

    // スケジュール検索
    private function selectSchedulesAll(): array
    {
        $sourses = parent::connectDb()->prepare(Schedules::GetAll);
        $sourses->bindValue(":time1",           Env::AD_TIME,           PDO::PARAM_INT);
        $sourses->bindValue(":time2",           Env::AD_TIME,           PDO::PARAM_INT);
        $sourses->bindValue(":theater_large",   Env::THEATER_LARGE,     PDO::PARAM_INT);
        $sourses->bindValue(":seats_large",     Env::SEATS_LARGE,       PDO::PARAM_INT);
        $sourses->bindValue(":theater_medium",  Env::THEATER_MEDIUM,    PDO::PARAM_INT);
        $sourses->bindValue(":seats_medium",    Env::SEATS_MEDIUM,      PDO::PARAM_INT);
        $sourses->bindValue(":seats_small",     Env::SEATS_SMALL,       PDO::PARAM_INT);
        $sourses->execute();

        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }

    private function selectSchedulesById($id): array
    {
        $sourses = parent::connectDb()->prepare(Schedules::GetById);
        $sourses->bindValue(":time1",           Env::AD_TIME,           PDO::PARAM_INT);
        $sourses->bindValue(":time2",           Env::AD_TIME,           PDO::PARAM_INT);
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
