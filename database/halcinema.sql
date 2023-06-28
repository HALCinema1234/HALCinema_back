-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-22 09:17:17
-- サーバのバージョン： 10.4.21-MariaDB
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
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 1),
(8, 2),
(8, 4),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(13, 3),
(14, 1),
(14, 2),
(14, 4),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(19, 4),
(20, 1),
(20, 3),
(21, 1),
(21, 3);

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
(7, 'リトル・マーメイド', '2023-06-09', '2023-07-25', 'G', '監督： ロブ・マーシャル\n出演： 【声の出演】ハリー・ベイリー／ジョナ・ハウアー＝キング／メリッサ・マッカーシー／ハビエル・バルデム／ジェイコブ・トレンブレイ／オークワフィナ／ダヴィード・ディグス ほか 【日本語吹き替え】豊原江理佳／木村昴／海宝直人／野地祐翔／浦嶋りんこ／高乃麗／大塚明夫／王林／ますみ(天才ピアニスト) ほか\n公式サイト：https://www.disney.co.jp/movie/littlemermaid', '1991年に公開された名作アニメーションの実写映画化。海の王国に暮らすマーメイドの王女(アリエル)が主人公のミュージカル・ファンタジー。', 135),
(8, 'RRR', '2023-03-10', '2023-05-05', 'G', '監督：S.S.ラージャマウリ\r\n出演：ＮＴＲ　Ｊｒ./ラーム・チャラン/アーリヤー・バット/アジャイ・デーヴガン/レイ・スティーヴンソン/アリソン・ドゥーディ　ほか\r\n公式サイト：https://rrr-movie.jp/', '舞台は1920年、英国植民地時代のインド英国軍にさらわれた幼い少女を救うため、立ち上がるビーム（NTR Jr.）。\r\n大義のため英国政府の警察となるラーマ（ラーム・チャラン）。\r\n熱い思いを胸に秘めた男たちが“運命”に導かれて出会い、唯一無二の親友となる。\r\nしかし、ある事件をきっかけに、それぞれの“宿命”に切り裂かれる2人はやがて究極の選択を迫られることに。\r\n彼らが選ぶのは、友情か？使命か？', 179),
(9, 'インターステラー', '2023-03-17', '2023-05-12', 'G', '監督：クリストファー・ノーラン\r\n出演：マシュー・マコノヒー/アン・ハサウェイ/ジェシカ・チャステイン/ビル・アーウィン/エレン・バースティン/マット・デイモン/マイケル・ケイン　ほか\r\n公式サイト：https://warnerbros.co.jp/home_entertainment/detail.php?title_id=4366', '地球の寿命は尽きかけていた。\r\n居住可能な新たな惑星を探すという人類の限界を超えたミッションに選ばれたのは、まだ幼い子供を持つ元エンジニアの男。\r\n彼を待っていたのは、未だかつて誰も見たことがない、衝撃の宇宙。\r\nはたして彼は人類の存続をかけたミッションを成し遂げることが出来るのか？', 169),
(10, 'インセプション', '2023-03-10', '2023-05-05', 'G', '監督：クリストファー・ノーラン\r\n出演：レオナルド・ディカプリオ/渡辺謙/ジョセフ・ゴードン＝レヴィット/マリオン・コティヤール　ほか　ほか\r\n公式サイト：http://wwws.warnerbros.co.jp/inception/', 'ドム・コブ（レオナルド・ディカプリオ）は、人が無防備になる状態―夢に入っている時に潜在意識の奥底まで潜り込み、他人のアイデアを盗み出すという、危険極まりない犯罪分野において最高の技術を持つスペシャリストである。コブが備えもつ類稀な才能はこの業界でトップレベルであり、企業スパイの世界において引っ張りだこの存在となっていた。だが、彼は最愛のものを失い、国際指名手配犯となってしまう。', 148),
(11, 'マッドマックス 怒りのデス・ロード', '2023-03-03', '2023-04-21', 'R15+', '監督：ジョージ・ミラー\r\n出演：トム・ハーディ/シャーリーズ・セロン/ニコラス・ホルト/ヒュー・キース・バーン/ロージー・ハンティントン＝ホワイトリー　ほか\r\n公式サイト：http://wwws.warnerbros.co.jp/madmaxfuryroad/', '資源が枯渇し、法も秩序も崩壊した世界。愛する者を奪われ、生きる望みさえ失って、荒野をさまよう主人公「マックス」。彼はある日、砂漠を支配する凶悪な敵、ジョーの一団に捕らえ、瀕死の重傷を負う。そこに現れたジョーの配下の女リーダー・フュリオサ、謎の全身白塗りの男、そしてジョーと敵対するグループ。マックスは彼らと力を合わせ、強大なジョーの一味と立ち向かう決意をする―', 120),
(12, 'メメント', '2023-04-07', '2023-05-12', 'G', '監督：クリストファー・ノーラン\r\n出演：ガイ・ピアース/キャリー＝アン・モス/ジョー・パントリアーノ/ジョージャ・フォックス　ほか', '前向性健忘（発症以前の記憶はあるものの、それ以降は数分前の出来事さえ忘れてしまう症状）という記憶障害に見舞われた男が、最愛の妻を殺した犯人を追う異色サスペンス。ロサンジェルスで保険の調査員をしていたレナード。ある日、何者かが家に侵入し、妻がレイプされたうえ殺害されてしまう。その光景を目撃してしまったレナードはショックで前向性健忘となってしまう。彼は記憶を消さないためポラロイドにメモを書き、体にタトゥーを刻みながら犯人の手掛かりを追っていく……。', 113),
(13, 'アメイジング・スパイダーマン', '2023-03-10', '2023-05-05', 'G', '監督：マーク・ウェブ\r\n出演：アンドリュー・ガーフィールド/エマ・ストーン/リス・エヴァンス/デニス・リアリー　ほか', '高校生のピーター・パーカー（アンドリュー・ガーフィールド）は両親が失踪した8歳のときから伯父夫婦のもとで暮らしていた。ある日、ピーターは父リチャード（キャンベル・スコット）の共同研究者だったコナーズ博士（リス・エヴァンス）のもとを訪れ、研究室で特殊なクモにかまれてしまう。その直後、ピーターの体には異変が起き……。', 136),
(14, '劇場版　ヴァイオレット・エヴァーガーデン', '2023-03-24', '2023-05-19', 'G', '監督：石立太一\r\n声の出演：石川由依、浪川大輔　ほか\r\n公式サイト：http://violet-evergarden.jp/', '代筆業に従事する彼女の名は、「ヴァイオレット・エヴァーガーデン」。人々に深い、深い傷を負わせた戦争が終結して数年が経った。世界が少しずつ平穏を取り戻し、新しい技術の開発によって生活は変わり、人々が前を向いて進んでいこうとしているとき。ヴァイオレット・エヴァーガーデンは、大切な人への想いを抱えながら、その人がいない、この世界で生きていこうとしていた。そんなある日、一通の手紙が見つかる……。', 140),
(15, 'ジョン・ウィック：チャプター２', '2023-03-31', '2023-06-02', 'R15+', '監督：チャド・スタエルスキ\r\n出演：キアヌ・リーブス/リッカルド・スカマルチョ/ルビー・ローズ/ジョン・レグイザモ　ほか\r\n公式サイト：http://johnwick.jp/', '伝説の殺し屋ジョン・ウィックによる壮絶な復讐劇から5日後―。彼のもとにイタリアン・マフィアのサンティーノが姉殺しの依頼にやってくる。しかし平穏な隠居生活を望むジョンは彼の依頼を一蹴、サンティーノの怒りを買い、想い出の詰まった家をバズーカで破壊されてしまう。愛犬と共に一命をとりとめたジョンはサンティーノへの復讐を開始するが、命の危険を感じたサンティーノに7億円の懸賞金を懸けられ、全世界の殺し屋に命を狙われることになる。', 122),
(16, '劇場版　メイドインアビス　深き魂の黎明', '2023-05-26', '2023-06-30', 'R15+', '監督：小島正幸\r\n声の出演：富田美憂/伊瀬茉莉也/井澤詩織/森川智之/水瀬いのり　ほか\r\n公式サイト：http://miabyss.com/#1', '隅々まで探索されつくした世界に、唯一残された秘境の大穴『アビス』。どこまで続くとも知れない深く巨大なその縦穴には、奇妙奇怪な生物たちが生息し、今の人類では作りえない貴重な遺物が眠っている。 「アビス」の不可思議に満ちた姿は人々を魅了し、冒険へと駆り立てた。そうして幾度も大穴に挑戦する冒険者たちは、次第に『探窟家』と呼ばれるようになっていった。 アビスの縁に築かれた街『オース』に暮らす孤児のリコは、いつか母のような偉大な探窟家になり、アビスの謎を解き明かすことを夢見ていた。', 105),
(17, 'ＡＫＩＲＡ　アキラ', '2023-06-30', '2023-07-28', 'PG12', '監督：大友克洋\r\n声の出演：岩田光央/佐々木望/小山茉美/石田太郎/草尾毅/中村龍彦/伊藤福恵/神藤一弘　ほか\r\n', '2019年東京湾上に構築されたメガロポリス、ネオ東京は翌年にオリンピック開催を控え、かつての繁栄を取り戻しつつあった。健康優良不良少年のグループリーダー・金田は、荒廃したこの都市でバイクを駆り、暴走と抗争を繰り返していた。ある夜、仲間の鉄雄は暴走中、奇怪な実験体の少年と遭遇し、転倒負傷。呆然とする金田たちの前で、彼らは軍の研究所へと連れ去られてしまう。鉄雄救出のために研究所へ潜入を試みる金田。だが、彼はそこで、過度の人体実験により新たな「力」に覚醒した、狂気の鉄雄を見る。', 124),
(18, 'パプリカ', '2023-06-30', '2023-07-28', 'G', '監督：今敏\r\n出演：林原めぐみ/江守徹/堀勝之祐/古谷徹/大塚明夫/山寺宏一　ほか\r\n', 'パプリカ/千葉敦子は、時田浩作の発明した夢を共有する装置DCミニを使用するサイコセラピスト。 ある日、そのDCミニが研究所から盗まれてしまい、それを悪用して他人の夢に強制介入し、悪夢を見せ精神を崩壊させる事件が発生するようになる。', 90),
(19, 'プロメア', '2023-05-26', '2023-06-30', 'G', '監督：今石洋之\r\n出演：松山ケンイチ/早乙女太一/堺雅人/佐倉綾音　ほか\r\n公式サイト：https://promare-movie.com/\r\n', '世界大炎上――\r\n全世界の半分が焼失したその未曽有の事態の引き金となったのは、突然変異で誕生した炎を操る人種＜バーニッシュ＞の出現だった。\r\nあれから30年―― 攻撃的な一部の面々が＜マッドバーニッシュ＞を名乗り、再び世界に襲いかかる。対バーニッシュ用の高機動救命消防隊＜バーニングレスキュー＞の燃える火消し魂を持つ新人隊員・ガロと＜マッドバーニッシュ＞のリーダー・リオ。熱き魂がぶつかりあう、二人の戦いの結末は――。', 111),
(20, 'マトリックス', '2023-06-23', '2023-07-14', 'G', '監督：ラリー・ウォシャウスキー/アンディ・ウォシャウスキー\r\n出演：キアヌ・リーブス/ローレンス・フィッシュバーン/キャリー＝アン・モス/ヒューゴ・ウィーヴィング　ほか\r\n', '凄腕ハッカーのネオは、最近”起きてもまだ夢を見ているような感覚”に悩まされていた。 そんなある日、自宅のコンピュータ画面に、不思議なメッセージが届く…。 正体不明の美女トリニティーに導かれて、ネオはモーフィアスという男と出会う。 そこで見せられた世界の真実とは。やがて、人類の命運をかけた壮絶な戦いが始まる。', 136),
(21, 'ワイルド・スピード MEGA MAX', '2023-06-16', '2023-06-30', 'G', '監督：ジャスティン・リン\r\n出演：ヴィン・ディーゼル/ポール・ウォーカー/ジョーダナ・ブリュースター/ドウェイン・ジョンソン　ほか\r\n', '指名手配犯のドミニク (ヴィン・ディーゼル)と、元FBI捜査官ブライアン (ポール・ウォーカー)。 “お尋ね者”として追われる身となった彼らは、厳重に張り巡らされた捜査網といくつもの国境を越え、共に南米の地に降り立った。 ブラジルの裏社会に身を隠しながら、持ち前のドライビング・テクニックを生かし、超高級車の強奪など命がけのヤマをこなしていく２人。しかし彼らは、逃亡生活から抜け出し永遠の自由を得るために、裏社会を牛耳る黒幕から１億ドルを奪うという、あまりにも無謀な最後の賭けに出る。', 130);

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
(1, 1, 'mondays/1.jpg'),
(2, 1, 'mondays/2.jpg'),
(3, 1, 'mondays/3.jpg'),
(4, 1, 'mondays/4.jpg'),
(5, 1, 'mondays/5.jpg'),
(6, 2, 'woman_talking/1.jpg'),
(7, 2, 'woman_talking/2.jpg'),
(8, 2, 'woman_talking/3.jpg'),
(9, 2, 'woman_talking/4.jpg'),
(10, 2, 'woman_talking/5.jpg'),
(11, 3, 'samurai/1.jpg'),
(12, 4, 'kaibutsu/1.jpg'),
(13, 4, 'kaibutsu/2.jpg'),
(14, 4, 'kaibutsu/3.jpg'),
(15, 5, 'creed/1.jpg'),
(16, 5, 'creed/2.jpg'),
(17, 5, 'creed/3.jpg'),
(18, 6, 'rohan_lourve/1.jpg'),
(19, 6, 'rohan_lourve/2.jpg'),
(20, 6, 'rohan_lourve/3.jpg'),
(21, 6, 'rohan_lourve/4.jpg'),
(22, 6, 'rohan_lourve/5.jpg'),
(23, 7, 'little_mermaid/1.jpg'),
(24, 7, 'little_mermaid/2.jpg'),
(25, 7, 'little_mermaid/3.jpg'),
(26, 7, 'little_mermaid/4.jpg'),
(27, 8, 'rrr/1.jpg'),
(28, 8, 'rrr/2.jpg'),
(29, 8, 'rrr/3.jpg'),
(30, 8, 'rrr/4.jpg'),
(31, 8, 'rrr/5.jpg'),
(32, 9, 'interstellar/1.jpg'),
(33, 9, 'interstellar/2.jpg'),
(34, 9, 'interstellar/3.jpg'),
(35, 9, 'interstellar/4.jpg'),
(36, 9, 'interstellar/5.jpg'),
(37, 10, 'inception/1.jpg'),
(38, 10, 'inception/2.jpg'),
(39, 10, 'inception/3.jpg'),
(40, 10, 'inception/4.jpg'),
(41, 10, 'inception/5.jpg'),
(42, 11, 'madmax/1.jpg'),
(43, 11, 'madmax/2.jpg'),
(44, 11, 'madmax/3.jpg'),
(45, 11, 'madmax/4.jpg'),
(46, 11, 'madmax/5.jpg'),
(47, 12, 'memento/1.jpg'),
(48, 12, 'memento/2.jpg'),
(49, 12, 'memento/3.jpg'),
(50, 13, 'spider_man/1.jpg'),
(51, 13, 'spider_man/2.jpg'),
(52, 13, 'spider_man/3.jpg'),
(53, 13, 'spider_man/4.jpg'),
(54, 13, 'spider_man/5.jpg'),
(55, 14, 'violet_evergarden/1.jpg'),
(56, 14, 'violet_evergarden/2.jpg'),
(57, 14, 'violet_evergarden/3.jpg'),
(58, 14, 'violet_evergarden/4.jpg'),
(59, 14, 'violet_evergarden/5.jpg'),
(60, 15, 'john_wick/1.jpg'),
(61, 15, 'john_wick/2.jpg'),
(62, 15, 'john_wick/3.jpg'),
(63, 15, 'john_wick/4.jpg'),
(64, 15, 'john_wick/5.jpg'),
(65, 16, 'made_in_abyss/1.jpg'),
(66, 16, 'made_in_abyss/2.jpg'),
(67, 16, 'made_in_abyss/3.jpg'),
(68, 17, 'akira/1.jpg'),
(69, 17, 'akira/2.jpg'),
(70, 17, 'akira/3.jpg'),
(71, 17, 'akira/4.jpg'),
(72, 17, 'akira/5.jpg'),
(73, 18, 'paprika/1.jpg'),
(74, 19, 'promare/1.jpg'),
(75, 19, 'promare/2.jpg'),
(76, 19, 'promare/3.jpg'),
(77, 19, 'promare/4.jpg'),
(78, 19, 'promare/5.jpg'),
(79, 20, 'matrix/1.jpg'),
(80, 20, 'matrix/2.jpg'),
(81, 20, 'matrix/3.jpg'),
(82, 20, 'matrix/4.jpg'),
(83, 20, 'matrix/5.jpg'),
(84, 21, 'wild_speed/1.jpg'),
(85, 21, 'wild_speed/2.jpg'),
(86, 21, 'wild_speed/3.jpg'),
(87, 21, 'wild_speed/4.jpg'),
(88, 21, 'wild_speed/5.jpg');


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
  MODIFY `f_movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `t_movie_images`
--
ALTER TABLE `t_movie_images`
  MODIFY `f_movie_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
