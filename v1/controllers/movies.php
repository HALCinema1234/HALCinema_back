<?php
class MoviesController extends Controller
{

    // =============================================================================
    // get
    // =============================================================================
    public function get($id = null): array
    {

        if (parent::is_set($id)) {
            return $this->getById($id);
        } else {
            return $this->getAll();
        }
    }

    // 映画リストの取得
    private function getAll(): array
    {
        $res_movies         = parent::select(Sql::SelectMoviesAll);         // 映画検索
        $res_types          = parent::select(Sql::SelectMovieTypesAll);     // 上映種別検索
        $res_movie_images   = parent::select(Sql::SelectImagesAll);         // 画像検索
        
        // 映画情報と上映種別情報の連結
        $cnt = 0;
        while (count($res_movies) > $cnt) {
            $res_movies[$cnt]["types"]      = array();
            $res_movies[$cnt]["images"]     = array();
            $res_movies[$cnt]["manages"]    = array();

            // 上映種別
            foreach ($res_types as $type) { 
                $res_movies[$cnt]["id"] == $type["id"] && array_push($res_movies[$cnt]["types"], $type["name"]); 
            }

            // サムネイル
            $res_movies[$cnt]["thumbnail"] = parent::url_image($res_movies[$cnt]["thumbnail"]);
            
            // スクリーンショット
            foreach ($res_movie_images as $image) {
                $res_movies[$cnt]["id"] == $image["id"] && array_push($res_movies[$cnt]["images"], parent::url_image($image["image_url"]));
            }

            // 上映スケジュール
            $res_manages = $this->selectSchedulesById($res_movies[$cnt]["id"]);
            // while (count($res_manages) > $cnt) {
            //     // 上映種別TBL検索
            //     $res_manage_types  = parent::selectById(Sql::SelectManageTypesById, $res_manages[$cnt]["id"]);

            //     $res_manages[$cnt]["types"] = array();
            //     foreach ($res_manage_types as $type) { array_push($res_manages[$cnt]["types"], $type["name"]); }

            //     $cnt++;
            // }
            $res_movies[$cnt]["manages"] = $res_manages;

            $cnt++;
        }


        if ($res_movies) {
            return $res_movies;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // 映画詳細の取得
    private function getById($id): array
    {
        // 映画情報検索
        $res_movies         = parent::selectById(Sql::SelectMoviesById, $id);
        $res_movie_types    = parent::selectById(Sql::SelectMovieTypesById, $id);
        $res_movie_images   = parent::selectById(Sql::SelectImagesById, $id);

        // 上映管理検索
        $res_manages        = $this->selectSchedulesById($id);

        $cnt = 0;
        while (count($res_manages) > $cnt) {
            // 上映種別TBL検索
            $res_manages[$cnt]["types"] = array();
            $res_manage_types  = parent::selectById(Sql::SelectManageTypesById, $res_manages[$cnt]["id"]);

            foreach ($res_manage_types as $type) {
                array_push($res_manages[$cnt]["types"], $type["name"]);
            }

            $cnt++;
        }

        $res_movies["images"] = array();
        foreach ($res_movie_images as $image) {
            array_push($res_movies["images"], parent::url_image($image["image_url"]));
        }

        $res_movies["type"] = array();
        foreach ($res_movie_types as $type) {
            array_push($res_movies["type"], $type["name"]);
        }

        $res_movies["manages"] = $res_manages;

        if ($res_movies) {
            return $res_movies;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // スケジュール検索
    private function selectSchedulesById($id): array
    {
        $sourses = parent::connectDb()->prepare(Sql::SelectSchedulesById);
        $sourses->bindValue(":time1", Env::AD_TIME, PDO::PARAM_INT);
        $sourses->bindValue(":time2", Env::AD_TIME, PDO::PARAM_INT);
        $sourses->bindValue(":id", $id, PDO::PARAM_INT);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }
}