<?php
    // =================================================================
    // REVIEW: API作成テスト ※ いずれ削除してください
    // mini_bbsから取得した情報をjsonで返す
    // =================================================================

    // 読込
    require "Db.php";

    // 文字コード設定
    header('Content-Type: application/json; charset=UTF-8');

    // オブジェクト生成
    $db = new Db();

    if($db->connect()) {
        $arr["status"]  = "yes";            // DB接続成功

        $members    = $db->getMembers();    // ユーザー情報取得
        $posts      = $db->getPosts();      // 投稿情報取得

        // ユーザー情報 配列格納
        foreach($members AS $member){
            $arr["members"][$member['id']]   = $member;
        }

        // 投稿情報 配列格納
        foreach($posts AS $post){
            $arr["posts"][$post['id']]      = $post;
        }
    }
    else {
        $arr["status"]   = "no";            // DB接続失敗
    }

    // 配列を出力(json)
    print json_encode($arr, JSON_PRETTY_PRINT);

?>
