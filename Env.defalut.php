<?php

// Env.phpにリネーム ＋ 適宜環境に合わせて修正してください
class Env{

    // DB接続情報
    const DB_NAME = "halcinema";
    const DB_ID   = "root";
    const DB_PASS = "";
    const DB_HOST = "localhost";
    const DB_PORT = 3306;

    // 画像フォルダ名
    const IMG_FOLDER = "images/";

    // 上映開始までの広告上映の長さ
    const AD_TIME = 10;

    // シアターID
    const THEATER_LARGE   = 1;
    const THEATER_MEDIUM  = 2;
    const THEATER_SMALL   = 3;

    // シアター座席数
    const SEATS_LARGE   = 200;
    const SEATS_MEDIUM  = 120;
    const SEATS_SMALL   = 70;

    // シアター行
    const SEAT_ROWS_LARGE   = 10;   // A B C D E F G H I J
    const SEAT_ROWS_MEDIUM  = 10;   // A B C D E F G H I J
    const SEAT_ROWS_SMALL   = 7;    // A B C D E F G

    // シアター列
    const SEAT_COLS_LARGE   = 20;
    const SEAT_COLS_MEDIUM  = 12;
    const SEAT_COLS_SMALL   = 8;
}

?>