# HALCinema_back

## 概要

映画館「HAL シネマ」予約販売管理システムで使用する、DB と HALcinema_front をつなぐ API です。

## 要件

| 使用                 | バージョン |
| -------------------- | ---------- |
| php                  | 8.0.12     |
| composer             | 2.4.1      |
| ~~vlucas/phpdotenv~~ | ~~5.5~~    |
| mysql                | 15.1       |

~~.env.local で環境変数を設定しています。~~
~~適宜、.env.local.defalt をコピーし、.env.local を作成・編集してください。~~
~~.env ファイルを運用するために phpdotenv が必要です。composer をインストール後、phpdotenv を取得してください。~~

- **Env.php で環境変数を設定しています。**
- **適宜、Env.defalt.php をコピーし、Env.php を作成・編集してください。**

## 設計

| ステータス | URL                 | 概要                                     |
| ---------- | ------------------- | ---------------------------------------- |
| GET        | movies              | 映画リスト(公開中/公開予定)を取得        |
| GET        | movies/{映画 ID}    | 映画情報・公開スケジュール(一週間)を取得 |
| GET        | ticket              | 券種リストを取得                         |
| GET        | seats/{上映管理 ID} | 予約済座席リストを取得                   |
| GET        | users/{会員 ID}     | 作成中                                   |
| PUT        | reserves/           | 作成中                                   |

## 構成

| フォルダ/ファイル      | 概要                                                                                                      |
| ---------------------- | --------------------------------------------------------------------------------------------------------- |
| controllers/\*.php     | コントローラー。検索や更新など、DB 操作をしている。                                                       |
| database/halcinema.sql | 現在使用しているデータベースの DDL。                                                                      |
| images/{映画名}/\*.jpg | 映画のメインビジュアルやスクリーンショット。                                                              |
| vendor/\*.\*           | **(現在未使用)** (vlucas/phpdotenv)                                                                       |
| .env.local.default     | **(現在未使用)** 環境変数ファイル。DB の接続情報などの定数を管理する。                                    |
| .gitignore             | (git) git で管理したくないファイルを記述しておくファイル。                                                |
| .htaccess              | サーバーの制御ファイル。フォルダにアクセスした時、index.php へ転送している。                              |
| composer.json          | **(現在未使用)** (composer)                                                                               |
| composer.lock          | **(現在未使用)** (composer)                                                                               |
| Db.php                 | DB 接続クラス。                                                                                           |
| Env.default.php        | 環境変数ファイル。DB の接続情報などの定数を管理する。                                                     |
| ** Env.php **          | 環境変数のクラスファイル。DB の接続情報などの定数を管理する。**個人の環境に合わせて作成・編集すること。** |
| index.php              | 最初に呼ばれるページ。URI から controllers フォルダ内のクラスを呼び出し、処理結果を json で返している。   |
| README.md              | これ。長々と HALCinema_back についての説明が書かれている。                                                |
| sql.php                | sql が沢山書かれているファイル。定数のクラス。                                                            |
