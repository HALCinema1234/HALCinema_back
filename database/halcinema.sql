-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-13 18:11:53
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `halcinema`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_handling_movie_types`
--

CREATE TABLE `t_handling_movie_types` (
  `f_movie_id` int(11) NOT NULL,
  `f_movie_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_handling_movie_types`
--

INSERT INTO `t_handling_movie_types` (`f_movie_id`, `f_movie_type_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(7, 1),
(7, 2),
(7, 3),
(7, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movies`
--

CREATE TABLE `t_movies` (
  `f_movie_id` int(11) NOT NULL,
  `f_movie_name` varchar(50) NOT NULL,
  `f_movie_start_day` date NOT NULL,
  `f_movie_end_day` date NOT NULL,
  `f_movie_age_restrictions` varchar(6) NOT NULL,
  `f_movie_data` varchar(255) NOT NULL,
  `f_movie_introduction` varchar(255) NOT NULL,
  `f_movie_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movies`
--

INSERT INTO `t_movies` (`f_movie_id`, `f_movie_name`, `f_movie_start_day`, `f_movie_end_day`, `f_movie_age_restrictions`, `f_movie_data`, `f_movie_introduction`, `f_movie_time`) VALUES
(1, 'MONDAYS／このタイムループ、上司に気づかせないと終わらない', '2023-06-02', '2023-06-06', 'G', '監督： 竹林亮\n	出演： 円井わん／マキタスポーツ／長村航希／三河悠冴／八木光太郎／髙野春樹／島田桃依／池田良／しゅはまはるみ ほか\n	公式サイト：https://mondays-cinema.com', '小さな広告代理店で働く吉川朱海は、大手広告代理店への転職という野心を持って仕事に取り組んでいた。しかし、次から次に降ってくる仕事で余裕はゼロ。ある日、後輩2人組から「僕たち、同じ一週間を繰り返しています」と告げられる。だが、その脱出の鍵を握る永久部長はまったくタイムループに気づいてくれないのだった。果たして彼らは、無事脱出できるのかー。', 82),
(2, 'ウーマン・トーキング 私たちの選択', '2023-06-02', '2023-06-21', 'G', '監督： サラ・ポーリー\n出演： ルーニー・マーラ／クレア・フォイ／ジェシー・バックリー／ジュディス・アイヴィ／ベン・ウィショー／フランシス・マクドーマンド ほか\n公式サイト：https://womentalking-movie.jp/', '2010年、自給自足で生活するキリスト教一派の村で起きた連続レイプ事件。これまで女性たちはそれを「悪魔の仕業」「作り話」である、と男性たちによって否定されていたが、ある日それが実際に犯罪だったことが明らかになる。タイムリミットは男性たちが街へと出かけている 2日間。緊迫感のなか、尊厳を奪われた彼女たちは自らの未来を懸けた話し合いを行う。', 105),
(3, '憧れを超えた侍たち　世界一への記録', '2023-06-02', '2023-06-22', 'G', '監督： 三木慎太郎\n出演： 侍ジャパントップチーム／窪田等(ナレーション) ほか\n公式サイト：https://www.japan-baseball.jp/jp/movie/2023/', '2021年12月、野球日本代表「侍ジャパン」トップチームの監督に就任した栗山英樹監督。誰よりも野球を愛し、選手を愛する指揮官が2023年3月開催の「2023 WORLD BASEBALL CLASSIC?」へ向け、熱き魂の全てを捧げる日々がはじまった。目標は「世界一」。14年ぶりの「WBC世界一」へ、史上最強と言われる侍ジャパンが誕生。代表選手30人の選考会議から大会直前に行われた宮崎合宿、本大会ベンチやロッカーでの様子、選手の苦悩や葛藤、あの歓喜の瞬間まで完全密着したチーム専属カメラだからこそ撮影できた', 130),
(4, '怪物', '2023-06-02', '2023-06-23', 'G', '監督： 是枝裕和\n出演： 安藤サクラ／永山瑛太／黒川想矢／柊木陽太／高畑充希／角田晃広／中村獅童／田中裕子 ほか\n公式サイト：https://gaga.ne.jp/kaibutsu-movie/', '大きな湖のある郊外の町。息子を愛するシングルマザー、生徒思いの学校教師、そして無邪気な子供たち。それは、よくある子供同士のケンカに見えた。しかし、彼らの食い違う主張は次第に社会やメディアを巻き込み、大事になっていく。そしてある嵐の朝、子供たちは忽然と姿を消した。', 125),
(5, 'クリード 過去の逆襲', '2023-05-26', '2023-06-24', 'G', '監督： マイケル・B・ジョーダン\n出演： マイケル・B・ジョーダン／テッサ・トンプソン／ジョナサン・メジャース／ウッド・ハリス／フロリアン・ムンテアヌ／ミラ・ケント／フィリシア・ラシャド ほか\n公式サイト：https://wwws.warnerbros.co.jp/creed/', 'ロッキーの魂を引き継いだチャンプ、クリードの前にムショ上がりの幼馴染デイミアンが現れる。実は、クリードには家族同然の仲間を宿敵に変える誰にも言えない過ちがあったのだ。復讐を誓う最強の敵から、未来を勝ち取ることが出来るのかー。', 122),
(6, '岸辺露伴 ルーヴルへ行く', '2023-05-26', '2023-06-25', 'G', '監督： 渡辺一貴\n出演： 高橋一生／飯豊まりえ／長尾謙杜／安藤政信／美波／木村文乃 ほか\n公式サイト：https://kishiberohan-movie.asmik-ace.co.jp/', '特殊能力を持つ、漫画家・岸辺露伴は、青年時代に淡い思いを抱いた女性からこの世で「最も黒い絵」の噂を聞く。それは最も黒く、そしてこの世で最も邪悪な絵だった。時は経ち、新作執筆の過程で、その絵がルーヴル美術館に所蔵されていることを知った露伴は取材とかつての微かな慕情のためにフランスを訪れる。しかし、不思議なことに美術館職員すら「黒い絵」の存在を知らず、データベースでヒットした保管場所は、今はもう使われていないはずの地下倉庫「Z-13倉庫」だった。そこで露伴は「黒い絵」が引き起こす恐ろしい出来事に対峙することと', 118),
(7, 'リトル・マーメイド', '2023-06-09', '2023-07-25', 'G', '監督： ロブ・マーシャル\n出演： 【声の出演】ハリー・ベイリー／ジョナ・ハウアー＝キング／メリッサ・マッカーシー／ハビエル・バルデム／ジェイコブ・トレンブレイ／オークワフィナ／ダヴィード・ディグス ほか 【日本語吹き替え】豊原江理佳／木村昴／海宝直人／野地祐翔／浦嶋りんこ／高乃麗／大塚明夫／王林／ますみ(天才ピアニスト) ほか\n公式サイト：https://www.disney.co.jp/movie/littlemermaid', '1991年に公開された名作アニメーションの実写映画化。海の王国に暮らすマーメイドの王女(アリエル)が主人公のミュージカル・ファンタジー。', 135);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movie_images`
--

CREATE TABLE `t_movie_images` (
  `f_movie_image_id` int(11) NOT NULL,
  `f_movie_id` int(11) NOT NULL,
  `f_movie_image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movie_images`
--

INSERT INTO `t_movie_images` (`f_movie_image_id`, `f_movie_id`, `f_movie_image_url`) VALUES
(1, 1, 'images/monday.jpg'),
(2, 2, 'images/woman_talking.jpg'),
(3, 3, 'images/WBC.jpg'),
(4, 4, 'images/monster.jpg'),
(5, 5, 'images/creed_3.jpg'),
(6, 6, 'images/rohan_an_louvre.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movie_manages`
--

CREATE TABLE `t_movie_manages` (
  `f_movie_manage_id` int(11) NOT NULL,
  `f_movie_id` int(11) NOT NULL,
  `f_movie_manage_day` date NOT NULL,
  `f_movie_manage_start_time` time NOT NULL,
  `f_theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movie_manages`
--

INSERT INTO `t_movie_manages` (`f_movie_manage_id`, `f_movie_id`, `f_movie_manage_day`, `f_movie_manage_start_time`, `f_theater_id`) VALUES
(1, 1, '2023-06-09', '09:00:00', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movie_types`
--

CREATE TABLE `t_movie_types` (
  `f_movie_type_id` int(11) NOT NULL,
  `f_movie_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movie_types`
--

INSERT INTO `t_movie_types` (`f_movie_type_id`, `f_movie_type_name`) VALUES
(1, '2D'),
(2, 'IMAX'),
(3, '4DX'),
(4, 'Dolby ATMOS');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_theaters`
--

CREATE TABLE `t_theaters` (
  `f_theater_id` int(11) NOT NULL,
  `f_theater_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_theaters`
--

INSERT INTO `t_theaters` (`f_theater_id`, `f_theater_type`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 3),
(7, 3),
(8, 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_tickets`
--

CREATE TABLE `t_tickets` (
  `f_ticket_id` int(11) NOT NULL,
  `f_ticket_name` varchar(31) NOT NULL,
  `f_ticket_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_tickets`
--

INSERT INTO `t_tickets` (`f_ticket_id`, `f_ticket_name`, `f_ticket_price`) VALUES
(1, '一般', 1800),
(2, '大学生等', 1600),
(3, '中学・高校', 1400),
(4, '小学生・幼児', 1000);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_handling_movie_types`
--
ALTER TABLE `t_handling_movie_types`
  ADD PRIMARY KEY (`f_movie_id`,`f_movie_type_id`),
  ADD KEY `f_movie_id` (`f_movie_id`),
  ADD KEY `f_movie_type_id` (`f_movie_type_id`);

--
-- テーブルのインデックス `t_movies`
--
ALTER TABLE `t_movies`
  ADD PRIMARY KEY (`f_movie_id`);

--
-- テーブルのインデックス `t_movie_images`
--
ALTER TABLE `t_movie_images`
  ADD PRIMARY KEY (`f_movie_image_id`),
  ADD KEY `f_movie_id` (`f_movie_id`);

--
-- テーブルのインデックス `t_movie_manages`
--
ALTER TABLE `t_movie_manages`
  ADD PRIMARY KEY (`f_movie_manage_id`),
  ADD KEY `f_movie_id` (`f_movie_id`),
  ADD KEY `f_theater_id` (`f_theater_id`);

--
-- テーブルのインデックス `t_movie_types`
--
ALTER TABLE `t_movie_types`
  ADD PRIMARY KEY (`f_movie_type_id`);

--
-- テーブルのインデックス `t_theaters`
--
ALTER TABLE `t_theaters`
  ADD PRIMARY KEY (`f_theater_id`);

--
-- テーブルのインデックス `t_tickets`
--
ALTER TABLE `t_tickets`
  ADD PRIMARY KEY (`f_ticket_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_movies`
--
ALTER TABLE `t_movies`
  MODIFY `f_movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `t_movie_images`
--
ALTER TABLE `t_movie_images`
  MODIFY `f_movie_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `t_movie_manages`
--
ALTER TABLE `t_movie_manages`
  MODIFY `f_movie_manage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `t_movie_types`
--
ALTER TABLE `t_movie_types`
  MODIFY `f_movie_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `t_theaters`
--
ALTER TABLE `t_theaters`
  MODIFY `f_theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `t_tickets`
--
ALTER TABLE `t_tickets`
  MODIFY `f_ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `t_handling_movie_types`
--
ALTER TABLE `t_handling_movie_types`
  ADD CONSTRAINT `t_handling_movie_types_ibfk_1` FOREIGN KEY (`f_movie_id`) REFERENCES `t_movies` (`f_movie_id`),
  ADD CONSTRAINT `t_handling_movie_types_ibfk_2` FOREIGN KEY (`f_movie_type_id`) REFERENCES `t_movie_types` (`f_movie_type_id`);

--
-- テーブルの制約 `t_movie_images`
--
ALTER TABLE `t_movie_images`
  ADD CONSTRAINT `t_movie_images_ibfk_1` FOREIGN KEY (`f_movie_id`) REFERENCES `t_movies` (`f_movie_id`);

--
-- テーブルの制約 `t_movie_manages`
--
ALTER TABLE `t_movie_manages`
  ADD CONSTRAINT `t_movie_manages_ibfk_1` FOREIGN KEY (`f_movie_id`) REFERENCES `t_movies` (`f_movie_id`),
  ADD CONSTRAINT `t_movie_manages_ibfk_2` FOREIGN KEY (`f_theater_id`) REFERENCES `t_theaters` (`f_theater_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
