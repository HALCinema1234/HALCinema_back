<?php
class MoviesController extends Controller
{

    // =============================================================================
    // get
    // =============================================================================
    public function get($id = null): array
    {

        if (parent::is_set($id)) {
            return $this->getById($id);
        } else {
            return $this->getAll();
        }
    }

    // 映画リストの取得
    private function getAll(): array
    {
        $res_movies = 
        [
            [
                "id"=>8,
                "title"=>"RRR",
                "thumbnail"=> "images\/rrr\/0.jpg",
                "start"=> "2023-06-02",
                "on_air"=> 1,
                "age_restrictions"=> "G",
                "data"=> "監督 : S.S.ラージャマウリ\r\n出演 : NTR JR.\/ラーム・チャラン\/アーリヤー・バット\/アジャイ・デーヴガン\/レイ・スティーヴンソン\/アリソン・ドゥーディ ほか\r\n公式サイト : https:\/\/rrr-movie.jp\/",
                "introduction"=> "舞台は1920年、英国植民地時代のインド英国軍にさらわれた幼い少女を救うため、立ち上がるビーム(NTR Jr.)。\r\n大義のため英国政府の警察となるラーマ(ラーム・チャラン)。\r\n熱い思いを胸に秘めた男たちが“運命”に導かれて出会い、唯一無二の親友となる。\r\nしかし、ある事件をきっかけに、それぞれの“宿命”に切り裂かれる2人はやがて究極の選択を迫られることに。\r\n彼らが選ぶのは、友情か？使命か？",
                "time"=> 179,
                "types"=> ["字幕", "IMAX", "吹替", "2D", "Dolby ATMOS"],
                "images"=> ["images\/rrr\/1.jpg", "images\/rrr\/2.jpg", "images\/rrr\/3.jpg", "images\/rrr\/4.jpg", "images\/rrr\/5.jpg"],
                "manages"=> [
                    [ "id"=>962, "day"=> "2023-07-14", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>963, "day"=> "2023-07-14", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>964, "day"=> "2023-07-15", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ], 
                    [ "id"=>965, "day"=> "2023-07-15", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>966, "day"=> "2023-07-16", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>967, "day"=> "2023-07-16", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ], 
                    [ "id"=>968, "day"=> "2023-07-17", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>969, "day"=> "2023-07-17", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>970, "day"=> "2023-07-18", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>971, "day"=> "2023-07-18", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>972, "day"=> "2023-07-19", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                    [ "id"=>973, "day"=> "2023-07-19", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ]
                ]
            ], 
            [
                "id"=>9,
                "title"=>"インターステラー",
                "thumbnail"=> "images\/interstellar\/0.jpg",
                "start"=> "2023-06-02",
                "on_air"=> 1,
                "age_restrictions"=> "G",
                "data"=> "監督 : クリストファー・ノーラン\r\n出演 : マシュー・マコノヒー\/アン・ハサウェイ\/ジェシカ・チャステイン\/ビル・アーウィン\/エレン・バースティン\/マット・デイモン\/マイケル・ケイン ほか\r\n公式サイト : https:\/\/warnerbros.co.jp\/home_entertainment\/detail.php?title_id=4366",
                "introduction"=> "地球の寿命は尽きかけていた。\r\n居住可能な新たな惑星を探すという人類の限界を超えたミッションに選ばれたのは、まだ幼い子供を持つ元エンジニアの男。\r\n彼を待っていたのは、未だかつて誰も見たことがない、衝撃の宇宙。\r\nはたして彼は人類の存続をかけたミッションを成し遂げることが出来るのか？",
                "time"=> 169,
                "types"=> ["字幕", "IMAX", "2D"],
                "images"=> ["images\/interstellar\/1.jpg", "images\/interstellar\/2.jpg", "images\/interstellar\/3.jpg", "images\/interstellar\/4.jpg", "images\/interstellar\/5.jpg"],
                "manages"=> [[
                    "id"=>975,
                    "day"=> "2023-07-14",
                    "start"=> "21:30:00",
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                    ], [
                    "id"=>976,
                    "day"=> "2023-07-15",
                    "start"=> "21:30:00",
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                    ], [
                    "id"=>977,
                    "day"=> "2023-07-16",
                    "start"=> "21:30:00",
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                    ], [
                    "id"=>978,
                    "day"=> "2023-07-17",
                    "start"=> "21:30:00",
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                    ], [
                    "id"=>979,
                    "day"=> "2023-07-18",
                    "start"=> "21:30:00",
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                    ], [
                    "id"=>980,
                    "day"=> "2023-07-19",
                    "start"=> "21:30:00",], [
                    "end"=> "24:30:00",
                    "screening_time"=> 180,
                    "theater_id"=> 1,
                    "all_seats"=> 200,
                    "reserved_seats"=> 0,
                    "types"=> ["2D"]
                ]]
          ], [
            "id"=>10,
            "title"=>"インセプション",
            "thumbnail"=> "images\/inception\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : クリストファー・ノーラン\r\n出演 : レオナルド・ディカプリオ\/渡辺謙\/ジョセフ・ゴードン＝レヴィット\/マリオン・コティヤール ほか\r\n公式サイト : http:\/\/wwws.warnerbros.co.jp\/inception\/",
            "introduction"=> "ドム・コブ(レオナルド・ディカプリオ)は、人が無防備になる状態―夢に入っている時に潜在意識の奥底まで潜り込み、他人のアイデアを盗み出すという、危険極まりない犯罪分野において最高の技術を持つスペシャリストである。コブが備えもつ類稀な才能はこの業界でトップレベルであり、企業スパイの世界において引っ張りだこの存在となっていた。だが、彼は最愛のものを失い、国際指名手配犯となってしまう。",
            "time"=> 148,
            "types"=> ["字幕", "IMAX", "2D"],
            "images"=> ["images\/inception\/1.jpg", "images\/inception\/2.jpg", "images\/inception\/3.jpg", "images\/inception\/4.jpg", "images\/inception\/5.jpg"],
            "manages"=> [[
              "id"=>982,
              "day"=> "2023-07-14",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>983,
              "day"=> "2023-07-15",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>984,
              "day"=> "2023-07-16",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>985,
              "day"=> "2023-07-17",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>986,
              "day"=> "2023-07-18",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>987,
              "day"=> "2023-07-19",
              "start"=> "14:30:00",
              "end"=> "17:10:00",
              "screening_time"=> 160,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>11,
            "title"=>"マッドマックス 怒りのデス・ロード",
            "thumbnail"=> "images\/madmax\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "R15+",
            "data"=> "監督 : ジョージ・ミラー\r\n出演 : トム・ハーディ\/シャーリーズ・セロン\/ニコラス・ホルト\/ヒュー・キース・バーン\/ロージー・ハンティントン＝ホワイトリー ほか\r\n公式サイト : http:\/\/wwws.warnerbros.co.jp\/madmaxfuryroad\/",
            "introduction"=> "資源が枯渇し、法も秩序も崩壊した世界。愛する者を奪われ、生きる望みさえ失って、荒野をさまよう主人公「マックス」。彼はある日、砂漠を支配する凶悪な敵、ジョーの一団に捕らえ、瀕死の重傷を負う。そこに現れたジョーの配下の女リーダー・フュリオサ、謎の全身白塗りの男、そしてジョーと敵対するグループ。マックスは彼らと力を合わせ、強大なジョーの一味と立ち向かう決意をする―",
            "time"=> 120,
            "types"=> ["字幕", "IMAX", "吹替", "4DX", "2D"],
            "images"=> ["images\/madmax\/1.jpg", "images\/madmax\/2.jpg", "images\/madmax\/3.jpg", "images\/madmax\/4.jpg", "images\/madmax\/5.jpg"],
            "manages"=> [[
              "id"=>989,
              "day"=> "2023-07-14",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>990,
              "day"=> "2023-07-15",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>991,
              "day"=> "2023-07-16",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>992,
              "day"=> "2023-07-17",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>993,
              "day"=> "2023-07-18",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>994,
              "day"=> "2023-07-19",
              "start"=> "14:10:00",
              "end"=> "16:20:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>18,
            "title"=>"パプリカ",
            "thumbnail"=> "images\/paprika\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 今敏\r\n出演 : 林原めぐみ\/江守徹\/堀勝之祐\/古谷徹\/大塚明夫\/山寺宏一 ほか\r\n",
            "introduction"=> "千葉敦子は、時田浩作の発明した夢を共有する装置DCミニを使用するサイコセラピスト。 ある日、そのDCミニが研究所から盗まれてしまい、それを悪用して他人の夢に強制介入し、悪夢を見せ精神を崩壊させる事件が発生するようになる。",
            "time"=> 90,
            "types"=> ["2D"],
            "images"=> ["images\/paprika\/1.jpg", "images\/paprika\/2.jpg", "images\/paprika\/3.jpg", "images\/paprika\/4.jpg"],
            "manages"=> [[
              "id"=>1038,
              "day"=> "2023-07-14",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1039,
              "day"=> "2023-07-15",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1040,
              "day"=> "2023-07-16",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1041,
              "day"=> "2023-07-17",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1042,
              "day"=> "2023-07-18",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1043,
              "day"=> "2023-07-19",
              "start"=> "15:10:00",
              "end"=> "16:50:00",
              "screening_time"=> 100,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>19,
            "title"=>"プロメア",
            "thumbnail"=> "images\/promare\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 今石洋之\r\n出演 : 松山ケンイチ\/早乙女太一\/堺雅人\/佐倉綾音 ほか\r\n公式サイト : https:\/\/promare-movie.com\/\r\n",
            "introduction"=> "世界大炎上――\r\n全世界の半分が焼失したその未曽有の事態の引き金となったのは、突然変異で誕生した炎を操る人種<バーニッシュ>の出現だった。\r\nあれから30年―― 攻撃的な一部の面々が＜マッドバーニッシュ＞を名乗り、再び世界に襲いかかる。対バーニッシュ用の高機動救命消防隊＜バーニングレスキュー＞の燃える火消し魂を持つ新人隊員・ガロと＜マッドバーニッシュ＞のリーダー・リオ。熱き魂がぶつかりあう、二人の戦いの結末は――。",
            "time"=> 111,
            "types"=> ["2D", "Dolby ATMOS"],
            "images"=> ["images\/promare\/1.jpg", "images\/promare\/2.jpg", "images\/promare\/3.jpg", "images\/promare\/4.jpg", "images\/promare\/5.jpg"],
            "manages"=> [[
              "id"=>1045,
              "day"=> "2023-07-14",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1046,
              "day"=> "2023-07-15",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1047,
              "day"=> "2023-07-16",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1048,
              "day"=> "2023-07-17",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1049,
              "day"=> "2023-07-18",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1050,
              "day"=> "2023-07-19",
              "start"=> "16:50:00",
              "end"=> "19:00:00",
              "screening_time"=> 130,
              "theater_id"=> 8,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>20,
            "title"=>"マトリックス",
            "thumbnail"=> "images\/matrix\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : ラリー・ウォシャウスキー\/アンディ・ウォシャウスキー\r\n出演 : キアヌ・リーブス\/ローレンス・フィッシュバーン\/キャリー＝アン・モス\/ヒューゴ・ウィーヴィング ほか\r\n",
            "introduction"=> "凄腕ハッカーのネオは、最近”起きてもまだ夢を見ているような感覚”に悩まされていた。 そんなある日、自宅のコンピュータ画面に、不思議なメッセージが届く…。 正体不明の美女トリニティーに導かれて、ネオはモーフィアスという男と出会う。 そこで見せられた世界の真実とは。やがて、人類の命運をかけた壮絶な戦いが始まる。",
            "time"=> 136,
            "types"=> ["2D", "字幕", "4DX"],
            "images"=> ["images\/matrix\/1.jpg", "images\/matrix\/2.jpg", "images\/matrix\/3.jpg", "images\/matrix\/4.jpg", "images\/matrix\/5.jpg"],
            "manages"=> [[
              "id"=>1052,
              "day"=> "2023-07-14",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1053,
              "day"=> "2023-07-15",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1054,
              "day"=> "2023-07-16",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1055,
              "day"=> "2023-07-17",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1056,
              "day"=> "2023-07-18",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1057,
              "day"=> "2023-07-19",
              "start"=> "12:10:00",
              "end"=> "14:40:00",
              "screening_time"=> 150,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>21,
            "title"=>"ワイルド・スピード MEGA MAX",
            "thumbnail"=> "images\/wild_speed\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : ジャスティン・リン\r\n出演 : ヴィン・ディーゼル\/ポール・ウォーカー\/ジョーダナ・ブリュースター\/ドウェイン・ジョンソン ほか\r\n",
            "introduction"=> "指名手配犯のドミニク (ヴィン・ディーゼル)と、元FBI捜査官ブライアン (ポール・ウォーカー)。 “お尋ね者”として追われる身となった彼らは、厳重に張り巡らされた捜査網といくつもの国境を越え、共に南米の地に降り立った。 ブラジルの裏社会に身を隠しながら、持ち前のドライビング・テクニックを生かし、超高級車の強奪など命がけのヤマをこなしていく２人。しかし彼らは、逃亡生活から抜け出し永遠の自由を得るために、裏社会を牛耳る黒幕から１億ドルを奪うという、あまりにも無謀な最後の賭けに出る。",
            "time"=> 130,
            "types"=> ["2D", "字幕", "4DX"],
            "images"=> ["images\/wild_speed\/1.jpg", "images\/wild_speed\/2.jpg", "images\/wild_speed\/3.jpg", "images\/wild_speed\/4.jpg", "images\/wild_speed\/5.jpg"],
            "manages"=> [[
              "id"=>1059,
              "day"=> "2023-07-14",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1060,
              "day"=> "2023-07-15",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1061,
              "day"=> "2023-07-16",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1062,
              "day"=> "2023-07-17",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1063,
              "day"=> "2023-07-18",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1064,
              "day"=> "2023-07-19",
              "start"=> "12:10:00",
              "end"=> "14:30:00",
              "screening_time"=> 140,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>12,
            "title"=>"メメント",
            "thumbnail"=> "images\/memento\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : クリストファー・ノーラン\r\n出演 : ガイ・ピアース\/キャリー＝アン・モス\/ジョー・パントリアーノ\/ジョージャ・フォックス ほか\n",
            "introduction"=> "前向性健忘(発症以前の記憶はあるものの、それ以降は数分前の出来事さえ忘れてしまう症状)という記憶障害に見舞われた男が、最愛の妻を殺した犯人を追う異色サスペンス。ロサンジェルスで保険の調査員をしていたレナード。ある日、何者かが家に侵入し、妻がレイプされたうえ殺害されてしまう。その光景を目撃してしまったレナードはショックで前向性健忘となってしまう。彼は記憶を消さないためポラロイドにメモを書き、体にタトゥーを刻みながら犯人の手掛かりを追っていく……。",
            "time"=> 113,
            "types"=> ["2D", "字幕", "IMAX"],
            "images"=> ["images\/memento\/1.jpg", "images\/memento\/2.jpg", "images\/memento\/3.jpg"],
            "manages"=> [[
              "id"=>996,
              "day"=> "2023-07-14",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>997,
              "day"=> "2023-07-15",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>998,
              "day"=> "2023-07-16",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>999,
              "day"=> "2023-07-17",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1000,
              "day"=> "2023-07-18",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1001,
              "day"=> "2023-07-19",
              "start"=> "16:20:00",
              "end"=> "18:30:00",
              "screening_time"=> 130,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>13,
            "title"=>"アメイジング・スパイダーマン",
            "thumbnail"=> "images\/spider_man\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : マーク・ウェブ\r\n出演 : アンドリュー・ガーフィールド\/エマ・ストーン\/リス・エヴァンス\/デニス・リアリー ほか\n",
            "introduction"=> "高校生のピーター・パーカー(アンドリュー・ガーフィールド)は両親が失踪した8歳のときから伯父夫婦のもとで暮らしていた。ある日、ピーターは父リチャード(キャンベル・スコット)の共同研究者だったコナーズ博士(リス・エヴァンス)のもとを訪れ、研究室で特殊なクモにかまれてしまう。その直後、ピーターの体には異変が起き……。",
            "time"=> 136,
            "types"=> ["2D", "字幕", "IMAX", "4DX"],
            "images"=> ["images\/spider_man\/1.jpg", "images\/spider_man\/2.jpg", "images\/spider_man\/3.jpg", "images\/spider_man\/4.jpg", "images\/spider_man\/5.jpg"],
            "manages"=> [[
              "id"=>1003,
              "day"=> "2023-07-14",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1004,
              "day"=> "2023-07-15",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1005,
              "day"=> "2023-07-16",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1006,
              "day"=> "2023-07-17",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1007,
              "day"=> "2023-07-18",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1008,
              "day"=> "2023-07-19",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>14,
            "title"=>"劇場版 ヴァイオレット・エヴァーガーデン",
            "thumbnail"=> "images\/violet_evergarden\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 石立太一\r\n声の出演 : 石川由依、浪川大輔 ほか\r\n公式サイト : http:\/\/violet-evergarden.jp\/",
            "introduction"=> "代筆業に従事する彼女の名は、「ヴァイオレット・エヴァーガーデン」。人々に深い、深い傷を負わせた戦争が終結して数年が経った。世界が少しずつ平穏を取り戻し、新しい技術の開発によって生活は変わり、人々が前を向いて進んでいこうとしているとき。ヴァイオレット・エヴァーガーデンは、大切な人への想いを抱えながら、その人がいない、この世界で生きていこうとしていた。そんなある日、一通の手紙が見つかる……。",
            "time"=> 140,
            "types"=> ["2D", "IMAX", "Dolby ATMOS"],
            "images"=> ["images\/violet_evergarden\/1.jpg", "images\/violet_evergarden\/2.jpg", "images\/violet_evergarden\/3.jpg", "images\/violet_evergarden\/4.jpg", "images\/violet_evergarden\/5.jpg"],
            "manages"=> [[
              "id"=>1010,
              "day"=> "2023-07-14",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1011,
              "day"=> "2023-07-15",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1012,
              "day"=> "2023-07-16",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1013,
              "day"=> "2023-07-17",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1014,
              "day"=> "2023-07-18",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1015,
              "day"=> "2023-07-19",
              "start"=> "22:20:00",
              "end"=> "24:50:00",
              "screening_time"=> 150,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>15,
            "title"=>"ジョン・ウィック :チャプター2",
            "thumbnail"=> "images\/john_wick\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "R15+",
            "data"=> "監督 : チャド・スタエルスキ\r\n出演 : キアヌ・リーブス\/リッカルド・スカマルチョ\/ルビー・ローズ\/ジョン・レグイザモ ほか\r\n公式サイト : http:\/\/johnwick.jp\/",
            "introduction"=> "伝説の殺し屋ジョン・ウィックによる壮絶な復讐劇から5日後―。彼のもとにイタリアン・マフィアのサンティーノが姉殺しの依頼にやってくる。しかし平穏な隠居生活を望むジョンは彼の依頼を一蹴、サンティーノの怒りを買い、想い出の詰まった家をバズーカで破壊されてしまう。愛犬と共に一命をとりとめたジョンはサンティーノへの復讐を開始するが、命の危険を感じたサンティーノに7億円の懸賞金を懸けられ、全世界の殺し屋に命を狙われることになる。",
            "time"=> 122,
            "types"=> ["2D", "字幕", "IMAX"],
            "images"=> ["images\/john_wick\/1.jpg", "images\/john_wick\/2.jpg", "images\/john_wick\/3.jpg", "images\/john_wick\/4.jpg", "images\/john_wick\/5.jpg"],
            "manages"=> [[
              "id"=>1017,
              "day"=> "2023-07-14",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1018,
              "day"=> "2023-07-15",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1019,
              "day"=> "2023-07-16",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1020,
              "day"=> "2023-07-17",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1021,
              "day"=> "2023-07-18",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1022,
              "day"=> "2023-07-19",
              "start"=> "14:20:00",
              "end"=> "16:40:00",
              "screening_time"=> 140,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>16,
            "title"=>"劇場版 メイドインアビス 深き魂の黎明",
            "thumbnail"=> "images\/made_in_abyss\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "R15+",
            "data"=> "監督 : 小島正幸\r\n声の出演 : 富田美憂\/伊瀬茉莉也\/井澤詩織\/森川智之\/水瀬いのり ほか\r\n公式サイト : http:\/\/miabyss.com\/#1",
            "introduction"=> "隅々まで探索されつくした世界に、唯一残された秘境の大穴『アビス』。どこまで続くとも知れない深く巨大なその縦穴には、奇妙奇怪な生物たちが生息し、今の人類では作りえない貴重な遺物が眠っている。 「アビス」の不可思議に満ちた姿は人々を魅了し、冒険へと駆り立てた。そうして幾度も大穴に挑戦する冒険者たちは、次第に『探窟家』と呼ばれるようになっていった。 アビスの縁に築かれた街『オース』に暮らす孤児のリコは、いつか母のような偉大な探窟家になり、アビスの謎を解き明かすことを夢見ていた。",
            "time"=> 105,
            "types"=> ["2D", "IMAX"],
            "images"=> ["images\/made_in_abyss\/1.jpg", "images\/made_in_abyss\/2.jpg", "images\/made_in_abyss\/3.jpg"],
            "manages"=> [[
              "id"=>1024,
              "day"=> "2023-07-14",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1025,
              "day"=> "2023-07-15",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1026,
              "day"=> "2023-07-16",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1027,
              "day"=> "2023-07-17",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1028,
              "day"=> "2023-07-18",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1029,
              "day"=> "2023-07-19",
              "start"=> "16:30:00",
              "end"=> "18:30:00",
              "screening_time"=> 120,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>17,
            "title"=>"AKIRA アキラ",
            "thumbnail"=> "images\/akira\/0.jpg",
            "start"=> "2023-06-09",
            "on_air"=> 1,
            "age_restrictions"=> "PG12",
            "data"=> "監督 : 大友克洋\r\n声の出演 : 岩田光央\/佐々木望\/小山茉美\/石田太郎\/草尾毅\/中村龍彦\/伊藤福恵\/神藤一弘 ほか\r\n",
            "introduction"=> "2019年東京湾上に構築されたメガロポリス、ネオ東京は翌年にオリンピック開催を控え、かつての繁栄を取り戻しつつあった。健康優良不良少年のグループリーダー・金田は、荒廃したこの都市でバイクを駆り、暴走と抗争を繰り返していた。ある夜、仲間の鉄雄は暴走中、奇怪な実験体の少年と遭遇し、転倒負傷。呆然とする金田たちの前で、彼らは軍の研究所へと連れ去られてしまう。鉄雄救出のために研究所へ潜入を試みる金田。だが、彼はそこで、過度の人体実験により新たな「力」に覚醒した、狂気の鉄雄を見る。",
            "time"=> 124,
            "types"=> ["2D", "IMAX"],
            "images"=> ["images\/akira\/1.jpg", "images\/akira\/2.jpg", "images\/akira\/3.jpg", "images\/akira\/4.jpg", "images\/akira\/5.jpg"],
            "manages"=> [[
              "id"=>1031,
              "day"=> "2023-07-14",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1032,
              "day"=> "2023-07-15",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1033,
              "day"=> "2023-07-16",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1034,
              "day"=> "2023-07-17",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1035,
              "day"=> "2023-07-18",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>1036,
              "day"=> "2023-07-19",
              "start"=> "22:30:00",
              "end"=> "24:50:00",
              "screening_time"=> 140,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>1,
            "title"=>"MONDAYS\/このタイムループ、上司に気づかせないと終わらない",
            "thumbnail"=> "images\/mondays\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 竹林亮\n\t出演: 円井わん\/マキタスポーツ\/長村航希\/三河悠冴\/八木光太郎\/髙野春樹\/島田桃依\/池田良\/しゅはまはるみ ほか\n公式サイト : https:\/\/mondays-cinema.com",
            "introduction"=> "小さな広告代理店で働く吉川朱海は、大手広告代理店への転職という野心を持って仕事に取り組んでいた。しかし、次から次に降ってくる仕事で余裕はゼロ。ある日、後輩2人組から「僕たち、同じ一週間を繰り返しています」と告げられる。だが、その脱出の鍵を握る永久部長はまったくタイムループに気づいてくれないのだった。果たして彼らは、無事脱出できるのかー。",
            "time"=> 82,
            "types"=> ["2D"],
            "images"=> ["images\/mondays\/1.jpg", "images\/mondays\/2.jpg", "images\/mondays\/3.jpg", "images\/mondays\/4.jpg", "images\/mondays\/5.jpg"],
            "manages"=> [[
              "id"=>739,
              "day"=> "2023-07-14",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>740,
              "day"=> "2023-07-14",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>741,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>742,
              "day"=> "2023-07-15",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>743,
              "day"=> "2023-07-15",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>744,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>745,
              "day"=> "2023-07-16",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>746,
              "day"=> "2023-07-16",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>747,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>748,
              "day"=> "2023-07-17",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>749,
              "day"=> "2023-07-17",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>750,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>751,
              "day"=> "2023-07-18",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>752,
              "day"=> "2023-07-18",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>753,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>754,
              "day"=> "2023-07-19",
              "start"=> "08:00:00",
              "end"=> "09:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>755,
              "day"=> "2023-07-19",
              "start"=> "16:00:00",
              "end"=> "17:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>756,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "21:40:00",
              "screening_time"=> 100,
              "theater_id"=> 1,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>2,
            "title"=>"ウーマン・トーキング 私たちの選択",
            "thumbnail"=> "images\/woman_talking\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : サラ・ポーリー\n出演: ルーニー・マーラ\/クレア・フォイ\/ジェシー・バックリー\/ジュディス・アイヴィ\/ベン・ウィショー\/フランシス・マクドーマンド ほか\n公式サイト : https:\/\/womentalking-movie.jp\/",
            "introduction"=> "2010年、自給自足で生活するキリスト教一派の村で起きた連続レイプ事件。これまで女性たちはそれを「悪魔の仕業」「作り話」である、と男性たちによって否定されていたが、ある日それが実際に犯罪だったことが明らかになる。タイムリミットは男性たちが街へと出かけている 2日間。緊迫感のなか、尊厳を奪われた彼女たちは自らの未来を懸けた話し合いを行う。",
            "time"=> 105,
            "types"=> ["字幕", "吹替", "2D"],
            "images"=> ["images\/woman_talking\/1.jpg", "images\/woman_talking\/2.jpg", "images\/woman_talking\/3.jpg", "images\/woman_talking\/4.jpg", "images\/woman_talking\/5.jpg"],
            "manages"=> [[
              "id"=>844,
              "day"=> "2023-07-14",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>845,
              "day"=> "2023-07-14",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>846,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>847,
              "day"=> "2023-07-15",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>848,
              "day"=> "2023-07-15",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>849,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>850,
              "day"=> "2023-07-16",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>851,
              "day"=> "2023-07-16",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>852,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>853,
              "day"=> "2023-07-17",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>854,
              "day"=> "2023-07-17",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>855,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>856,
              "day"=> "2023-07-18",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>857,
              "day"=> "2023-07-18",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>858,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>859,
              "day"=> "2023-07-19",
              "start"=> "08:00:00",
              "end"=> "10:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>860,
              "day"=> "2023-07-19",
              "start"=> "16:00:00",
              "end"=> "18:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>861,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:00:00",
              "screening_time"=> 120,
              "theater_id"=> 2,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>3,
            "title"=>"憧れを超えた侍たち 世界一への記録",
            "thumbnail"=> "images\/samurai\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 三木慎太郎\n出演: 侍ジャパントップチーム\/窪田等(ナレーション) ほか\n公式サイト : https:\/\/www.japan-baseball.jp\/jp\/movie\/2023\/",
            "introduction"=> "2021年12月、野球日本代表「侍ジャパン」トップチームの監督に就任した栗山英樹監督。誰よりも野球を愛し、選手を愛する指揮官が2023年3月開催の「2023 WORLD BASEBALL CLASSIC ™ 」へ向け、熱き魂の全てを捧げる日々がはじまった。目標は「世界一」。14年ぶりの「WBC世界一」へ、史上最強と言われる侍ジャパンが誕生。",
            "time"=> 130,
            "types"=> ["2D"],
            "images"=> ["images\/samurai\/1.jpg"],
            "manages"=> [[
              "id"=>864,
              "day"=> "2023-07-14",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>865,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>866,
              "day"=> "2023-07-15",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>867,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>868,
              "day"=> "2023-07-16",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>869,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>870,
              "day"=> "2023-07-17",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>871,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>872,
              "day"=> "2023-07-18",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>873,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>874,
              "day"=> "2023-07-19",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>875,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 3,
              "all_seats"=> 200,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>4,
            "title"=>"怪物",
            "thumbnail"=> "images\/kaibutsu\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 是枝裕和\n出演: 安藤サクラ\/永山瑛太\/黒川想矢\/柊木陽太\/高畑充希\/角田晃広\/中村獅童\/田中裕子 ほか\n公式サイト : https:\/\/gaga.ne.jp\/kaibutsu-movie\/",
            "introduction"=> "大きな湖のある郊外の町。息子を愛するシングルマザー、生徒思いの学校教師、そして無邪気な子供たち。それは、よくある子供同士のケンカに見えた。しかし、彼らの食い違う主張は次第に社会やメディアを巻き込み、大事になっていく。そしてある嵐の朝、子供たちは忽然と姿を消した。",
            "time"=> 125,
            "types"=> ["2D"],
            "images"=> ["images\/kaibutsu\/1.jpg", "images\/kaibutsu\/2.jpg", "images\/kaibutsu\/3.jpg"],
            "manages"=> [[
              "id"=>880,
              "day"=> "2023-07-14",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>881,
              "day"=> "2023-07-14",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>882,
              "day"=> "2023-07-14",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>883,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>884,
              "day"=> "2023-07-15",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>885,
              "day"=> "2023-07-15",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>886,
              "day"=> "2023-07-15",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>887,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>888,
              "day"=> "2023-07-16",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>889,
              "day"=> "2023-07-16",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>890,
              "day"=> "2023-07-16",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>891,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>892,
              "day"=> "2023-07-17",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>893,
              "day"=> "2023-07-17",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>894,
              "day"=> "2023-07-17",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>895,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>896,
              "day"=> "2023-07-18",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>897,
              "day"=> "2023-07-18",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>898,
              "day"=> "2023-07-18",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>899,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>900,
              "day"=> "2023-07-19",
              "start"=> "08:00:00",
              "end"=> "10:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>901,
              "day"=> "2023-07-19",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D", "字幕"]
            ], [
              "id"=>902,
              "day"=> "2023-07-19",
              "start"=> "16:00:00",
              "end"=> "18:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D", "吹替"]
            ], [
              "id"=>903,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 4,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D", "字幕"]
            ]]
          ], [
            "id"=>5,
            "title"=>"クリード 過去の逆襲",
            "thumbnail"=> "images\/creed\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : マイケル・B・ジョーダン\n出演: マイケル・B・ジョーダン\/テッサ・トンプソン\/ジョナサン・メジャース\/ウッド・ハリス\/フロリアン・ムンテアヌ\/ミラ・ケント\/フィリシア・ラシャド ほか\n公式サイト : https:\/\/wwws.warnerbros.co.jp\/creed\/",
            "introduction"=> "ロッキーの魂を引き継いだチャンプ、クリードの前にムショ上がりの幼馴染デイミアンが現れる。実は、クリードには家族同然の仲間を宿敵に変える誰にも言えない過ちがあったのだ。復讐を誓う最強の敵から、未来を勝ち取ることが出来るのかー。",
            "time"=> 122,
            "types"=> ["字幕", "IMAX", "4DX", "2D"],
            "images"=> ["images\/creed\/1.jpg", "images\/creed\/2.jpg", "images\/creed\/3.jpg"],
            "manages"=> [[
              "id"=>906,
              "day"=> "2023-07-14",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>907,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>908,
              "day"=> "2023-07-15",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>909,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>910,
              "day"=> "2023-07-16",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>911,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>912,
              "day"=> "2023-07-17",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>913,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>914,
              "day"=> "2023-07-18",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>915,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>916,
              "day"=> "2023-07-19",
              "start"=> "12:00:00",
              "end"=> "14:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>917,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:20:00",
              "screening_time"=> 140,
              "theater_id"=> 5,
              "all_seats"=> 120,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>6,
            "title"=>"岸辺露伴 ルーヴルへ行く",
            "thumbnail"=> "images\/rohan_lourve\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : 渡辺一貴\n出演 :  高橋一生\/飯豊まりえ\/長尾謙杜\/安藤政信\/美波\/木村文乃 ほか\n公式サイト : https:\/\/kishiberohan-movie.asmik-ace.co.jp\/",
            "introduction"=> "特殊能力を持つ、漫画家・岸辺露伴は、青年時代に淡い思いを抱いた女性からこの世で「最も黒い絵」の噂を聞く。それは最も黒く、そしてこの世で最も邪悪な絵だった。時は経ち、新作執筆の過程で、その絵がルーヴル美術館に所蔵されていることを知った露伴は取材とかつての微かな慕情のためにフランスを訪れる。しかし、不思議なことに美術館職員すら「黒い絵」の存在を知らず、データベースでヒットした保管場所は、今はもう使われていないはずの地下倉庫「Z-13倉庫」だった。",
            "time"=> 118,
            "types"=> ["2D"],
            "images"=> ["images\/rohan_lourve\/1.jpg", "images\/rohan_lourve\/2.jpg", "images\/rohan_lourve\/3.jpg", "images\/rohan_lourve\/4.jpg", "images\/rohan_lourve\/5.jpg"],
            "manages"=> [[
              "id"=>920,
              "day"=> "2023-07-14",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>921,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>922,
              "day"=> "2023-07-15",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>923,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>924,
              "day"=> "2023-07-16",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>925,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>926,
              "day"=> "2023-07-17",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>927,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>928,
              "day"=> "2023-07-18",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>929,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>930,
              "day"=> "2023-07-19",
              "start"=> "12:00:00",
              "end"=> "14:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>931,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:10:00",
              "screening_time"=> 130,
              "theater_id"=> 6,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ]]
          ], [
            "id"=>7,
            "title"=>"リトル・マーメイド",
            "thumbnail"=> "images\/little_mermaid\/0.jpg",
            "start"=> "2023-06-30",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : ロブ・マーシャル\n出演 :  【声の出演】ハリー・ベイリー\/ジョナ・ハウアー＝キング\/メリッサ・マッカーシー\/ハビエル・バルデム\/ジェイコブ・トレンブレイ\/オークワフィナ\/ダヴィード・ディグス ほか 【日本語吹き替え】豊原江理佳\/木村昴\/海宝直人\/野地祐翔\/浦嶋りんこ\/高乃麗\/大塚明夫\/王林\/ますみ(天才ピアニスト) ほか\n公式サイト : https:\/\/www.disney.co.jp\/movie\/littlemermaid",
            "introduction"=> "1991年に公開された名作アニメーションの実写映画化。海の王国に暮らすマーメイドの王女(アリエル)が主人公のミュージカル・ファンタジー。",
            "time"=> 135,
            "types"=> ["字幕", "IMAX", "吹替", "4DX", "2D", "Dolby ATMOS"],
            "images"=> ["images\/little_mermaid\/1.jpg", "images\/little_mermaid\/2.jpg", "images\/little_mermaid\/3.jpg", "images\/little_mermaid\/4.jpg"],
            "manages"=> [[
              "id"=>936,
              "day"=> "2023-07-14",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>937,
              "day"=> "2023-07-14",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>938,
              "day"=> "2023-07-14",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>939,
              "day"=> "2023-07-14",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>940,
              "day"=> "2023-07-15",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>941,
              "day"=> "2023-07-15",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>942,
              "day"=> "2023-07-15",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>943,
              "day"=> "2023-07-15",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>944,
              "day"=> "2023-07-16",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>945,
              "day"=> "2023-07-16",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>946,
              "day"=> "2023-07-16",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>947,
              "day"=> "2023-07-16",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>948,
              "day"=> "2023-07-17",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>949,
              "day"=> "2023-07-17",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>950,
              "day"=> "2023-07-17",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>951,
              "day"=> "2023-07-17",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>952,
              "day"=> "2023-07-18",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>953,
              "day"=> "2023-07-18",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>954,
              "day"=> "2023-07-18",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>955,
              "day"=> "2023-07-18",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>956,
              "day"=> "2023-07-19",
              "start"=> "08:00:00",
              "end"=> "10:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D"]
            ], [
              "id"=>957,
              "day"=> "2023-07-19",
              "start"=> "12:00:00",
              "end"=> "14:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D", "字幕"]
            ], [
              "id"=>958,
              "day"=> "2023-07-19",
              "start"=> "16:00:00",
              "end"=> "18:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D", "吹替"]
            ], [
              "id"=>959,
              "day"=> "2023-07-19",
              "start"=> "20:00:00",
              "end"=> "22:30:00",
              "screening_time"=> 150,
              "theater_id"=> 7,
              "all_seats"=> 70,
              "reserved_seats"=> 0,
              "types"=> ["2D", "字幕"]
            ]]
          ]];

        if ($res_movies) {
            return $res_movies;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // 映画詳細の取得
    private function getById($id): array
    {
        // 映画情報検索
        $res_movies = [
            "id"=>8,
            "title"=>"RRR",
            "thumbnail"=> "images\/rrr\/0.jpg",
            "start"=> "2023-06-02",
            "on_air"=> 1,
            "age_restrictions"=> "G",
            "data"=> "監督 : S.S.ラージャマウリ\r\n出演 : NTR JR.\/ラーム・チャラン\/アーリヤー・バット\/アジャイ・デーヴガン\/レイ・スティーヴンソン\/アリソン・ドゥーディ ほか\r\n公式サイト : https:\/\/rrr-movie.jp\/",
            "introduction"=> "舞台は1920年、英国植民地時代のインド英国軍にさらわれた幼い少女を救うため、立ち上がるビーム(NTR Jr.)。\r\n大義のため英国政府の警察となるラーマ(ラーム・チャラン)。\r\n熱い思いを胸に秘めた男たちが“運命”に導かれて出会い、唯一無二の親友となる。\r\nしかし、ある事件をきっかけに、それぞれの“宿命”に切り裂かれる2人はやがて究極の選択を迫られることに。\r\n彼らが選ぶのは、友情か？使命か？",
            "time"=> 179,
            "types"=> ["字幕", "IMAX", "吹替", "2D", "Dolby ATMOS"],
            "images"=> ["images\/rrr\/1.jpg", "images\/rrr\/2.jpg", "images\/rrr\/3.jpg", "images\/rrr\/4.jpg", "images\/rrr\/5.jpg"],
            "manages"=> [
                [ "id"=>962, "day"=> "2023-07-14", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>963, "day"=> "2023-07-14", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>964, "day"=> "2023-07-15", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ], 
                [ "id"=>965, "day"=> "2023-07-15", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>966, "day"=> "2023-07-16", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>967, "day"=> "2023-07-16", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ], 
                [ "id"=>968, "day"=> "2023-07-17", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>969, "day"=> "2023-07-17", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>970, "day"=> "2023-07-18", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>971, "day"=> "2023-07-18", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>972, "day"=> "2023-07-19", "start"=> "12:00:00", "end"=> "15:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ],
                [ "id"=>973, "day"=> "2023-07-19", "start"=> "20:00:00", "end"=> "23:10:00", "screening_time"=> 190, "theater_id"=> 8, "all_seats"=> 70, "reserved_seats"=> 0, "types"=> ["2D"] ]
            ]
        ];

        if ($res_movies) {
            return $res_movies;
        } else {
            $this->code = 500;
            return ["error" => ["type" => "fatal_error"]];
        }
    }

    // スケジュール検索
    private function selectSchedulesById($id): array
    {
        $sourses = parent::connectDb()->prepare(Sql::SelectSchedulesById);
        $sourses->bindValue("=>time1", Env::AD_TIME, PDO::PARAM_INT);
        $sourses->bindValue("=>time2", Env::AD_TIME, PDO::PARAM_INT);
        $sourses->bindValue("=>id", $id, PDO::PARAM_INT);
        $sourses->execute();
        return $sourses->fetchAll(PDO::FETCH_ASSOC);
    }
}