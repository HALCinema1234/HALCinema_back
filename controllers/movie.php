<?php

class MovieController{
    public $code = 200;
    public $url;
    public $request_body;

    function __construct(){
        $this->url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . mb_substr($_SERVER['SCRIPT_NAME'],0,-9) . basename(__FILE__, ".php")."/";
        $this->request_body = json_decode(mb_convert_encoding(file_get_contents('php://input'),"UTF8","ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN"), true);
    }

    public function get():array {
        $db = new DB();
    
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
}

?>