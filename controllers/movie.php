<?php

class MovieController{

    public $code = 200;
    public $url;
    public $request_body;

    // コンストラクター
    function __construct(){
        $this->url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . mb_substr($_SERVER['SCRIPT_NAME'],0,-9) . basename(__FILE__, ".php")."/";
        $this->request_body = json_decode(mb_convert_encoding(file_get_contents('php://input'),"UTF8","ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN"), true);
    }

    // =============================================================================
    // URLを分割して配列に格納
    // =============================================================================
    public function get($status=null, $id=null):array {
        $db = new DB();

        if($this->is_set($id)){
            return $this->getById($db, $id);
        }
        else{

            if($this->is_set($status)){
                switch($status){
                    case 'starting':
                        return $this->getStarting($db);
                        break;
                    case 'released':
                        return $this->getReleased($db);
                        break;
                }
            }
            else{
                return $this->getAll($db);
            }

        }
    }

    // idで抽出
    private function getById($db, $id):array{
        $sql = "
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
                t_movies
            WHERE
                f_movie_id = :id";

        $sth = $db->connect()->prepare($sql);
        $sth->bindparam(':id', $id, PDO::PARAM_INT);
        $res = $sth->execute();

        if($res){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    // 公開中
    private function getStarting($db):array{
        $sql = "
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
                t_movies
            WHERE
                now() BETWEEN f_movie_start_day AND f_movie_end_day";

        $sth = $db->connect()->prepare($sql);
        $res = $sth->execute();

        if($res){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    // 公開終了
    private function getReleased($db):array{
        $sql = "
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
                t_movies
            WHERE
                now() > f_movie_end_day
            ORDER BY
                f_movie_end_day DESC
            LIMIT 0, 6";

        $sth = $db->connect()->prepare($sql);
        $res = $sth->execute();

        if($res){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }
    

    // すべて
    private function getAll($db):array{
        $sql = "
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

        $sth = $db->connect()->prepare($sql);
        $res = $sth->execute();

        if($res){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $this->code = 500;
            return ["error" => [ "type" => "fatal_error" ]];
        }
    }

    // 引数の取得があるかどうか
    private function is_set($value):bool{
        return !( is_null($value) || $value === "" );
    }
}

?>