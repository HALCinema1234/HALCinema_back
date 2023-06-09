<?php

include(__DIR__ . "/Db.php");

// =============================================================================
// URLを分割して配列に格納
// =============================================================================
preg_match('|' . dirname($_SERVER["SCRIPT_NAME"]) . '/([\w%/]*)|', $_SERVER["REQUEST_URI"], $matches);
$paths  = explode('/', $matches[1]);                // 引数
$file   = array_shift($paths);                      // ファイル名
$file_path = './controllers/' . $file .'.php';      // ファイルパス

// =============================================================================
// コントローラーの呼び出し
// =============================================================================
if( file_exists($file_path) ){
    // コントローラーあり
    include( $file_path );

    $class_name     = ucfirst( $file )."Controller";                    // コントロール名
    $method_name    = strtolower( $_SERVER["REQUEST_METHOD"] );         // メソッド名(HTTPメソッド)

    $object         = new $class_name();                                // オブジェクト生成
    $response       = json_encode($object->$method_name(...$paths));
    $response_code  = $object->code ?? 200;

    // header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8", true, $response_code);
    echo $response;
}
else{
    // コントローラーなし
    header("HTTP/1.1 404 Not Found");
    exit;
}

?>