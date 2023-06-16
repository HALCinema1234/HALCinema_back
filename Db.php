<?php
class Db{    
    // ==============================================================================
    // DB接続(返り値:true/false)
    // ==============================================================================
    function connect(){
        try{
            $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8;port={$_ENV['DB_PORT']}";
            $driver_option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $db = new PDO($dsn, $_ENV["DB_ID"], $_ENV['DB_PASS'], $driver_option);
        }
        catch( PDOException $e ){
            header("Content-Type: application/json; charset=utf-8", true, 500);
            echo json_encode( ["error" => ["type" => "server_error", "message"=>$e->getMessage()] ] );
            die();
        }

        return $db;
    }
}

?>
