-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-29 10:02:29
-- サーバのバージョン : 10.4.21-MariaDB
-- PHP のバージョン: 7.4.24

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
-- テーブルの構造 `t_handling_manages_types`
--

CREATE TABLE `t_handling_manages_types` (
  `f_movie_manage_id` int(11) NOT NULL,
  `f_movie_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- テーブルのデータのダンプ `t_handling_manages_types`
--

INSERT INTO `t_handling_manages_types` (`f_movie_manage_id`, `f_movie_type_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(22, 5),
(23, 1),
(23, 6),
(24, 1),
(24, 5),
(25, 1),
(25, 5),
(26, 1),
(26, 6),
(27, 1),
(27, 5),
(28, 1),
(28, 5),
(29, 1),
(29, 6),
(30, 1),
(30, 5),
(31, 1),
(31, 6),
(32, 1),
(32, 5),
(33, 1),
(33, 6),
(34, 1),
(34, 5),
(35, 1),
(35, 6),
(36, 1),
(36, 5),
(37, 1),
(37, 6),
(38, 1),
(38, 5),
(39, 1),
(39, 6),
(40, 1),
(40, 5),
(41, 1),
(41, 6),
(42, 1),
(42, 5),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(85, 5),
(86, 2),
(86, 5),
(87, 1),
(87, 5),
(88, 3),
(88, 5),
(89, 1),
(89, 5),
(90, 2),
(90, 5),
(91, 1),
(91, 5),
(92, 3),
(92, 5),
(93, 1),
(93, 5),
(94, 2),
(94, 5),
(95, 3),
(95, 5),
(96, 1),
(96, 5),
(97, 2),
(97, 5),
(98, 1),
(98, 5),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(113, 6),
(114, 2),
(114, 6),
(115, 3),
(115, 6),
(116, 4),
(116, 5),
(117, 1),
(117, 6),
(118, 2),
(118, 6),
(119, 3),
(119, 6),
(120, 4),
(120, 5),
(121, 1),
(121, 6),
(122, 2),
(122, 6),
(123, 3),
(123, 6),
(124, 4),
(124, 5),
(125, 1),
(125, 6),
(126, 2),
(126, 6),
(127, 3),
(127, 6),
(128, 4),
(128, 5),
(129, 1),
(129, 6),
(130, 2),
(130, 6),
(131, 3),
(131, 6),
(132, 4),
(132, 5),
(133, 1),
(133, 6),
(134, 2),
(134, 6),
(135, 3),
(135, 6),
(136, 4),
(136, 5),
(137, 1),
(137, 6),
(138, 2),
(138, 6),
(139, 3),
(139, 6),
(140, 4),
(140, 5),
(141, 1),
(141, 6),
(142, 2),
(142, 5),
(143, 1),
(143, 6),
(144, 4),
(144, 5),
(145, 1),
(145, 6),
(146, 2),
(146, 5),
(147, 1),
(147, 6),
(148, 4),
(148, 5),
(149, 1),
(149, 6),
(150, 2),
(150, 5),
(151, 1),
(151, 6),
(152, 4),
(152, 5),
(153, 1),
(153, 6),
(154, 2),
(154, 5),
(155, 1),
(155, 5),
(156, 2),
(156, 5),
(157, 1),
(157, 5),
(158, 2),
(158, 5),
(159, 1),
(159, 5),
(160, 2),
(160, 5),
(161, 1),
(161, 5),
(162, 1),
(162, 5),
(163, 2),
(163, 5),
(164, 1),
(164, 5),
(165, 2),
(165, 5),
(166, 1),
(166, 5),
(167, 2),
(167, 5),
(168, 1),
(168, 5),
(169, 1),
(169, 5),
(170, 2),
(170, 6),
(171, 1),
(171, 5),
(172, 3),
(172, 6),
(173, 1),
(173, 5),
(174, 2),
(174, 6),
(175, 1),
(175, 5),
(176, 1),
(176, 5),
(177, 2),
(177, 5),
(178, 1),
(178, 5),
(179, 2),
(179, 5),
(180, 1),
(180, 5),
(181, 2),
(181, 5),
(182, 1),
(182, 5),
(183, 1),
(183, 5),
(184, 2),
(184, 5),
(185, 3),
(185, 5),
(186, 1),
(186, 5),
(187, 2),
(187, 5),
(188, 3),
(188, 5),
(189, 1),
(189, 5),
(190, 1),
(191, 2),
(192, 4),
(193, 1),
(194, 2),
(195, 4),
(196, 1),
(197, 1),
(197, 5),
(198, 2),
(198, 5),
(199, 1),
(199, 5),
(200, 2),
(200, 5),
(201, 1),
(201, 5),
(202, 2),
(202, 5),
(203, 1),
(203, 5),
(204, 1),
(205, 2),
(206, 1),
(207, 2),
(208, 1),
(209, 2),
(210, 1),
(211, 1),
(212, 2),
(213, 1),
(214, 2),
(215, 1),
(216, 2),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 4),
(227, 1),
(228, 4),
(229, 1),
(230, 4),
(231, 1),
(232, 1),
(232, 5),
(233, 3),
(233, 5),
(234, 1),
(234, 5),
(235, 3),
(235, 5),
(236, 1),
(236, 5),
(237, 3),
(237, 5),
(238, 1),
(238, 5),
(239, 1),
(239, 5),
(240, 3),
(240, 5),
(241, 1),
(241, 5),
(242, 3),
(242, 5),
(243, 1),
(243, 5),
(244, 3),
(244, 5),
(245, 1),
(245, 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_handling_movies_types`
--

CREATE TABLE `t_handling_movies_types` (
  `f_movie_id` int(11) NOT NULL,
  `f_movie_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_handling_movies_types`
--

INSERT INTO `t_handling_movies_types` (`f_movie_id`, `f_movie_type_id`) VALUES
(1, 1),
(2, 1),
(2, 5),
(2, 6),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(5, 5),
(6, 1),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(8, 1),
(8, 2),
(8, 4),
(8, 5),
(8, 6),
(9, 1),
(9, 2),
(9, 5),
(10, 1),
(10, 2),
(10, 5),
(11, 1),
(11, 2),
(11, 3),
(11, 5),
(11, 6),
(12, 1),
(12, 2),
(12, 5),
(13, 1),
(13, 2),
(13, 3),
(13, 5),
(14, 1),
(14, 2),
(14, 4),
(15, 1),
(15, 2),
(15, 5),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(19, 4),
(20, 1),
(20, 3),
(20, 5),
(21, 1),
(21, 3),
(21, 5);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_jobs`
--

CREATE TABLE `t_jobs` (
  `f_job_id` int(11) NOT NULL,
  `f_job_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_jobs`
--

INSERT INTO `t_jobs` (`f_job_id`, `f_job_name`) VALUES
(1, '営業'),
(2, 'サービス業'),
(3, '製造業'),
(4, 'エンジニア'),
(5, '研究職'),
(6, '事務職'),
(7, 'デザイナー'),
(8, '医療'),
(9, '福祉'),
(10, '教育');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_members`
--

CREATE TABLE `t_members` (
  `f_member_id` int(11) NOT NULL,
  `f_member_name` varchar(255) NOT NULL,
  `f_member_name_kana` varchar(255) NOT NULL,
  `f_member_password` varchar(255) NOT NULL,
  `f_member_birthday` date NOT NULL,
  `f_member_gender` smallint(6) NOT NULL,
  `f_member_phone_number` varchar(11) NOT NULL,
  `f_member_mail_address` varchar(255) NOT NULL,
  `f_job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_members`
--

INSERT INTO `t_members` (`f_member_id`, `f_member_name`, `f_member_name_kana`, `f_member_password`, `f_member_birthday`, `f_member_gender`, `f_member_phone_number`, `f_member_mail_address`, `f_job_id`) VALUES
(1, '内田竜一', 'うちだりゅういち', 'qRmFlhY26oFa', '1998-08-30', 1, '05731064710', 'ateramoto@gmail.com', 1),
(2, '武内綾乃', 'たけうちあやの', 'GoSUo5WYkpKB', '2000-04-21', 2, '08679794990', 'kohaku788@@gmail.com', 2),
(3, 'test', 'てすと', 'password', '1973-05-23', 1, '00000000000', 'test@gmail.com', 3);

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
(1, 'MONDAYS/このタイムループ、上司に気づかせないと終わらない', '2023-08-11', '2023-10-11', 'G', '監督 : 竹林亮\n	出演: 円井わん/マキタスポーツ/長村航希/三河悠冴/八木光太郎/髙野春樹/島田桃依/池田良/しゅはまはるみ ほか\n公式サイト : https://mondays-cinema.com', '小さな広告代理店で働く吉川朱海は、大手広告代理店への転職という野心を持って仕事に取り組んでいた。しかし、次から次に降ってくる仕事で余裕はゼロ。ある日、後輩2人組から「僕たち、同じ一週間を繰り返しています」と告げられる。だが、その脱出の鍵を握る永久部長はまったくタイムループに気づいてくれないのだった。果たして彼らは、無事脱出できるのかー。', 82),
(2, 'ウーマン・トーキング 私たちの選択', '2023-08-11', '2023-10-11', 'G', '監督 : サラ・ポーリー\n出演: ルーニー・マーラ/クレア・フォイ/ジェシー・バックリー/ジュディス・アイヴィ/ベン・ウィショー/フランシス・マクドーマンド ほか\n公式サイト : https://womentalking-movie.jp/', '2010年、自給自足で生活するキリスト教一派の村で起きた連続レイプ事件。これまで女性たちはそれを「悪魔の仕業」「作り話」である、と男性たちによって否定されていたが、ある日それが実際に犯罪だったことが明らかになる。タイムリミットは男性たちが街へと出かけている 2日間。緊迫感のなか、尊厳を奪われた彼女たちは自らの未来を懸けた話し合いを行う。', 105),
(3, '憧れを超えた侍たち 世界一への記録', '2023-08-11', '2023-10-11', 'G', '監督 : 三木慎太郎\n出演: 侍ジャパントップチーム/窪田等(ナレーション) ほか\n公式サイト : https://www.japan-baseball.jp/jp/movie/2023/', '2021年12月、野球日本代表「侍ジャパン」トップチームの監督に就任した栗山英樹監督。誰よりも野球を愛し、選手を愛する指揮官が2023年3月開催の「2023 WORLD BASEBALL CLASSIC ™ 」へ向け、熱き魂の全てを捧げる日々がはじまった。目標は「世界一」。14年ぶりの「WBC世界一」へ、史上最強と言われる侍ジャパンが誕生。', 130),
(4, '怪物', '2023-08-11', '2023-10-11', 'G', '監督 : 是枝裕和\n出演: 安藤サクラ/永山瑛太/黒川想矢/柊木陽太/高畑充希/角田晃広/中村獅童/田中裕子 ほか\n公式サイト : https://gaga.ne.jp/kaibutsu-movie/', '大きな湖のある郊外の町。息子を愛するシングルマザー、生徒思いの学校教師、そして無邪気な子供たち。それは、よくある子供同士のケンカに見えた。しかし、彼らの食い違う主張は次第に社会やメディアを巻き込み、大事になっていく。そしてある嵐の朝、子供たちは忽然と姿を消した。', 125),
(5, 'クリード 過去の逆襲', '2023-08-11', '2023-10-11', 'G', '監督 : マイケル・B・ジョーダン\n出演: マイケル・B・ジョーダン/テッサ・トンプソン/ジョナサン・メジャース/ウッド・ハリス/フロリアン・ムンテアヌ/ミラ・ケント/フィリシア・ラシャド ほか\n公式サイト : https://wwws.warnerbros.co.jp/creed/', 'ロッキーの魂を引き継いだチャンプ、クリードの前にムショ上がりの幼馴染デイミアンが現れる。実は、クリードには家族同然の仲間を宿敵に変える誰にも言えない過ちがあったのだ。復讐を誓う最強の敵から、未来を勝ち取ることが出来るのかー。', 122),
(6, '岸辺露伴 ルーヴルへ行く', '2023-08-11', '2023-10-11', 'G', '監督 : 渡辺一貴\n出演 :  高橋一生/飯豊まりえ/長尾謙杜/安藤政信/美波/木村文乃 ほか\n公式サイト : https://kishiberohan-movie.asmik-ace.co.jp/', '特殊能力を持つ、漫画家・岸辺露伴は、青年時代に淡い思いを抱いた女性からこの世で「最も黒い絵」の噂を聞く。それは最も黒く、そしてこの世で最も邪悪な絵だった。時は経ち、新作執筆の過程で、その絵がルーヴル美術館に所蔵されていることを知った露伴は取材とかつての微かな慕情のためにフランスを訪れる。しかし、不思議なことに美術館職員すら「黒い絵」の存在を知らず、データベースでヒットした保管場所は、今はもう使われていないはずの地下倉庫「Z-13倉庫」だった。', 118),
(7, 'リトル・マーメイド', '2023-08-11', '2023-10-11', 'G', '監督 : ロブ・マーシャル\n出演 :  【声の出演】ハリー・ベイリー/ジョナ・ハウアー＝キング/メリッサ・マッカーシー/ハビエル・バルデム/ジェイコブ・トレンブレイ/オークワフィナ/ダヴィード・ディグス ほか 【日本語吹き替え】豊原江理佳/木村昴/海宝直人/野地祐翔/浦嶋りんこ/高乃麗/大塚明夫/王林/ますみ(天才ピアニスト) ほか\n公式サイト : https://www.disney.co.jp/movie/littlemermaid', '1991年に公開された名作アニメーションの実写映画化。海の王国に暮らすマーメイドの王女(アリエル)が主人公のミュージカル・ファンタジー。', 135),
(8, 'RRR', '2023-07-02', '2023-09-28', 'G', '監督 : S.S.ラージャマウリ\r\n出演 : NTR JR./ラーム・チャラン/アーリヤー・バット/アジャイ・デーヴガン/レイ・スティーヴンソン/アリソン・ドゥーディ ほか\r\n公式サイト : https://rrr-movie.jp/', '舞台は1920年、英国植民地時代のインド英国軍にさらわれた幼い少女を救うため、立ち上がるビーム(NTR Jr.)。\r\n大義のため英国政府の警察となるラーマ(ラーム・チャラン)。\r\n熱い思いを胸に秘めた男たちが“運命”に導かれて出会い、唯一無二の親友となる。\r\nしかし、ある事件をきっかけに、それぞれの“宿命”に切り裂かれる2人はやがて究極の選択を迫られることに。\r\n彼らが選ぶのは、友情か？使命か？', 179),
(9, 'インターステラー', '2023-07-02', '2023-09-28', 'G', '監督 : クリストファー・ノーラン\r\n出演 : マシュー・マコノヒー/アン・ハサウェイ/ジェシカ・チャステイン/ビル・アーウィン/エレン・バースティン/マット・デイモン/マイケル・ケイン ほか\r\n公式サイト : https://warnerbros.co.jp/home_entertainment/detail.php?title_id=4366', '地球の寿命は尽きかけていた。\r\n居住可能な新たな惑星を探すという人類の限界を超えたミッションに選ばれたのは、まだ幼い子供を持つ元エンジニアの男。\r\n彼を待っていたのは、未だかつて誰も見たことがない、衝撃の宇宙。\r\nはたして彼は人類の存続をかけたミッションを成し遂げることが出来るのか？', 169),
(10, 'インセプション', '2023-07-02', '2023-09-28', 'G', '監督 : クリストファー・ノーラン\r\n出演 : レオナルド・ディカプリオ/渡辺謙/ジョセフ・ゴードン＝レヴィット/マリオン・コティヤール ほか\r\n公式サイト : http://wwws.warnerbros.co.jp/inception/', 'ドム・コブ(レオナルド・ディカプリオ)は、人が無防備になる状態―夢に入っている時に潜在意識の奥底まで潜り込み、他人のアイデアを盗み出すという、危険極まりない犯罪分野において最高の技術を持つスペシャリストである。コブが備えもつ類稀な才能はこの業界でトップレベルであり、企業スパイの世界において引っ張りだこの存在となっていた。だが、彼は最愛のものを失い、国際指名手配犯となってしまう。', 148),
(11, 'マッドマックス 怒りのデス・ロード', '2023-07-02', '2023-09-28', 'R15+', '監督 : ジョージ・ミラー\r\n出演 : トム・ハーディ/シャーリーズ・セロン/ニコラス・ホルト/ヒュー・キース・バーン/ロージー・ハンティントン＝ホワイトリー ほか\r\n公式サイト : http://wwws.warnerbros.co.jp/madmaxfuryroad/', '資源が枯渇し、法も秩序も崩壊した世界。愛する者を奪われ、生きる望みさえ失って、荒野をさまよう主人公「マックス」。彼はある日、砂漠を支配する凶悪な敵、ジョーの一団に捕らえ、瀕死の重傷を負う。そこに現れたジョーの配下の女リーダー・フュリオサ、謎の全身白塗りの男、そしてジョーと敵対するグループ。マックスは彼らと力を合わせ、強大なジョーの一味と立ち向かう決意をする―', 120),
(12, 'メメント', '2023-07-09', '2023-09-14', 'G', '監督 : クリストファー・ノーラン\r\n出演 : ガイ・ピアース/キャリー＝アン・モス/ジョー・パントリアーノ/ジョージャ・フォックス ほか\n', '前向性健忘(発症以前の記憶はあるものの、それ以降は数分前の出来事さえ忘れてしまう症状)という記憶障害に見舞われた男が、最愛の妻を殺した犯人を追う異色サスペンス。ロサンジェルスで保険の調査員をしていたレナード。ある日、何者かが家に侵入し、妻がレイプされたうえ殺害されてしまう。その光景を目撃してしまったレナードはショックで前向性健忘となってしまう。彼は記憶を消さないためポラロイドにメモを書き、体にタトゥーを刻みながら犯人の手掛かりを追っていく……。', 113),
(13, 'アメイジング・スパイダーマン', '2023-07-09', '2023-09-14', 'G', '監督 : マーク・ウェブ\r\n出演 : アンドリュー・ガーフィールド/エマ・ストーン/リス・エヴァンス/デニス・リアリー ほか\n', '高校生のピーター・パーカー(アンドリュー・ガーフィールド)は両親が失踪した8歳のときから伯父夫婦のもとで暮らしていた。ある日、ピーターは父リチャード(キャンベル・スコット)の共同研究者だったコナーズ博士(リス・エヴァンス)のもとを訪れ、研究室で特殊なクモにかまれてしまう。その直後、ピーターの体には異変が起き……。', 136),
(14, '劇場版 ヴァイオレット・エヴァーガーデン', '2023-07-09', '2023-09-14', 'G', '監督 : 石立太一\r\n声の出演 : 石川由依、浪川大輔 ほか\r\n公式サイト : http://violet-evergarden.jp/', '代筆業に従事する彼女の名は、「ヴァイオレット・エヴァーガーデン」。人々に深い、深い傷を負わせた戦争が終結して数年が経った。世界が少しずつ平穏を取り戻し、新しい技術の開発によって生活は変わり、人々が前を向いて進んでいこうとしているとき。ヴァイオレット・エヴァーガーデンは、大切な人への想いを抱えながら、その人がいない、この世界で生きていこうとしていた。そんなある日、一通の手紙が見つかる……。', 140),
(15, 'ジョン・ウィック :チャプター2', '2023-07-09', '2023-09-14', 'R15+', '監督 : チャド・スタエルスキ\r\n出演 : キアヌ・リーブス/リッカルド・スカマルチョ/ルビー・ローズ/ジョン・レグイザモ ほか\r\n公式サイト : http://johnwick.jp/', '伝説の殺し屋ジョン・ウィックによる壮絶な復讐劇から5日後―。彼のもとにイタリアン・マフィアのサンティーノが姉殺しの依頼にやってくる。しかし平穏な隠居生活を望むジョンは彼の依頼を一蹴、サンティーノの怒りを買い、想い出の詰まった家をバズーカで破壊されてしまう。愛犬と共に一命をとりとめたジョンはサンティーノへの復讐を開始するが、命の危険を感じたサンティーノに7億円の懸賞金を懸けられ、全世界の殺し屋に命を狙われることになる。', 122),
(16, '劇場版 メイドインアビス 深き魂の黎明', '2023-07-09', '2023-09-14', 'R15+', '監督 : 小島正幸\r\n声の出演 : 富田美憂/伊瀬茉莉也/井澤詩織/森川智之/水瀬いのり ほか\r\n公式サイト : http://miabyss.com/#1', '隅々まで探索されつくした世界に、唯一残された秘境の大穴『アビス』。どこまで続くとも知れない深く巨大なその縦穴には、奇妙奇怪な生物たちが生息し、今の人類では作りえない貴重な遺物が眠っている。 「アビス」の不可思議に満ちた姿は人々を魅了し、冒険へと駆り立てた。そうして幾度も大穴に挑戦する冒険者たちは、次第に『探窟家』と呼ばれるようになっていった。 アビスの縁に築かれた街『オース』に暮らす孤児のリコは、いつか母のような偉大な探窟家になり、アビスの謎を解き明かすことを夢見ていた。', 105),
(17, 'AKIRA アキラ', '2023-07-09', '2023-09-14', 'PG12', '監督 : 大友克洋\r\n声の出演 : 岩田光央/佐々木望/小山茉美/石田太郎/草尾毅/中村龍彦/伊藤福恵/神藤一弘 ほか\r\n', '2019年東京湾上に構築されたメガロポリス、ネオ東京は翌年にオリンピック開催を控え、かつての繁栄を取り戻しつつあった。健康優良不良少年のグループリーダー・金田は、荒廃したこの都市でバイクを駆り、暴走と抗争を繰り返していた。ある夜、仲間の鉄雄は暴走中、奇怪な実験体の少年と遭遇し、転倒負傷。呆然とする金田たちの前で、彼らは軍の研究所へと連れ去られてしまう。鉄雄救出のために研究所へ潜入を試みる金田。だが、彼はそこで、過度の人体実験により新たな「力」に覚醒した、狂気の鉄雄を見る。', 124),
(18, 'パプリカ', '2023-07-02', '2023-09-01', 'G', '監督 : 今敏\r\n出演 : 林原めぐみ/江守徹/堀勝之祐/古谷徹/大塚明夫/山寺宏一 ほか\r\n', '千葉敦子は、時田浩作の発明した夢を共有する装置DCミニを使用するサイコセラピスト。 ある日、そのDCミニが研究所から盗まれてしまい、それを悪用して他人の夢に強制介入し、悪夢を見せ精神を崩壊させる事件が発生するようになる。', 90),
(19, 'プロメア', '2023-07-02', '2023-09-01', 'G', '監督 : 今石洋之\r\n出演 : 松山ケンイチ/早乙女太一/堺雅人/佐倉綾音 ほか\r\n公式サイト : https://promare-movie.com/\r\n', '世界大炎上――\r\n全世界の半分が焼失したその未曽有の事態の引き金となったのは、突然変異で誕生した炎を操る人種<バーニッシュ>の出現だった。\r\nあれから30年―― 攻撃的な一部の面々が＜マッドバーニッシュ＞を名乗り、再び世界に襲いかかる。対バーニッシュ用の高機動救命消防隊＜バーニングレスキュー＞の燃える火消し魂を持つ新人隊員・ガロと＜マッドバーニッシュ＞のリーダー・リオ。熱き魂がぶつかりあう、二人の戦いの結末は――。', 111),
(20, 'マトリックス', '2023-07-02', '2023-09-01', 'G', '監督 : ラリー・ウォシャウスキー/アンディ・ウォシャウスキー\r\n出演 : キアヌ・リーブス/ローレンス・フィッシュバーン/キャリー＝アン・モス/ヒューゴ・ウィーヴィング ほか\r\n', '凄腕ハッカーのネオは、最近”起きてもまだ夢を見ているような感覚”に悩まされていた。 そんなある日、自宅のコンピュータ画面に、不思議なメッセージが届く…。 正体不明の美女トリニティーに導かれて、ネオはモーフィアスという男と出会う。 そこで見せられた世界の真実とは。やがて、人類の命運をかけた壮絶な戦いが始まる。', 136),
(21, 'ワイルド・スピード MEGA MAX', '2023-07-02', '2023-09-01', 'G', '監督 : ジャスティン・リン\r\n出演 : ヴィン・ディーゼル/ポール・ウォーカー/ジョーダナ・ブリュースター/ドウェイン・ジョンソン ほか\r\n', '指名手配犯のドミニク (ヴィン・ディーゼル)と、元FBI捜査官ブライアン (ポール・ウォーカー)。 “お尋ね者”として追われる身となった彼らは、厳重に張り巡らされた捜査網といくつもの国境を越え、共に南米の地に降り立った。 ブラジルの裏社会に身を隠しながら、持ち前のドライビング・テクニックを生かし、超高級車の強奪など命がけのヤマをこなしていく２人。しかし彼らは、逃亡生活から抜け出し永遠の自由を得るために、裏社会を牛耳る黒幕から１億ドルを奪うという、あまりにも無謀な最後の賭けに出る。', 130);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movie_images`
--

CREATE TABLE `t_movie_images` (
  `f_movie_image_id` int(11) NOT NULL,
  `f_movie_id` int(11) NOT NULL,
  `f_movie_image_url` varchar(255) NOT NULL,
  `f_movie_image_thumbnail` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movie_images`
--

INSERT INTO `t_movie_images` (`f_movie_image_id`, `f_movie_id`, `f_movie_image_url`, `f_movie_image_thumbnail`) VALUES
(1, 1, 'mondays/1.jpg', 0),
(2, 1, 'mondays/2.jpg', 0),
(3, 1, 'mondays/3.jpg', 0),
(4, 1, 'mondays/4.jpg', 0),
(5, 1, 'mondays/5.jpg', 0),
(6, 2, 'woman_talking/1.jpg', 0),
(7, 2, 'woman_talking/2.jpg', 0),
(8, 2, 'woman_talking/3.jpg', 0),
(9, 2, 'woman_talking/4.jpg', 0),
(10, 2, 'woman_talking/5.jpg', 0),
(11, 3, 'samurai/1.jpg', 0),
(12, 4, 'kaibutsu/1.jpg', 0),
(13, 4, 'kaibutsu/2.jpg', 0),
(14, 4, 'kaibutsu/3.jpg', 0),
(15, 5, 'creed/1.jpg', 0),
(16, 5, 'creed/2.jpg', 0),
(17, 5, 'creed/3.jpg', 0),
(18, 6, 'rohan_lourve/1.jpg', 0),
(19, 6, 'rohan_lourve/2.jpg', 0),
(20, 6, 'rohan_lourve/3.jpg', 0),
(21, 6, 'rohan_lourve/4.jpg', 0),
(22, 6, 'rohan_lourve/5.jpg', 0),
(23, 7, 'little_mermaid/1.jpg', 0),
(24, 7, 'little_mermaid/2.jpg', 0),
(25, 7, 'little_mermaid/3.jpg', 0),
(26, 7, 'little_mermaid/4.jpg', 0),
(27, 8, 'rrr/1.jpg', 0),
(28, 8, 'rrr/2.jpg', 0),
(29, 8, 'rrr/3.jpg', 0),
(30, 8, 'rrr/4.jpg', 0),
(31, 8, 'rrr/5.jpg', 0),
(32, 9, 'interstellar/1.jpg', 0),
(33, 9, 'interstellar/2.jpg', 0),
(34, 9, 'interstellar/3.jpg', 0),
(35, 9, 'interstellar/4.jpg', 0),
(36, 9, 'interstellar/5.jpg', 0),
(37, 10, 'inception/1.jpg', 0),
(38, 10, 'inception/2.jpg', 0),
(39, 10, 'inception/3.jpg', 0),
(40, 10, 'inception/4.jpg', 0),
(41, 10, 'inception/5.jpg', 0),
(42, 11, 'madmax/1.jpg', 0),
(43, 11, 'madmax/2.jpg', 0),
(44, 11, 'madmax/3.jpg', 0),
(45, 11, 'madmax/4.jpg', 0),
(46, 11, 'madmax/5.jpg', 0),
(47, 12, 'memento/1.jpg', 0),
(48, 12, 'memento/2.jpg', 0),
(49, 12, 'memento/3.jpg', 0),
(50, 13, 'spider_man/1.jpg', 0),
(51, 13, 'spider_man/2.jpg', 0),
(52, 13, 'spider_man/3.jpg', 0),
(53, 13, 'spider_man/4.jpg', 0),
(54, 13, 'spider_man/5.jpg', 0),
(55, 14, 'violet_evergarden/1.jpg', 0),
(56, 14, 'violet_evergarden/2.jpg', 0),
(57, 14, 'violet_evergarden/3.jpg', 0),
(58, 14, 'violet_evergarden/4.jpg', 0),
(59, 14, 'violet_evergarden/5.jpg', 0),
(60, 15, 'john_wick/1.jpg', 0),
(61, 15, 'john_wick/2.jpg', 0),
(62, 15, 'john_wick/3.jpg', 0),
(63, 15, 'john_wick/4.jpg', 0),
(64, 15, 'john_wick/5.jpg', 0),
(65, 16, 'made_in_abyss/1.jpg', 0),
(66, 16, 'made_in_abyss/2.jpg', 0),
(67, 16, 'made_in_abyss/3.jpg', 0),
(68, 17, 'akira/1.jpg', 0),
(69, 17, 'akira/2.jpg', 0),
(70, 17, 'akira/3.jpg', 0),
(71, 17, 'akira/4.jpg', 0),
(72, 17, 'akira/5.jpg', 0),
(73, 18, 'paprika/1.jpg', 0),
(74, 18, 'paprika/2.jpg', 0),
(75, 18, 'paprika/3.jpg', 0),
(76, 18, 'paprika/4.jpg', 0),
(77, 19, 'promare/1.jpg', 0),
(78, 19, 'promare/2.jpg', 0),
(79, 19, 'promare/3.jpg', 0),
(80, 19, 'promare/4.jpg', 0),
(81, 19, 'promare/5.jpg', 0),
(82, 20, 'matrix/1.jpg', 0),
(83, 20, 'matrix/2.jpg', 0),
(84, 20, 'matrix/3.jpg', 0),
(85, 20, 'matrix/4.jpg', 0),
(86, 20, 'matrix/5.jpg', 0),
(87, 21, 'wild_speed/1.jpg', 0),
(88, 21, 'wild_speed/2.jpg', 0),
(89, 21, 'wild_speed/3.jpg', 0),
(90, 21, 'wild_speed/4.jpg', 0),
(91, 21, 'wild_speed/5.jpg', 0),
(92, 1, 'mondays/0.jpg', 1),
(93, 2, 'woman_talking/0.jpg', 1),
(94, 3, 'samurai/0.jpg', 1),
(95, 4, 'kaibutsu/0.jpg', 1),
(96, 5, 'creed/0.jpg', 1),
(97, 6, 'rohan_lourve/0.jpg', 1),
(98, 7, 'little_mermaid/0.jpg', 1),
(99, 8, 'rrr/0.jpg', 1),
(100, 9, 'interstellar/0.jpg', 1),
(101, 10, 'inception/0.jpg', 1),
(102, 11, 'madmax/0.jpg', 1),
(103, 12, 'memento/0.jpg', 1),
(104, 13, 'spider_man/0.jpg', 1),
(105, 14, 'violet_evergarden/0.jpg', 1),
(106, 15, 'john_wick/0.jpg', 1),
(107, 16, 'made_in_abyss/0.jpg', 1),
(108, 17, 'akira/0.jpg', 1),
(109, 18, 'paprika/0.jpg', 1),
(110, 19, 'promare/0.jpg', 1),
(111, 20, 'matrix/0.jpg', 1),
(112, 21, 'wild_speed/0.jpg', 1);

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
(1, 1, '2023-09-04', '08:00:00', 1),
(2, 1, '2023-09-04', '16:00:00', 1),
(3, 1, '2023-09-04', '20:00:00', 1),
(4, 1, '2023-09-05', '08:00:00', 1),
(5, 1, '2023-09-05', '16:00:00', 1),
(6, 1, '2023-09-05', '20:00:00', 1),
(7, 1, '2023-09-06', '08:00:00', 1),
(8, 1, '2023-09-06', '16:00:00', 1),
(9, 1, '2023-09-06', '20:00:00', 1),
(10, 1, '2023-09-07', '08:00:00', 1),
(11, 1, '2023-09-07', '16:00:00', 1),
(12, 1, '2023-09-07', '20:00:00', 1),
(13, 1, '2023-09-08', '08:00:00', 1),
(14, 1, '2023-09-08', '16:00:00', 1),
(15, 1, '2023-09-08', '20:00:00', 1),
(16, 1, '2023-09-09', '08:00:00', 1),
(17, 1, '2023-09-09', '16:00:00', 1),
(18, 1, '2023-09-09', '20:00:00', 1),
(19, 1, '2023-09-10', '08:00:00', 1),
(20, 1, '2023-09-10', '16:00:00', 1),
(21, 1, '2023-09-10', '20:00:00', 1),
(22, 2, '2023-09-04', '08:00:00', 2),
(23, 2, '2023-09-04', '16:00:00', 2),
(24, 2, '2023-09-04', '20:00:00', 2),
(25, 2, '2023-09-05', '08:00:00', 2),
(26, 2, '2023-09-05', '16:00:00', 2),
(27, 2, '2023-09-05', '20:00:00', 2),
(28, 2, '2023-09-06', '08:00:00', 2),
(29, 2, '2023-09-06', '16:00:00', 2),
(30, 2, '2023-09-06', '20:00:00', 2),
(31, 2, '2023-09-07', '08:00:00', 2),
(32, 2, '2023-09-07', '16:00:00', 2),
(33, 2, '2023-09-07', '20:00:00', 2),
(34, 2, '2023-09-08', '08:00:00', 2),
(35, 2, '2023-09-08', '16:00:00', 2),
(36, 2, '2023-09-08', '20:00:00', 2),
(37, 2, '2023-09-09', '08:00:00', 2),
(38, 2, '2023-09-09', '16:00:00', 2),
(39, 2, '2023-09-09', '20:00:00', 2),
(40, 2, '2023-09-10', '08:00:00', 2),
(41, 2, '2023-09-10', '16:00:00', 2),
(42, 2, '2023-09-10', '20:00:00', 2),
(43, 3, '2023-09-04', '12:00:00', 3),
(44, 3, '2023-09-04', '20:00:00', 3),
(45, 3, '2023-09-05', '12:00:00', 3),
(46, 3, '2023-09-05', '20:00:00', 3),
(47, 3, '2023-09-06', '12:00:00', 3),
(48, 3, '2023-09-06', '20:00:00', 3),
(49, 3, '2023-09-07', '12:00:00', 3),
(50, 3, '2023-09-07', '20:00:00', 3),
(51, 3, '2023-09-08', '12:00:00', 3),
(52, 3, '2023-09-08', '20:00:00', 3),
(53, 3, '2023-09-09', '12:00:00', 3),
(54, 3, '2023-09-09', '20:00:00', 3),
(55, 3, '2023-09-10', '12:00:00', 3),
(56, 3, '2023-09-10', '20:00:00', 3),
(57, 4, '2023-09-04', '08:00:00', 4),
(58, 4, '2023-09-04', '12:00:00', 4),
(59, 4, '2023-09-04', '16:00:00', 4),
(60, 4, '2023-09-04', '20:00:00', 4),
(61, 4, '2023-09-05', '08:00:00', 4),
(62, 4, '2023-09-05', '12:00:00', 4),
(63, 4, '2023-09-05', '16:00:00', 4),
(64, 4, '2023-09-05', '20:00:00', 4),
(65, 4, '2023-09-06', '08:00:00', 4),
(66, 4, '2023-09-06', '12:00:00', 4),
(67, 4, '2023-09-06', '16:00:00', 4),
(68, 4, '2023-09-06', '20:00:00', 4),
(69, 4, '2023-09-07', '08:00:00', 4),
(70, 4, '2023-09-07', '12:00:00', 4),
(71, 4, '2023-09-07', '16:00:00', 4),
(72, 4, '2023-09-07', '20:00:00', 4),
(73, 4, '2023-09-08', '08:00:00', 4),
(74, 4, '2023-09-08', '12:00:00', 4),
(75, 4, '2023-09-08', '16:00:00', 4),
(76, 4, '2023-09-08', '20:00:00', 4),
(77, 4, '2023-09-09', '08:00:00', 4),
(78, 4, '2023-09-09', '12:00:00', 4),
(79, 4, '2023-09-09', '16:00:00', 4),
(80, 4, '2023-09-09', '20:00:00', 4),
(81, 4, '2023-09-10', '08:00:00', 4),
(82, 4, '2023-09-10', '12:00:00', 4),
(83, 4, '2023-09-10', '16:00:00', 4),
(84, 4, '2023-09-10', '20:00:00', 4),
(85, 5, '2023-09-04', '12:00:00', 5),
(86, 5, '2023-09-04', '20:00:00', 5),
(87, 5, '2023-09-05', '12:00:00', 5),
(88, 5, '2023-09-05', '20:00:00', 5),
(89, 5, '2023-09-06', '12:00:00', 5),
(90, 5, '2023-09-06', '20:00:00', 5),
(91, 5, '2023-09-07', '12:00:00', 5),
(92, 5, '2023-09-07', '20:00:00', 5),
(93, 5, '2023-09-08', '12:00:00', 5),
(94, 5, '2023-09-08', '20:00:00', 5),
(95, 5, '2023-09-09', '12:00:00', 5),
(96, 5, '2023-09-09', '20:00:00', 5),
(97, 5, '2023-09-10', '12:00:00', 5),
(98, 5, '2023-09-10', '20:00:00', 5),
(99, 6, '2023-09-04', '12:00:00', 6),
(100, 6, '2023-09-04', '20:00:00', 6),
(101, 6, '2023-09-05', '12:00:00', 6),
(102, 6, '2023-09-05', '20:00:00', 6),
(103, 6, '2023-09-06', '12:00:00', 6),
(104, 6, '2023-09-06', '20:00:00', 6),
(105, 6, '2023-09-07', '12:00:00', 6),
(106, 6, '2023-09-07', '20:00:00', 6),
(107, 6, '2023-09-08', '12:00:00', 6),
(108, 6, '2023-09-08', '20:00:00', 6),
(109, 6, '2023-09-09', '12:00:00', 6),
(110, 6, '2023-09-09', '20:00:00', 6),
(111, 6, '2023-09-10', '12:00:00', 6),
(112, 6, '2023-09-10', '20:00:00', 6),
(113, 7, '2023-09-04', '08:00:00', 7),
(114, 7, '2023-09-04', '12:00:00', 7),
(115, 7, '2023-09-04', '16:00:00', 7),
(116, 7, '2023-09-04', '20:00:00', 7),
(117, 7, '2023-09-05', '08:00:00', 7),
(118, 7, '2023-09-05', '12:00:00', 7),
(119, 7, '2023-09-05', '16:00:00', 7),
(120, 7, '2023-09-05', '20:00:00', 7),
(121, 7, '2023-09-06', '08:00:00', 7),
(122, 7, '2023-09-06', '12:00:00', 7),
(123, 7, '2023-09-06', '16:00:00', 7),
(124, 7, '2023-09-06', '20:00:00', 7),
(125, 7, '2023-09-07', '08:00:00', 7),
(126, 7, '2023-09-07', '12:00:00', 7),
(127, 7, '2023-09-07', '16:00:00', 7),
(128, 7, '2023-09-07', '20:00:00', 7),
(129, 7, '2023-09-08', '08:00:00', 7),
(130, 7, '2023-09-08', '12:00:00', 7),
(131, 7, '2023-09-08', '16:00:00', 7),
(132, 7, '2023-09-08', '20:00:00', 7),
(133, 7, '2023-09-09', '08:00:00', 7),
(134, 7, '2023-09-09', '12:00:00', 7),
(135, 7, '2023-09-09', '16:00:00', 7),
(136, 7, '2023-09-09', '20:00:00', 7),
(137, 7, '2023-09-10', '08:00:00', 7),
(138, 7, '2023-09-10', '12:00:00', 7),
(139, 7, '2023-09-10', '16:00:00', 7),
(140, 7, '2023-09-10', '20:00:00', 7),
(141, 8, '2023-09-04', '12:00:00', 8),
(142, 8, '2023-09-04', '20:00:00', 8),
(143, 8, '2023-09-05', '12:00:00', 8),
(144, 8, '2023-09-05', '20:00:00', 8),
(145, 8, '2023-09-06', '12:00:00', 8),
(146, 8, '2023-09-06', '20:00:00', 8),
(147, 8, '2023-09-07', '12:00:00', 8),
(148, 8, '2023-09-07', '20:00:00', 8),
(149, 8, '2023-09-08', '12:00:00', 8),
(150, 8, '2023-09-08', '20:00:00', 8),
(151, 8, '2023-09-09', '12:00:00', 8),
(152, 8, '2023-09-09', '20:00:00', 8),
(153, 8, '2023-09-10', '12:00:00', 8),
(154, 8, '2023-09-10', '20:00:00', 8),
(155, 9, '2023-09-04', '21:30:00', 1),
(156, 9, '2023-09-05', '21:30:00', 1),
(157, 9, '2023-09-06', '21:30:00', 1),
(158, 9, '2023-09-07', '21:30:00', 1),
(159, 9, '2023-09-08', '21:30:00', 1),
(160, 9, '2023-09-09', '21:30:00', 1),
(161, 9, '2023-09-10', '21:30:00', 1),
(162, 10, '2023-09-04', '14:30:00', 2),
(163, 10, '2023-09-05', '14:30:00', 2),
(164, 10, '2023-09-06', '14:30:00', 2),
(165, 10, '2023-09-07', '14:30:00', 2),
(166, 10, '2023-09-08', '14:30:00', 2),
(167, 10, '2023-09-09', '14:30:00', 2),
(168, 10, '2023-09-10', '14:30:00', 2),
(169, 11, '2023-09-04', '14:10:00', 3),
(170, 11, '2023-09-05', '14:10:00', 3),
(171, 11, '2023-09-06', '14:10:00', 3),
(172, 11, '2023-09-07', '14:10:00', 3),
(173, 11, '2023-09-08', '14:10:00', 3),
(174, 11, '2023-09-09', '14:10:00', 3),
(175, 11, '2023-09-10', '14:10:00', 3),
(176, 12, '2023-09-04', '16:20:00', 3),
(177, 12, '2023-09-05', '16:20:00', 3),
(178, 12, '2023-09-06', '16:20:00', 3),
(179, 12, '2023-09-07', '16:20:00', 3),
(180, 12, '2023-09-08', '16:20:00', 3),
(181, 12, '2023-09-09', '16:20:00', 3),
(182, 12, '2023-09-10', '16:20:00', 3),
(183, 13, '2023-09-04', '22:20:00', 4),
(184, 13, '2023-09-05', '22:20:00', 4),
(185, 13, '2023-09-06', '22:20:00', 4),
(186, 13, '2023-09-07', '22:20:00', 4),
(187, 13, '2023-09-08', '22:20:00', 4),
(188, 13, '2023-09-09', '22:20:00', 4),
(189, 13, '2023-09-10', '22:20:00', 4),
(190, 14, '2023-09-04', '22:20:00', 5),
(191, 14, '2023-09-05', '22:20:00', 5),
(192, 14, '2023-09-06', '22:20:00', 5),
(193, 14, '2023-09-07', '22:20:00', 5),
(194, 14, '2023-09-08', '22:20:00', 5),
(195, 14, '2023-09-09', '22:20:00', 5),
(196, 14, '2023-09-10', '22:20:00', 5),
(197, 15, '2023-09-04', '14:20:00', 6),
(198, 15, '2023-09-05', '14:20:00', 6),
(199, 15, '2023-09-06', '14:20:00', 6),
(200, 15, '2023-09-07', '14:20:00', 6),
(201, 15, '2023-09-08', '14:20:00', 6),
(202, 15, '2023-09-09', '14:20:00', 6),
(203, 15, '2023-09-10', '14:20:00', 6),
(204, 16, '2023-09-04', '16:30:00', 6),
(205, 16, '2023-09-05', '16:30:00', 6),
(206, 16, '2023-09-06', '16:30:00', 6),
(207, 16, '2023-09-07', '16:30:00', 6),
(208, 16, '2023-09-08', '16:30:00', 6),
(209, 16, '2023-09-09', '16:30:00', 6),
(210, 16, '2023-09-10', '16:30:00', 6),
(211, 17, '2023-09-04', '22:30:00', 7),
(212, 17, '2023-09-05', '22:30:00', 7),
(213, 17, '2023-09-06', '22:30:00', 7),
(214, 17, '2023-09-07', '22:30:00', 7),
(215, 17, '2023-09-08', '22:30:00', 7),
(216, 17, '2023-09-09', '22:30:00', 7),
(217, 17, '2023-09-10', '22:30:00', 7),
(218, 18, '2023-09-04', '15:10:00', 8),
(219, 18, '2023-09-05', '15:10:00', 8),
(220, 18, '2023-09-06', '15:10:00', 8),
(221, 18, '2023-09-07', '15:10:00', 8),
(222, 18, '2023-09-08', '15:10:00', 8),
(223, 18, '2023-09-09', '15:10:00', 8),
(224, 18, '2023-09-10', '15:10:00', 8),
(225, 19, '2023-09-04', '16:50:00', 8),
(226, 19, '2023-09-05', '16:50:00', 8),
(227, 19, '2023-09-06', '16:50:00', 8),
(228, 19, '2023-09-07', '16:50:00', 8),
(229, 19, '2023-09-08', '16:50:00', 8),
(230, 19, '2023-09-09', '16:50:00', 8),
(231, 19, '2023-09-10', '16:50:00', 8),
(232, 20, '2023-09-04', '12:10:00', 1),
(233, 20, '2023-09-05', '12:10:00', 1),
(234, 20, '2023-09-06', '12:10:00', 1),
(235, 20, '2023-09-07', '12:10:00', 1),
(236, 20, '2023-09-08', '12:10:00', 1),
(237, 20, '2023-09-09', '12:10:00', 1),
(238, 20, '2023-09-10', '12:10:00', 1),
(239, 21, '2023-09-04', '12:10:00', 2),
(240, 21, '2023-09-05', '12:10:00', 2),
(241, 21, '2023-09-06', '12:10:00', 2),
(242, 21, '2023-09-07', '12:10:00', 2),
(243, 21, '2023-09-08', '12:10:00', 2),
(244, 21, '2023-09-09', '12:10:00', 2),
(245, 21, '2023-09-10', '12:10:00', 2);
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
(4, 'Dolby ATMOS'),
(5, '字幕'),
(6, '吹替');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_reserves`
--

CREATE TABLE `t_reserves` (
  `f_reserve_id` int(11) NOT NULL,
  `f_movie_manage_id` int(11) NOT NULL,
  `f_reserve_date` datetime NOT NULL,
  `f_member_id` int(11) DEFAULT NULL,
  `f_reserve_delegate_name` varchar(31) DEFAULT NULL,
  `f_reserve_delegate_tel` varchar(11) DEFAULT NULL,
  `f_reserve_delegate_mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_reserves`
--

INSERT INTO `t_reserves` (`f_reserve_id`, `f_movie_manage_id`, `f_reserve_date`, `f_member_id`, `f_reserve_delegate_name`, `f_reserve_delegate_tel`, `f_reserve_delegate_mail`) VALUES
(1, 3, '2023-08-20 02:02:03', NULL, NULL, NULL, NULL),
(2, 3, '2023-09-08 02:02:05', NULL, NULL, NULL, NULL),
(3, 3, '2023-09-08 02:02:06', NULL, NULL, NULL, NULL),
(4, 3, '2023-09-08 02:02:08', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_reserve_seats`
--

CREATE TABLE `t_reserve_seats` (
  `f_reserve_id` int(11) NOT NULL,
  `f_reserve_seat_name` varchar(4) NOT NULL,
  `f_ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_reserve_seats`
--

INSERT INTO `t_reserve_seats` (`f_reserve_id`, `f_reserve_seat_name`, `f_ticket_id`) VALUES
(1, 'A01', 1),
(2, 'B01', 1),
(2, 'B02', 1),
(4, 'B05', 3),
(4, 'B06', 3),
(4, 'B07', 3),
(3, 'D07', 2);

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
(4, '小学生・幼児', 1000),
(5, 'シニア（60歳以上）', 1000);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_handling_manages_types`
--
ALTER TABLE `t_handling_manages_types`
  ADD PRIMARY KEY (`f_movie_manage_id`,`f_movie_type_id`),
  ADD KEY `f_movie_manage_id` (`f_movie_manage_id`),
  ADD KEY `f_movie_type_id` (`f_movie_type_id`);

--
-- テーブルのインデックス `t_handling_movies_types`
--
ALTER TABLE `t_handling_movies_types`
  ADD PRIMARY KEY (`f_movie_id`,`f_movie_type_id`),
  ADD KEY `f_movie_id` (`f_movie_id`),
  ADD KEY `f_movie_type_id` (`f_movie_type_id`);
  
--
-- テーブルのインデックス `t_jobs`
--
ALTER TABLE `t_jobs`
  ADD PRIMARY KEY (`f_job_id`);

--
-- テーブルのインデックス `t_members`
--
ALTER TABLE `t_members`
  ADD PRIMARY KEY (`f_member_id`);

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
-- テーブルのインデックス `t_reserves`
--
ALTER TABLE `t_reserves`
  ADD PRIMARY KEY (`f_reserve_id`);

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
  MODIFY `f_movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `t_movie_images`
--
ALTER TABLE `t_movie_images`
  MODIFY `f_movie_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- テーブルの AUTO_INCREMENT `t_movie_manages`
--
ALTER TABLE `t_movie_manages`
  MODIFY `f_movie_manage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `t_movie_types`
--
ALTER TABLE `t_movie_types`
  MODIFY `f_movie_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `t_reserves`
--
ALTER TABLE `t_reserves`
  MODIFY `f_reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- テーブルの制約 `t_handling_manages_types`
--
ALTER TABLE `t_handling_manages_types`
  ADD CONSTRAINT `t_handling_manages_types_ibfk_1` FOREIGN KEY (`f_movie_manage_id`) REFERENCES `t_movie_manages` (`f_movie_manage_id`),
  ADD CONSTRAINT `t_handling_manages_types_ibfk_2` FOREIGN KEY (`f_movie_type_id`) REFERENCES `t_movie_types` (`f_movie_type_id`);

--
-- テーブルの制約 `t_handling_movies_types`
--
ALTER TABLE `t_handling_movies_types`
  ADD CONSTRAINT `t_handling_movies_types_ibfk_1` FOREIGN KEY (`f_movie_id`) REFERENCES `t_movies` (`f_movie_id`),
  ADD CONSTRAINT `t_handling_movies_types_ibfk_2` FOREIGN KEY (`f_movie_type_id`) REFERENCES `t_movie_types` (`f_movie_type_id`);

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
