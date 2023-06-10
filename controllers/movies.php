<?php
class MoviesController extends Controller{
    // =============================================================================
    // sql
    // =============================================================================
    private $select_movies = "
        SELECT
            f_movie_id                  AS id,
            f_movie_name                AS name,
            f_movie_start_day           AS start,
            f_movie_end_day             AS end,
            f_movie_age_restrictions    AS age_restrictions,
            f_movie_data                AS data,
            f_movie_introduction        AS introduction,
            f_movie_time                AS time
        FROM
            t_movies";

    private $select_types = "
        SELECT
            handling.f_movie_id         AS id,
            type.f_movie_type_name      AS name
        FROM
            t_handling_movie_types as handling
        JOIN
            t_movie_types as type
        ON
            handling.f_movie_type_id = type.f_movie_type_id";
    
    private $select_images = "
        SELECT
            f_movie_id          AS id,
            f_movie_image_url   AS image_url
        FROM
            t_movie_images";

    // =============================================================================
    // get
    // =============================================================================
    public function get($id=null):array {
        $db = new DB();

        if($this->is_set($id)){
            return $this->getById($db, $id);
        }
        else{
            return $this->getAll($db);
        }
    }

    // idで抽出
    private function getById($db, $id):array{
        // sql
        $sql_movie  = $this->select_movies . "   WHERE f_movie_id = :id";
        $sql_type   = $this->select_types . "   WHERE handling.f_movie_id = :id";
        $sql_image  = $this->select_images . "   WHERE f_movie_id = :id";

        $res_movie  = parent::selectById($db, $sql_movie, $id)[0];    // 映画TBL検索
        $res_types  = parent::selectById($db, $sql_type, $id);        // 上映種別TBL検索
        $res_images = parent::selectById($db, $sql_image, $id);      // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $res_movie["types"]     = array();
        $res_movie["images"]    = array();

        foreach($res_types as $res_type){
            array_push( $res_movie["types"], $res_type['name'] );
        }

        foreach($res_images as $res_image){
            array_push( $res_movie["images"], parent::encode_image($res_image['image_url']) );
        }

        if($res_movie){
            return $res_movie;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    // すべて
    private function getAll($db):array{
        // sql
        $sql_movies  = $this->select_movies . "    ORDER BY id";
        $sql_types   = $this->select_types . "    ORDER BY id";
        $sql_images  = $this->select_images . "    ORDER BY id";

        $res_movies = parent::select($db, $sql_movies);   // 映画TBL検索
        $res_types  = parent::select($db, $sql_types);    // 上映種別TBL検索
        $res_images = parent::select($db, $sql_images);   // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $cnt = 0;
        while(count($res_movies) > $cnt){
            $res_movies[$cnt]['types'] = array();
            $res_movies[$cnt]['images'] = array();

            foreach($res_types as $res_type){
                if($res_movies[$cnt]["id"] == $res_type['id']){
                    array_push($res_movies[$cnt]["types"], $res_type['name']);
                }
            }

            foreach($res_images as $res_image){
                if($res_movies[$cnt]["id"] == $res_image['id']){
                    array_push($res_movies[$cnt]["images"], $this->encode_image($res_image['image_url']));
                }
            }

            $cnt++;
        }

        if($res_movies){
            return $res_movies;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }
}

?>