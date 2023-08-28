<?php
class MoviesController extends Controller implements crad
{

    // =============================================================================
    // get
    // =============================================================================
    public function get($movie_id = null): array
    {
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

    // ================================================================
    // 関数
    // ================================================================
    private function getAll(): array
    {
        // 映画情報検索
        $movies         = parent::select(Sql::GetMoviesAll);        // 映画
        $types          = parent::select(Sql::GetMovieTypesAll);    // 上映種別
        $images         = parent::select(Sql::GetImagesAll);        // 画像

        // 上映管理検索
        $manages        = $this->selectSchedulesAll();              // 上映スケジュール
        $manage_types   = parent::select(Sql::GetManageTypesAll);   // 上映種別

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

    private function getById($id): array
    {
        // 映画情報検索
        $movies         = parent::selectById(Sql::GetMoviesById,      $id)[0];  // 映画
        $types          = parent::selectById(Sql::GetMovieTypesById,  $id);     // 上映種別
        $images         = parent::selectById(Sql::GetImagesById,      $id);     // スクリーンショット

        // 上映管理検索
        $manages        = $this->selectSchedulesById($id);                      // スケジュール
        $manage_types   = parent::selectById(Sql::GetManageTypesById, $id);     // 上映種別

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
        $sourses = parent::connectDb()->prepare(Sql::GetSchedulesAll);
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
        $sourses = parent::connectDb()->prepare(Sql::GetSchedulesById);
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
