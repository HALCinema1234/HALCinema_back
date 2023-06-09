<?php
class Db{

    private $userid;
    private $pass, $host, $dbname, $port, $dsn;

    // コンストラクタ(インスタンス化された時に実行される)
    function __construct($dbname = "halcinema",
                    $id     = "root",
                    $pass   = "",
                    $host   = "localhost",
                    $port   = 3306){

        $this->userid   = $id;
        $this->pass     = $pass;
        $this->host     = $host;
        $this->dbname   = $dbname;
        $this->port     = $port;
        $this->dsn      = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8;port={$this->port}";
    }

    // マジックメソッドのアクセッサ―
    function __get($name){ return $this->name; }
    function __set( $name, $val ){ $this->{$name} = $val; }

    // ==============================================================================
    // DB接続(返り値:true/false)
    // ==============================================================================
    function connect(){

        try{
            $driver_option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $this->db = new PDO($this->dsn, $this->userid, $this->pass, $driver_option);
        }
        catch( PDOException $e ){
            header("Content-Type: application/json; charset=utf-8", true, 500);
            echo json_encode( ["error" => ["type" => "server_error", "message"=>$e->getMessage()] ] );
            die();
        }

        return $this->db;
    }
}

?>
