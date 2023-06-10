<?php
class ManagesController extends Controller{

    // =============================================================================
    // sql
    // =============================================================================
    private $select_movies = "
        SELECT
            manage.f_movie_manage_id            AS id,
            manage.f_movie_manage_day           AS day,
            manage.f_movie_manage_start_time    AS start,
            manage.f_theater_id                 AS theater_id,
            theater.f_theater_type              AS theater_type,
            CASE theater.f_theater_type
                WHEN 1 THEN '大'
                WHEN 2 THEN '中'
                ELSE '小'
            END                                 AS theater_type_name,
            movie.f_movie_id                    AS movie_id,
            movie.f_movie_name                  AS movie_name,
            movie.f_movie_age_restrictions      AS movie_age_restrictions,
            movie.f_movie_time                  AS movie_time
        FROM
            t_movie_manages     AS manage
        JOIN
            t_movies            AS movie
        ON
            manage.f_movie_id = movie.f_movie_id
        JOIN
            t_theaters          AS theater
        ON
            manage.f_theater_id = theater.f_theater_id";

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

        if(parent::is_set($id)){
            return $this->getById($db, $id);
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    // idで抽出
    private function getById($db, $id):array{
        // sql
        $sql_movie  = $this->select_movies . "   WHERE manage.f_movie_id = :id";
        $sql_types  = $this->select_types . "   WHERE handling.f_movie_id = :id";
        $sql_images = $this->select_images . "   WHERE f_movie_id = :id";

        $res_movie  = parent::selectById($db, $sql_movie, $id)[0];  // 映画TBL検索
        $res_types  = parent::selectById($db, $sql_types, $id);     // 上映種別TBL検索
        $res_images = parent::selectById($db, $sql_images, $id);    // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $res_movie["movie_types"]     = array();
        $res_movie["movie_images"]    = array();

        foreach($res_types as $res_type){
            array_push( $res_movie["movie_types"], $res_type['name'] );
        }

        foreach($res_images as $res_image){
            array_push( $res_movie["movie_images"], parent::encode_image($res_image['image_url']) );
        }

        if($res_movie){
            return $res_movie;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }
}

?>