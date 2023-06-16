# HALCinema_back

## 概要

映画館「HALシネマ」予約販売管理システムで使用する、DBとHALcinema_frontをつなぐAPIです。

## 要件
| 使用               | バージョン |
|-------------------|---------|
| php               | 8.0.12  |
| composer          | 2.4.1   |
| vlucas/phpdotenv  | 5.5     |
| mysql             | 15.1    |

.env.localで環境変数を設定しています。  
 - 適宜、.env.local.defaltをコピーし、.env.localを作成・編集してください。
 - .envファイルを運用するためにphpdotenvが必要です。composerをインストール後、phpdotenvを取得してください。

## 設計

| ステータス | URL                 | 概要                                |
|-----------|---------------------|-------------------------------------|
| GET       | movies              | すべての映画情報を取得                |
| GET       | movies/{映画ID}     | 指定された映画IDの映画情報を取得       |
| GET       | ticket              | すべての券種情報を取得                |
| GET       | manages             | すべての上映管理情報を取得            |
| GET       | manages/{映画ID}    | 指定された映画IDの上映管理情報を取得   |
## 構成
| フォルダ/ファイル       | 概要 |
|-----------------------|------------------------------------------------------|
| controllers           | コントローラー用のフォルダ。検索や更新など、DB操作をしている。|
| database              | データベース用のフォルダ。現在使用しているデータベースのDDLを格納している。 |
| images                | 画像用のフォルダ。映画のメインビジュアルやスクリーンショットを格納している。 |
| vendor                | (vlucas/phpdotenv) |
| .env.local            | 環境変数ファイル。DBの接続情報などの定数を管理する。 |
| .env.local.default    | 環境変数ファイル。DBの接続情報などの定数を管理する。 |
| .gitignore            | (git) gitで管理したくないファイルを記述しておくファイル。 |
| .htaccess             | サーバーの制御ファイル。フォルダにアクセスした時、index.phpへ転送している。 |
| composer.json         | (composer) |
| composer.lock         | (composer) |
| Db.php                | DB接続クラス。 |
| index.php             | 最初に呼ばれるページ。URIからcontrollersフォルダ内のクラスを呼び出し、処理結果をjsonで返している。 |
| README.md             | これ。長々とHALCinema_backについての説明が書かれている。 |
| sql.php               | sqlが沢山書かれているファイル。定数のクラス。 |
