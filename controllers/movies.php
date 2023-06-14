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
        $res_movie  = parent::selectById(Sql::SelectMoviesById, $id)[0];    // 映画TBL検索
        $res_types  = parent::selectById(Sql::SelectTypesById, $id);        // 上映種別TBL検索
        $res_images = parent::selectById(Sql::SelectImagesById, $id);       // 画像TBL検索

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
        $res_movies = parent::select(Sql::SelectMoviesAll);   // 映画TBL検索
        $res_types  = parent::select(Sql::SelectTypesAll);    // 上映種別TBL検索
        $res_images = parent::select(Sql::SelectImagesAll);   // 画像TBL検索

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