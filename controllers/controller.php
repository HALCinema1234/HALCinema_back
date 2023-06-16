<?php

class Controller{

    public $code = 200;
    public $url, $request_body;

    private $scheme, $host, $path, $controller;
    protected $db;

    // コンストラクター
    function __construct(){
        $this->scheme         = empty($_SERVER["HTTPS"])? "http://": "https://";
        $this->host           = $_SERVER["HTTP_HOST"];
        $this->path           = mb_substr($_SERVER["SCRIPT_NAME"], 0, -9);
        $this->controller     = basename(__FILE__, ".php");

        $this->url          =  $this->scheme . $this->host . $this->path .  $this->controller . "/";
        $this->request_body = json_decode( $this->encode_utf8("php://input"), true );
        $this->db           = new DB();
    }

    // 画像をbase64へエンコード
    // protected function encode_image($img_url):string{
    //     $img        = file_get_contents($img_url);  // ファイルの内容を文字列にする
    //     $enc_img    = base64_encode($img);          // base64でエンコードする
    //     return $enc_img;
    // }

    // 画像をbase64へエンコード
    protected function url_image($img_url):string{
        return $this->scheme . $this->host . $this->path . $img_url;
    }

    // ファイルをutf8へエンコード
    private function encode_utf8($file):string{
        $str_file = file_get_contents($file);   // ファイルの中身を取得
        return mb_convert_encoding($str_file, "UTF8", "ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN");
    }

    // 引数の取得があるかどうか
    protected function is_set($value):bool{
        return !( is_null($value) || $value === "" );
    }

    // すべて検索
    protected function select($sql):array{
        $sourses = $this->db->connect()->prepare($sql);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }

    // ID検索
    protected function selectById($sql, $id):array{
        $sourses = $this->db->connect()->prepare($sql);
        $sourses->bindparam(":id", $id, PDO::PARAM_INT);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }

    // // スケジュール検索
    // protected function selectSchedulesAll($sql):array{
    //     // 上映開始までの広告上映の長さ
    //     $advertisingTime = Config::AdvertisingTime;

    //     $sourses = $this->db->connect()->prepare($sql);
    //     $sourses->bindValue(":time", $advertisingTime, PDO::PARAM_INT);
    //     $sourses->execute();
    //     return $sourses->fetchAll(PDO::FETCH_ASSOC);
    // }

    // // スケジュール検索
    // protected function selectSchedulesById($sql, $id):array{
    //     // 上映開始までの広告上映の長さ
    //     $advertisingTime = Config::AdvertisingTime;

    //     $sourses = $this->db->connect()->prepare($sql);
    //     $sourses->bindValue(":time", $advertisingTime, PDO::PARAM_INT);
    //     $sourses->bindValue(":id", $id, PDO::PARAM_INT);
    //     $sourses->execute();
    //     return $sourses->fetchAll(PDO::FETCH_ASSOC);
    // }
}

?>