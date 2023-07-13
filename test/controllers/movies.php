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
        $res_movies         = array();

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