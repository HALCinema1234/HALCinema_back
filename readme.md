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

**Env.php で環境変数を設定しています。**
**適宜、.env.local.defalt をコピーし、.env.local を作成・編集してください。**

## 設計

| ステータス | URL               | 概要                                   |
| ---------- | ----------------- | -------------------------------------- |
| GET        | movies            | すべての映画情報を取得                 |
| GET        | movies/{映画 ID}  | 指定された映画 ID の映画情報を取得     |
| GET        | ticket            | すべての券種情報を取得                 |
| GET        | manages           | すべての上映管理情報を取得             |
| GET        | manages/{映画 ID} | 指定された映画 ID の上映管理情報を取得 |

## 構成

| フォルダ/ファイル      | 概要                                                                                                    |
| ---------------------- | ------------------------------------------------------------------------------------------------------- |
| controllers/\*.php     | コントローラー用のフォルダ。検索や更新など、DB 操作をしている。                                         |
| database/halcinema.sql | データベース用のフォルダ。現在使用しているデータベースの DDL を格納している。                           |
| images/\*.jpg          | 画像用のフォルダ。映画のメインビジュアルやスクリーンショットを格納している。                            |
| vendor/\*.\*           | **(現在未使用)** (vlucas/phpdotenv)                                                                     |
| .env.local.default     | **(現在未使用)** 環境変数ファイル。DB の接続情報などの定数を管理する。                                  |
| .gitignore             | (git) git で管理したくないファイルを記述しておくファイル。                                              |
| .htaccess              | サーバーの制御ファイル。フォルダにアクセスした時、index.php へ転送している。                            |
| composer.json          | (composer)                                                                                              |
| composer.lock          | (composer)                                                                                              |
| Db.php                 | DB 接続クラス。                                                                                         |
| Env.default.php        | 環境変数ファイル。DB の接続情報などの定数を管理する。                                                   |
| Env.php                | 環境変数のクラスファイル。DB の接続情報などの定数を管理する。**個人の環境に合わせて編集すること。**     |
| index.php              | 最初に呼ばれるページ。URI から controllers フォルダ内のクラスを呼び出し、処理結果を json で返している。 |
| README.md              | これ。長々と HALCinema_back についての説明が書かれている。                                              |
| sql.php                | sql が沢山書かれているファイル。定数のクラス。                                                          |
