<?php
class MoviesController{

    public $code = 200;
    public $url;
    public $request_body;

    // コンストラクター
    function __construct(){
        $this->url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . mb_substr($_SERVER['SCRIPT_NAME'],0,-9) . basename(__FILE__, ".php")."/";
        $this->request_body = json_decode(mb_convert_encoding(file_get_contents('php://input'),"UTF8","ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN"), true);
    }

    // =============================================================================
    // sql
    // =============================================================================
    private $select_movie = "
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
        $sql_movie  = $this->select_movie . "   WHERE f_movie_id = :id";
        $sql_type   = $this->select_types . "   WHERE handling.f_movie_id = :id";
        $sql_image  = $this->select_images . "   WHERE f_movie_id = :id";

        // 映画TBL検索
        $movies = $db->connect()->prepare($sql_movie);
        $movies->bindparam(':id', $id, PDO::PARAM_INT);
        $movies->execute();
        $res_movie = $movies->fetch(PDO::FETCH_ASSOC);

        // 上映種別TBL検索
        $types = $db->connect()->prepare($sql_type);
        $types->bindparam(':id', $id, PDO::PARAM_INT);
        $types->execute();
        $res_types = $types->fetchAll(PDO::FETCH_ASSOC);
        
        // 画像TBL検索
        $images = $db->connect()->prepare($sql_image);
        $images->bindparam(':id', $id, PDO::PARAM_INT);
        $images->execute();
        $res_images = $images->fetchAll(PDO::FETCH_ASSOC);

        // 映画情報と上映種別情報と画像情報の連結
        $res_movie["types"]     = array();
        $res_movie["images"]    = array();
        foreach($res_types as $res_type){
            array_push( $res_movie["types"], $res_type['name'] );
        }
        foreach($res_images as $res_image){
            array_push( $res_movie["images"], $this->encode_image($res_image['image_url']) );
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
        $sql_movie  = $this->select_movie . "    ORDER BY id";
        $sql_type   = $this->select_types . "    ORDER BY id";
        $sql_image  = $this->select_images . "    ORDER BY id";

        // 映画TBL検索
        $movies = $db->connect()->prepare($sql_movie);
        $movies->execute();
        $res_movies = $movies->fetchAll(PDO::FETCH_ASSOC);

        // 上映種別TBL検索
        $types = $db->connect()->prepare($sql_type);
        $types->execute();
        $res_types = $types->fetchAll(PDO::FETCH_ASSOC);

        // 画像TBL検索
        $images = $db->connect()->prepare($sql_image);
        $images->execute();
        $res_images = $images->fetchAll(PDO::FETCH_ASSOC);

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

    // 画像をbase64へエンコード
    private function encode_image($img_url){
        $img        = file_get_contents($img_url);  // ファイルの内容をs文字列にする
        $enc_img    = base64_encode($img);          // base64でエンコードする
        return $enc_img;
    }

    // 引数の取得があるかどうか
    private function is_set($value):bool{
        return !( is_null($value) || $value === "" );
    }
}

?>