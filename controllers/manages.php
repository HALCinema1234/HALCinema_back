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
        $res_manage = $this->selectSchedulesById($id)[0];               // 上映管理TBL検索
        $res_types  = parent::selectById(Sql::SelectTypesById, $id);    // 上映種別TBL検索
        $res_images = parent::selectById(Sql::SelectImagesById, $id);   // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $res_manage["movie_types"]       = array();
        $res_manage["movie_images"]      = array();
        $res_manage["advertising_time"]  = (int) $_ENV["AD_TIME"];

        foreach($res_types as $res_type){
            array_push( $res_manage["movie_types"], $res_type['name'] );
        }

        foreach($res_images as $res_image){
            array_push( $res_manage["movie_images"], parent::url_image($res_image['image_url']) );
        }

        if($res_manage){
            return $res_manage;
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    
    // すべて取得
    private function getAll():array{
        $res_manages    = $this->selectSchedulesAll();            // 上映管理TBL検索
        $res_types      = parent::select(Sql::SelectTypesAll);      // 上映種別TBL検索
        $res_images     = parent::select(Sql::SelectImagesAll);     // 画像TBL検索

        // 映画情報と上映種別情報と画像情報の連結
        $cnt = 0;
        while(count($res_manages) > $cnt){
            $res_manages[$cnt]["movie_types"]       = array();
            $res_manages[$cnt]["movie_images"]      = array();
            $res_manages[$cnt]["advertising_time"]  = (int) $_ENV["AD_TIME"];

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

    // スケジュール検索
    private function selectSchedulesAll():array{
        $sourses = $this->db->connect()->prepare(Sql::SelectSchedules);
        $sourses->bindValue(":time", $_ENV["AD_TIME"], PDO::PARAM_INT);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }

    // スケジュール検索
    private function selectSchedulesById($id):array{
        $sourses = $this->db->connect()->prepare(Sql::SelectSchedulesById);
        $sourses->bindValue(":time", $_ENV["AD_TIME"], PDO::PARAM_INT);
        $sourses->bindValue(":id", $id, PDO::PARAM_INT);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>