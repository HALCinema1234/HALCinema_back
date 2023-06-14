<?php
class ManagesController extends Controller{

    // =============================================================================
    // get
    // =============================================================================
    public function get($id=null):array {

        if(parent::is_set($id)){
            return $this->getById($id);
        }
        else{
            return $this->getAll();
        }
    }

    // idで抽出
    private function getById($id):array{
        $res_movie  = parent::selectSchedulesById(Sql::SelectSchedulesById, $id)[0]; // 映画TBL検索
        $res_types  = parent::selectById(Sql::SelectTypesById, $id);                // 上映種別TBL検索
        $res_images = parent::selectById(Sql::SelectImagesById, $id);               // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $res_movie["movie_types"]       = array();
        $res_movie["movie_images"]      = array();
        $res_movie["advertising_time"]  = Config::AdvertisingTime;

        foreach($res_types as $res_type){
            array_push( $res_movie["movie_types"], $res_type['name'] );
        }

        foreach($res_images as $res_image){
            array_push( $res_movie["movie_images"], parent::url_image($res_image['image_url']) );
        }

        if($res_movie){
            return $res_movie;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    
    // idで抽出
    private function getAll():array{
        $res_manages  = parent::selectSchedulesAll(Sql::SelectSchedules);   // 映画TBL検索
        $res_types  = parent::select(Sql::SelectTypesAll);                  // 上映種別TBL検索
        $res_images = parent::select(Sql::SelectImagesAll);                 // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $cnt = 0;
        while(count($res_manages) > $cnt){
            $res_manages[$cnt]["movie_types"]       = array();
            $res_manages[$cnt]["movie_images"]      = array();
            $res_manages[$cnt]["advertising_time"]  = Config::AdvertisingTime;

            foreach($res_types as $res_type){
                if($res_manages[$cnt]["movie_id"] == $res_type["id"]){
                    array_push($res_manages[$cnt]["movie_types"], $res_type["name"]);
                }
            }

            foreach($res_images as $res_image){
                if($res_manages[$cnt]["movie_id"] == $res_image["id"]){
                    array_push($res_manages[$cnt]["movie_images"], $this->url_image($res_image["image_url"]));
                }
            }

            $cnt++;
        }

        if($res_manages){
            return $res_manages;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }
}

?>