<?php
class Db{    
    // ==============================================================================
    // DB接続(返り値:true/false)
    // ==============================================================================
    function connect(){
        try{
            // $dsn = "mysql:host={$_Env['DB_HOST']};dbname={$_Env['DB_NAME']};charset=utf8;port={$_Env['DB_PORT']}";
            $dsn = "mysql:host=". Env::DB_HOST . ";dbname=" . Env::DB_NAME . ";charset=utf8;port=" . Env::DB_PORT;
            $driver_option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => true,
            ];

            $db = new PDO($dsn, Env::DB_ID, Env::DB_PASS, $driver_option);
        }
        catch( PDOException $e ){
            header("Content-Type: application/json; charset=utf-8", true, 500);
            echo json_encode( ["error" => ["type" => "server_error", "message"=>$e->getMessage()] ] );
            die();
        }

        return $db;
    }
}
