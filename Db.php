<?php
class Db{

    private $userid;
    private $pass, $host, $dbname, $port, $dsn;

    // コンストラクタ(インスタンス化された時に実行される)
    function __construct($dbname = "mini_bbs",
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
        $flg = true;

        try{
            $this->db = new PDO($this->dsn, $this->userid, $this->pass);
        }
        catch( PDOException $e ){
            $flg = false;
            print "接続エラー：".$e->getMessage();
        }

        return $flg;
    }

    // ==============================================================================
    // SQL
    // ==============================================================================
    private $sqlMembers = 'select * from members;';
    private $sqlPosts   = 'select * from posts;';

    // ==============================================================================
    // DB検索
    // ==============================================================================
    // 汎用
    function show($sql){
        $contents = $this->db->prepare($sql);
        $contents->execute();

        return $contents;
    }

    // members
    function getMembers(){
        return $this->show($this->sqlMembers)->fetchAll(PDO::FETCH_ASSOC);
    }

    // posts
    function getPosts(){
        return $this->show($this->sqlPosts)->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
