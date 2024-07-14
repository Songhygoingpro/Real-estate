<?php
// Assume this array maps option values to their corresponding HTML
$options = array(
    '北海道' => '<option value="">市区郡</option>
<option value="札幌市中央区">札幌市中央区</option>
<option value="札幌市北区">札幌市北区</option>
<option value="札幌市東区">札幌市東区</option>
<option value="札幌市白石区">札幌市白石区</option>
<option value="札幌市豊平区">札幌市豊平区</option>
<option value="札幌市南区">札幌市南区</option>
<option value="札幌市西区">札幌市西区</option>
<option value="札幌市厚別区">札幌市厚別区</option>
<option value="札幌市手稲区">札幌市手稲区</option>
<option value="札幌市清田区">札幌市清田区</option>
<option value="函館市">函館市</option>
<option value="小樽市">小樽市</option>
<option value="帯広市">帯広市</option>
<option value="北見市">北見市</option>
<option value="夕張市">夕張市</option>
<option value="岩見沢市">岩見沢市</option>
<option value="網走市">網走市</option>
<option value="留萌市">留萌市</option>
<option value="苫小牧市">苫小牧市</option>
<option value="稚内市">稚内市</option>
<option value="美唄市">美唄市</option>
<option value="芦別市">芦別市</option>
<option value="江別市">江別市</option>
<option value="赤平市">赤平市</option>
<option value="紋別市">紋別市</option>
<option value="士別市">士別市</option>
<option value="名寄市">名寄市</option>
<option value="三笠市">三笠市</option>
<option value="根室市">根室市</option>
<option value="千歳市">千歳市</option>
<option value="滝川市">滝川市</option>
<option value="砂川市">砂川市</option>
<option value="歌志内市">歌志内市</option>
<option value="深川市">深川市</option>
<option value="富良野市">富良野市</option>
<option value="登別市">登別市</option>
<option value="恵庭市">恵庭市</option>
<option value="伊達市">伊達市</option>
<option value="北広島市">北広島市</option>
<option value="石狩市">石狩市</option>
<option value="北斗市">北斗市</option>
<option value="石狩郡当別町">石狩郡当別町</option>
<option value="石狩郡新篠津村">石狩郡新篠津村</option>
<option value="松前郡松前町">松前郡松前町</option>
<option value="上磯郡知内町">上磯郡知内町</option>
<option value="上磯郡木古内町">上磯郡木古内町</option>
<option value="亀田郡七飯町">亀田郡七飯町</option>
<option value="茅部郡鹿部町">茅部郡鹿部町</option>
<option value="茅部郡森町">茅部郡森町</option>
<option value="二海郡八雲町">二海郡八雲町</option>
<option value="山越郡長万部町">山越郡長万部町</option>
<option value="檜山郡江差町">檜山郡江差町</option>
<option value="檜山郡上ノ国町">檜山郡上ノ国町</option>
<option value="檜山郡厚沢部町">檜山郡厚沢部町</option>
<option value="爾志郡乙部町">爾志郡乙部町</option>
<option value="奥尻郡奥尻町">奥尻郡奥尻町</option>
<option value="瀬棚郡今金町">瀬棚郡今金町</option>
<option value="久遠郡せたな町">久遠郡せたな町</option>
<option value="島牧郡島牧村">島牧郡島牧村</option>
<option value="寿都郡寿都町">寿都郡寿都町</option>
<option value="寿都郡黒松内町">寿都郡黒松内町</option>
<option value="磯谷郡蘭越町">磯谷郡蘭越町</option>
<option value="虻田郡ニセコ町">虻田郡ニセコ町</option>
<option value="虻田郡真狩村">虻田郡真狩村</option>
<option value="虻田郡留寿都村">虻田郡留寿都村</option>
<option value="虻田郡喜茂別町">虻田郡喜茂別町</option>
<option value="虻田郡京極町">虻田郡京極町</option>
<option value="虻田郡倶知安町">虻田郡倶知安町</option>
<option value="岩内郡共和町">岩内郡共和町</option>
<option value="岩内郡岩内町">岩内郡岩内町</option>
<option value="古宇郡泊村">古宇郡泊村</option>
<option value="古宇郡神恵内村">古宇郡神恵内村</option>
<option value="積丹郡積丹町">積丹郡積丹町</option>
<option value="古平郡古平町">古平郡古平町</option>
<option value="余市郡仁木町">余市郡仁木町</option>
<option value="余市郡余市町">余市郡余市町</option>
<option value="余市郡赤井川村">余市郡赤井川村</option>
<option value="空知郡南幌町">空知郡南幌町</option>
<option value="空知郡奈井江町">空知郡奈井江町</option>
<option value="空知郡上砂川町">空知郡上砂川町</option>
<option value="夕張郡由仁町">夕張郡由仁町</option>
<option value="夕張郡長沼町">夕張郡長沼町</option>
<option value="夕張郡栗山町">夕張郡栗山町</option>
<option value="樺戸郡月形町">樺戸郡月形町</option>
<option value="樺戸郡浦臼町">樺戸郡浦臼町</option>
<option value="樺戸郡新十津川町">樺戸郡新十津川町</option>
<option value="雨竜郡妹背牛町">雨竜郡妹背牛町</option>
<option value="雨竜郡秩父別町">雨竜郡秩父別町</option>
<option value="雨竜郡雨竜町">雨竜郡雨竜町</option>
<option value="雨竜郡北竜町">雨竜郡北竜町</option>
<option value="雨竜郡沼田町">雨竜郡沼田町</option>
<option value="上川郡鷹栖町">上川郡鷹栖町</option>
<option value="上川郡東神楽町">上川郡東神楽町</option>
<option value="上川郡当麻町">上川郡当麻町</option>
<option value="上川郡比布町">上川郡比布町</option>
<option value="上川郡愛別町">上川郡愛別町</option>
<option value="上川郡上川町">上川郡上川町</option>
<option value="上川郡東川町">上川郡東川町</option>
<option value="上川郡美瑛町">上川郡美瑛町</option>
<option value="空知郡上富良野町">空知郡上富良野町</option>
<option value="空知郡中富良野町">空知郡中富良野町</option>
<option value="空知郡南富良野町">空知郡南富良野町</option>
<option value="勇払郡占冠村">勇払郡占冠村</option>
<option value="上川郡和寒町">上川郡和寒町</option>
<option value="上川郡剣淵町">上川郡剣淵町</option>
<option value="上川郡下川町">上川郡下川町</option>
<option value="中川郡美深町">中川郡美深町</option>
<option value="中川郡音威子府村">中川郡音威子府村</option>
<option value="中川郡中川町">中川郡中川町</option>
<option value="雨竜郡幌加内町">雨竜郡幌加内町</option>
<option value="増毛郡増毛町">増毛郡増毛町</option>
<option value="留萌郡小平町">留萌郡小平町</option>
<option value="苫前郡苫前町">苫前郡苫前町</option>
<option value="苫前郡羽幌町">苫前郡羽幌町</option>
<option value="苫前郡初山別村">苫前郡初山別村</option>
<option value="天塩郡遠別町">天塩郡遠別町</option>
<option value="宗谷郡猿払村">宗谷郡猿払村</option>
<option value="枝幸郡浜頓別町">枝幸郡浜頓別町</option>
<option value="枝幸郡中頓別町">枝幸郡中頓別町</option>
<option value="枝幸郡枝幸町">枝幸郡枝幸町</option>
<option value="天塩郡豊富町">天塩郡豊富町</option>
<option value="礼文郡礼文町">礼文郡礼文町</option>
<option value="利尻郡利尻町">利尻郡利尻町</option>
<option value="利尻郡利尻富士町">利尻郡利尻富士町</option>
<option value="天塩郡幌延町">天塩郡幌延町</option>
<option value="網走郡美幌町">網走郡美幌町</option>
<option value="網走郡津別町">網走郡津別町</option>
<option value="斜里郡斜里町">斜里郡斜里町</option>
<option value="斜里郡清里町">斜里郡清里町</option>
<option value="斜里郡小清水町">斜里郡小清水町</option>
<option value="常呂郡訓子府町">常呂郡訓子府町</option>
<option value="常呂郡置戸町">常呂郡置戸町</option>
<option value="常呂郡佐呂間町">常呂郡佐呂間町</option>
<option value="紋別郡遠軽町">紋別郡遠軽町</option>
<option value="紋別郡湧別町">紋別郡湧別町</option>
<option value="紋別郡滝上町">紋別郡滝上町</option>
<option value="紋別郡興部町">紋別郡興部町</option>
<option value="紋別郡西興部村">紋別郡西興部村</option>
<option value="紋別郡雄武町">紋別郡雄武町</option>
<option value="網走郡大空町">網走郡大空町</option>
<option value="虻田郡豊浦町">虻田郡豊浦町</option>
<option value="有珠郡壮瞥町">有珠郡壮瞥町</option>
<option value="白老郡白老町">白老郡白老町</option>
<option value="勇払郡厚真町">勇払郡厚真町</option>
<option value="虻田郡洞爺湖町">虻田郡洞爺湖町</option>
<option value="勇払郡安平町">勇払郡安平町</option>
<option value="勇払郡むかわ町">勇払郡むかわ町</option>
<option value="沙流郡日高町">沙流郡日高町</option>
<option value="沙流郡平取町">沙流郡平取町</option>
<option value="新冠郡新冠町">新冠郡新冠町</option>
<option value="浦河郡浦河町">浦河郡浦河町</option>
<option value="様似郡様似町">様似郡様似町</option>
<option value="幌泉郡えりも町">幌泉郡えりも町</option>
<option value="日高郡新ひだか町">日高郡新ひだか町</option>
<option value="河東郡音更町">河東郡音更町</option>
<option value="河東郡士幌町">河東郡士幌町</option>
<option value="河東郡上士幌町">河東郡上士幌町</option>
<option value="河東郡鹿追町">河東郡鹿追町</option>
<option value="上川郡新得町">上川郡新得町</option>
<option value="上川郡清水町">上川郡清水町</option>
<option value="河西郡芽室町">河西郡芽室町</option>
<option value="河西郡中札内村">河西郡中札内村</option>
<option value="河西郡更別村">河西郡更別村</option>
<option value="広尾郡大樹町">広尾郡大樹町</option>
<option value="広尾郡広尾町">広尾郡広尾町</option>
<option value="中川郡幕別町">中川郡幕別町</option>
<option value="中川郡池田町">中川郡池田町</option>
<option value="中川郡豊頃町">中川郡豊頃町</option>
<option value="中川郡本別町">中川郡本別町</option>
<option value="足寄郡足寄町">足寄郡足寄町</option>
<option value="足寄郡陸別町">足寄郡陸別町</option>
<option value="十勝郡浦幌町">十勝郡浦幌町</option>
<option value="釧路郡釧路町">釧路郡釧路町</option>
<option value="厚岸郡厚岸町">厚岸郡厚岸町</option>
<option value="厚岸郡浜中町">厚岸郡浜中町</option>
<option value="川上郡標茶町">川上郡標茶町</option>
<option value="川上郡弟子屈町">川上郡弟子屈町</option>
<option value="阿寒郡鶴居村">阿寒郡鶴居村</option>
<option value="白糠郡白糠町">白糠郡白糠町</option>
<option value="野付郡別海町">野付郡別海町</option>
<option value="標津郡中標津町">標津郡中標津町</option>
<option value="標津郡標津町">標津郡標津町</option>
<option value="目梨郡羅臼町">目梨郡羅臼町</option>

<option value="旭川市">旭川市</option>
<option value="室蘭市">室蘭市</option>
<option value="釧路市">釧路市</option>
<option value="松前郡福島町">松前郡福島町</option>
<option value="天塩郡天塩町">天塩郡天塩町</option>
',
    '青森県' => '
    <option value="">市区郡</option>
<option value="青森市">青森市</option>
<option value="弘前市">弘前市</option>
<option value="八戸市">八戸市</option>
<option value="黒石市">黒石市</option>
<option value="五所川原市">五所川原市</option>
<option value="十和田市">十和田市</option>
<option value="三沢市">三沢市</option>
<option value="むつ市">むつ市</option>
<option value="つがる市">つがる市</option>
<option value="平川市">平川市</option>
<option value="東津軽郡平内町">東津軽郡平内町</option>
<option value="東津軽郡今別町">東津軽郡今別町</option>
<option value="東津軽郡蓬田村">東津軽郡蓬田村</option>
<option value="東津軽郡外ヶ浜町">東津軽郡外ヶ浜町</option>
<option value="西津軽郡鰺ヶ沢町">西津軽郡鰺ヶ沢町</option>
<option value="西津軽郡深浦町">西津軽郡深浦町</option>
<option value="中津軽郡西目屋村">中津軽郡西目屋村</option>
<option value="南津軽郡藤崎町">南津軽郡藤崎町</option>
<option value="南津軽郡大鰐町">南津軽郡大鰐町</option>
<option value="南津軽郡田舎館村">南津軽郡田舎館村</option>
<option value="北津軽郡板柳町">北津軽郡板柳町</option>
<option value="北津軽郡鶴田町">北津軽郡鶴田町</option>
<option value="北津軽郡中泊町">北津軽郡中泊町</option>
<option value="上北郡野辺地町">上北郡野辺地町</option>
<option value="上北郡七戸町">上北郡七戸町</option>
<option value="上北郡六戸町">上北郡六戸町</option>
<option value="上北郡横浜町">上北郡横浜町</option>
<option value="上北郡東北町">上北郡東北町</option>
<option value="上北郡六ヶ所村">上北郡六ヶ所村</option>
<option value="上北郡おいらせ町">上北郡おいらせ町</option>
<option value="下北郡大間町">下北郡大間町</option>
<option value="下北郡東通村">下北郡東通村</option>
<option value="下北郡風間浦村">下北郡風間浦村</option>
<option value="下北郡佐井村">下北郡佐井村</option>
<option value="三戸郡三戸町">三戸郡三戸町</option>
<option value="三戸郡五戸町">三戸郡五戸町</option>
<option value="三戸郡田子町">三戸郡田子町</option>
<option value="三戸郡南部町">三戸郡南部町</option>
<option value="三戸郡階上町">三戸郡階上町</option>
<option value="三戸郡新郷村">三戸郡新郷村</option>
',
    '岩手県' => '<option value="">市区郡</option>
    <option value="北上市">北上市</option>
    <option value="久慈市">久慈市</option>
    <option value="遠野市">遠野市</option>
    <option value="一関市">一関市</option>
    <option value="陸前高田市">陸前高田市</option>
    <option value="釜石市">釜石市</option>
    <option value="二戸市">二戸市</option>
    <option value="八幡平市">八幡平市</option>
    <option value="奥州市">奥州市</option>
    <option value="滝沢市">滝沢市</option>
    <option value="岩手郡雫石町">岩手郡雫石町</option>
    <option value="岩手郡葛巻町">岩手郡葛巻町</option>
    <option value="岩手郡岩手町">岩手郡岩手町</option>
    <option value="紫波郡紫波町">紫波郡紫波町</option>
    <option value="紫波郡矢巾町">紫波郡矢巾町</option>
    <option value="和賀郡西和賀町">和賀郡西和賀町</option>
    <option value="胆沢郡金ケ崎町">胆沢郡金ケ崎町</option>
    <option value="西磐井郡平泉町">西磐井郡平泉町</option>
    <option value="気仙郡住田町">気仙郡住田町</option>
    <option value="上閉伊郡大槌町">上閉伊郡大槌町</option>
    <option value="下閉伊郡山田町">下閉伊郡山田町</option>
    <option value="下閉伊郡岩泉町">下閉伊郡岩泉町</option>
    <option value="下閉伊郡田野畑村">下閉伊郡田野畑村</option>
    <option value="下閉伊郡普代村">下閉伊郡普代村</option>
    <option value="九戸郡軽米町">九戸郡軽米町</option>
    <option value="九戸郡野田村">九戸郡野田村</option>
    <option value="九戸郡九戸村">九戸郡九戸村</option>
    <option value="九戸郡洋野町">九戸郡洋野町</option>
    <option value="二戸郡一戸町">二戸郡一戸町</option>

<option value="盛岡市">盛岡市</option>
<option value="宮古市">宮古市</option>
<option value="大船渡市">大船渡市</option>
<option value="花巻市">花巻市</option>
',
    '宮城県' => '<option value="">市区郡</option>
    <option value="仙台市青葉区">仙台市青葉区</option>
<option value="仙台市宮城野区">仙台市宮城野区</option>
<option value="仙台市若林区">仙台市若林区</option>
<option value="仙台市太白区">仙台市太白区</option>
<option value="仙台市泉区">仙台市泉区</option>
<option value="石巻市">石巻市</option>
<option value="塩竈市">塩竈市</option>
<option value="気仙沼市">気仙沼市</option>
<option value="白石市">白石市</option>
<option value="名取市">名取市</option>
<option value="角田市">角田市</option>
<option value="多賀城市">多賀城市</option>
<option value="岩沼市">岩沼市</option>
<option value="登米市">登米市</option>
<option value="栗原市">栗原市</option>
<option value="東松島市">東松島市</option>
<option value="大崎市">大崎市</option>
<option value="富谷市">富谷市</option>
<option value="刈田郡蔵王町">刈田郡蔵王町</option>
<option value="刈田郡七ヶ宿町">刈田郡七ヶ宿町</option>
<option value="柴田郡大河原町">柴田郡大河原町</option>
<option value="柴田郡村田町">柴田郡村田町</option>
<option value="柴田郡柴田町">柴田郡柴田町</option>
<option value="柴田郡川崎町">柴田郡川崎町</option>
<option value="伊具郡丸森町">伊具郡丸森町</option>
<option value="亘理郡亘理町">亘理郡亘理町</option>
<option value="亘理郡山元町">亘理郡山元町</option>
<option value="宮城郡松島町">宮城郡松島町</option>
<option value="宮城郡七ヶ浜町">宮城郡七ヶ浜町</option>
<option value="宮城郡利府町">宮城郡利府町</option>
<option value="黒川郡大和町">黒川郡大和町</option>
<option value="黒川郡大郷町">黒川郡大郷町</option>
<option value="黒川郡大衡村">黒川郡大衡村</option>
<option value="加美郡色麻町">加美郡色麻町</option>
<option value="加美郡加美町">加美郡加美町</option>
<option value="遠田郡涌谷町">遠田郡涌谷町</option>
<option value="遠田郡美里町">遠田郡美里町</option>
<option value="牡鹿郡女川町">牡鹿郡女川町</option>
<option value="本吉郡南三陸町">本吉郡南三陸町</option>
',
    '秋田県' => '<option value="">市区郡</option>
    <option value="秋田市">秋田市</option>
    <option value="能代市">能代市</option>
    <option value="横手市">横手市</option>
    <option value="大館市">大館市</option>
    <option value="男鹿市">男鹿市</option>
    <option value="湯沢市">湯沢市</option>
    <option value="鹿角市">鹿角市</option>
    <option value="由利本荘市">由利本荘市</option>
    <option value="潟上市">潟上市</option>
    <option value="大仙市">大仙市</option>
    <option value="北秋田市">北秋田市</option>
    <option value="にかほ市">にかほ市</option>
    <option value="仙北市">仙北市</option>
    <option value="鹿角郡小坂町">鹿角郡小坂町</option>
    <option value="北秋田郡上小阿仁村">北秋田郡上小阿仁村</option>
    <option value="山本郡藤里町">山本郡藤里町</option>
    <option value="山本郡三種町">山本郡三種町</option>
    <option value="山本郡八峰町">山本郡八峰町</option>
    <option value="南秋田郡五城目町">南秋田郡五城目町</option>
    <option value="南秋田郡八郎潟町">南秋田郡八郎潟町</option>
    <option value="南秋田郡井川町">南秋田郡井川町</option>
    <option value="南秋田郡大潟村">南秋田郡大潟村</option>
    <option value="仙北郡美郷町">仙北郡美郷町</option>
    <option value="雄勝郡羽後町">雄勝郡羽後町</option>
    <option value="雄勝郡東成瀬村">雄勝郡東成瀬村</option>',
    '山形県' => '<option value="">市区郡</option>
<option value="山形市">山形市</option>
<option value="米沢市">米沢市</option>
<option value="鶴岡市">鶴岡市</option>

<option value="酒田市">酒田市</option>
<option value="新庄市">新庄市</option>
<option value="寒河江市">寒河江市</option>
<option value="上山市">上山市</option>
<option value="村山市">村山市</option>
<option value="長井市">長井市</option>
<option value="天童市">天童市</option>
<option value="東根市">東根市</option>
<option value="尾花沢市">尾花沢市</option>
<option value="南陽市">南陽市</option>
<option value="東村山郡山辺町">東村山郡山辺町</option>
<option value="東村山郡中山町">東村山郡中山町</option>
<option value="西村山郡河北町">西村山郡河北町</option>
<option value="西村山郡西川町">西村山郡西川町</option>
<option value="西村山郡朝日町">西村山郡朝日町</option>
<option value="西村山郡大江町">西村山郡大江町</option>
<option value="北村山郡大石田町">北村山郡大石田町</option>
<option value="最上郡金山町">最上郡金山町</option>
<option value="最上郡最上町">最上郡最上町</option>
<option value="最上郡舟形町">最上郡舟形町</option>
<option value="最上郡真室川町">最上郡真室川町</option>
<option value="最上郡大蔵村">最上郡大蔵村</option>
<option value="最上郡鮭川村">最上郡鮭川村</option>
<option value="最上郡戸沢村">最上郡戸沢村</option>
<option value="東置賜郡高畠町">東置賜郡高畠町</option>
<option value="東置賜郡川西町">東置賜郡川西町</option>
<option value="西置賜郡小国町">西置賜郡小国町</option>
<option value="西置賜郡白鷹町">西置賜郡白鷹町</option>
<option value="西置賜郡飯豊町">西置賜郡飯豊町</option>
<option value="東田川郡三川町">東田川郡三川町</option>
<option value="東田川郡庄内町">東田川郡庄内町</option>
<option value="飽海郡遊佐町">飽海郡遊佐町</option>
',
    '福島県' => '<option value="">市区郡</option>',
    '茨城県' => '<option value="">市区郡</option>',
    '栃木県' => '<option value="">市区郡</option>',
    '群馬県' => '<option value="">市区郡</option>',
    '埼玉県' => '<option value="">市区郡</option>',
    '千葉県' => '<option value="">市区郡</option>',
    '東京都' => '<option value="">市区郡</option>',
    '神奈川県' => '<option value="">市区郡</option>',
    '新潟県' => '<option value="">市区郡</option>',
    '富山県' => '<option value="">市区郡</option>',
    '石川県' => '<option value="">市区郡</option>',
    '福井県' => '<option value="">市区郡</option>',
    '山梨県' => '<option value="">市区郡</option>',
    '長野県' => '<option value="">市区郡</option>',
    '岐阜県' => '<option value="">市区郡</option>',
    '静岡県' => '<option value="">市区郡</option>',
    '愛知県' => '<option value="">市区郡</option>',
    '三重県' => '<option value="">市区郡</option>',
    '滋賀県' => '<option value="">市区郡</option>',
    '京都府' => '<option value="">市区郡</option>',
    '大阪府' => '<option value="">市区郡</option>',
    '兵庫県' => '<option value="">市区郡</option>',
    '奈良県' => '<option value="">市区郡</option>',
    '和歌山県' => '<option value="">市区郡</option>',
    '鳥取県' => '<option value="">市区郡</option>',
    '島根県' => '<option value="">市区郡</option>',
    '岡山県' => '<option value="">市区郡</option>',
    '広島県' => '<option value="">市区郡</option>',
    '山口県' => '<option value="">市区郡</option>',
    '徳島県' => '<option value="">市区郡</option>',
    '香川県' => '<option value="">市区郡</option>',
    '愛媛県' => '<option value="">市区郡</option>',
    '高知県' => '<option value="">市区郡</option>',
    '福岡県' => '<option value="">市区郡</option>',
    '佐賀県' => '<option value="">市区郡</option>',
    '長崎県' => '<option value="">市区郡</option>',
    '熊本県' => '<option value="">市区郡</option>',
    '大分県' => '<option value="">市区郡</option>',
    '宮崎県' => '<option value="">市区郡</option>',
    '鹿児島県' => '<option value="">市区郡</option>',
    '沖縄県' => '<option value="">市区郡</option>'
);

// Fetch selected value from AJAX request
$selectedValue = $_POST['selectedValue'];

// Check if selectedValue exists in options array
if (array_key_exists($selectedValue, $options)) {
    echo $options[$selectedValue];
} else {
    echo '<option value="">都道府県</option>';
}
