<?php

include(__DIR__ . "/Db.php");
include(__DIR__ . "/controllers/controller.php");

// =============================================================================
// URIを分割して配列に格納
// =============================================================================
$pattern = '|' . dirname($_SERVER["SCRIPT_NAME"]) . '/([\w%/]*)|';      // パターン(ファイル名/引数/引数/…)
preg_match($pattern, $_SERVER["REQUEST_URI"], $matches);                // URIから(ファイル名/引数/引数/…)を抽出

$paths  = explode('/', $matches[1]);                                    // 抽出済URIを"/"で分割して配列化
$file   = array_shift($paths);                                          // $paths[0]を配列から切り取って変数に格納
$file_path = './controllers/' . $file .'.php';                          // ファイルパス

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