<?php
class MoviesController extends Controller{

    // =============================================================================
    // get
    // =============================================================================
    public function get($id=null):array {
        if($this->is_set($id)){
            return $this->getById($id);
        }
        else{
            return $this->getAll();
        }
    }

    // idで抽出
    private function getById($id):array{
        // sql
        $sql_movie  = Sql::SelectMovies . "   WHERE f_movie_id = :id";
        $sql_type   = Sql::SelectTypes . "   WHERE handling.f_movie_id = :id";
        $sql_image  = Sql::SelectImages . "   WHERE f_movie_id = :id";

        $res_movie  = parent::selectById($sql_movie, $id)[0];    // 映画TBL検索
        $res_types  = parent::selectById($sql_type, $id);        // 上映種別TBL検索
        $res_images = parent::selectById($sql_image, $id);      // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $res_movie["types"]     = array();
        $res_movie["images"]    = array();

        foreach($res_types as $res_type){
            array_push( $res_movie["types"], $res_type['name'] );
        }

        foreach($res_images as $res_image){
            array_push( $res_movie["images"], parent::url_image($res_image['image_url']));
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
    private function getAll():array{
        // sql
        $sql_movies  = Sql::SelectMovies . "    ORDER BY id";
        $sql_types   = Sql::SelectTypes . "    ORDER BY id";
        $sql_images  = Sql::SelectImages . "    ORDER BY id";

        $res_movies = parent::select($sql_movies);   // 映画TBL検索
        $res_types  = parent::select($sql_types);    // 上映種別TBL検索
        $res_images = parent::select($sql_images);   // 画像TBL検索

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
                    array_push($res_movies[$cnt]["images"], $this->url_image($res_image['image_url']));
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