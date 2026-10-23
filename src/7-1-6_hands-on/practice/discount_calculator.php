<style>
/*    .price {
        display: block;
        text-align: right;
    }*/
    .price {
    display: flex;                      /*MBPCをflexに変え、要素をflexとして扱う。*/
    justify-content: space-between;     /*：より左が、整列させる。右側が、両端開けって意味になるかな。*/
    width: 100%;                        /*単に画面の範囲選択。pxじゃないのは環境依存にするため*/
}
</style>

<?php
$product_name = [
    ['name' => "一覧表<br>イヤホン<br>" , 'price' => "5000<br>"],
    ['name' => 'イヤホン' , 'price' => 5000]
];
$original_price = 5000;//元の価格
$price_down = 0.2;
$input = true;
if ($input === false){
    $sub_total = $original_price * (1 - $price_down);

    echo '元の価格: <div class="price">' . number_format($original_price) . '円</div>';
            /*number_format($original_price) . "円</span><br>";/*        <span style=
            "display:inline-block;width:200px;text-align:right;"
            >' .*/
    echo '値引き額( <div class="price">' . $price_down * 100 . "%): " . number_format($original_price * $price_down) . "円</div>";
    echo '値引き後:  <div class="price">' . number_format($sub_total) . '円</div>';
}
?>
<?php
$original_price = $product_name[1]['price'];//元の価格
//echo $original_price;多分この辺りフォーいーちとかがいいんだろうな入れ子に対して入れ子行うという意味で。あーでもバグでそうな気もする...。
$price_down = 0.2;
$input = true;
$sub_total = $original_price - ($original_price * $price_down);
if ($input === true){
?>
<div class="price">
    <span>元の価格:</span>
    <span><?php echo number_format($original_price) . "円" ?></span>
</div>

<div class="price">
    <span>値引き額(<?php echo $price_down * 100 ?>%):</span>
    <span><?php echo number_format($original_price * $price_down) . "円" ?></span>
</div>

<div class="price">
    <span>値引き後:</span>
    <span><?php echo number_format($sub_total)?>円</span>
</div>

<?php
}
$input_number = "a";
while(is_string($input_number)){ //問題は出ているみたいだけど問題なく動作しているのよね.あとが怖い
    echo "文字列が入力されました。やりなおしてください";
    break; //仮入力だからあとでこのbreakなおす
}
    if (is_float($input_number)) {
        $input_number2 = (int) (($input_number + 0.5)) % 2 + 1;
        switch ($input_number2) {
            case 1:
                $input_number2_jge = "偶数";
                break;
            case 2:
                $input_number2_jge = "奇数";
                break;
            default:
                $input_number2_jge = "warning想定外の自体、小数点の判断時に、文字列を排除したうえで四捨五入後に%2+1が1と2以外を表示しています。通常このエラーは表示されません。";
                break;
        }
        ;
        $input_number3 = (int) ($input_number) % 2 + 1;
        switch ($input_number3) {
            case 1:
                $input_number3_jge = "偶数";
                break;
            case 2:
                $input_number3_jge = "奇数";
                break;
            default:
                $input_number3_jge = "warning想定外の自体、小数点の判断時に、文字列を排除したうえで%2+1が1と2以外を表示しています。通常このエラーは表示されません。";
                break;
        }
        ;
        echo "小数点が入力されています。四捨五入された場合、[<b>{$input_number2_jge}</b>]、<br>しない出切り捨てた場合は[<b>{$input_number3_jge}</b>]になります。<br>どちらを選択されますか？";
} else {
    $input_number4 = (int) ($input_number) % 2 + 1;
    switch ($input_number) {
        case 1:
            $input_number_jge4 = "偶数";
            break;
        case 2:
            $input_number_jge4 = "奇数";
            break;
        default:
            $input_number_jge4 = "warning想定外の自体、文字列と小数点を排除したうえで+1が1と2以外を表示しています。通常このエラーは表示されません。";
            break;
    }
    ;
    if (is_string($input_number)) {
        echo "<br>";
    } else {
        echo "入力された数値は[<b>{$input_number_jge4}</b>]です<br>";
    }
}

//没。switchのほうが早い
/*if (is_string($input_number) === true){
    echo "指定されたものは文字列として認識されています。｛$input_number}";//whileがひつようっすな
}
if($input_number % 2 === 1)
{
echo "指定された番号は[奇数]です";
} else
{
if($input_number % 2 === 0)
    {
        echo "指定された番号は[偶数]です";
    }else
    {
    if(is_float($input_number) === true)
        {
            if((int) (($input_number + 0.5) % 2) === 0){
                $input_number2 = "偶数です";
                }else
                {
                $input_number2 = "奇数です";
                };
            if((int) ($input_number) % 2 === 0){
                $input_number3 = "偶数です";
            }else{
                $input_number3 = "奇数です";
            }
            echo "少数を含んでいます。少数を消した場合は四捨五入したら{$input_number2}、そうじゃない場合は{$input_number3。}";
        }
    }
}
    ctrl+shift Reload Window 変換候補が出なくなったら
*/
$age = 25;
$member = true;
$student = false;

if($age >= 18 && $member){
    echo "割引が適応されます。";
}elseif($age >= 65 || $student){
    echo "シニア・学生割引が適用されます。";
}

$bonus = [
    ['name' => 'bonus_stage' , 'message' => 'ボーナスステージクリアボーナス: ' , 'point_score' => 50]
];
$skill = [
    ['name' => 'hip_bat' , 'damage' => 30]
];
echo "<br>";
$hit_point = 100;
$hit_point += $bonus[0]['point_score'];
echo $bonus[0]['message'] . $bonus[0]['point_score'] . "点  現在HP: " .  $hit_point . "点<br>";//第三世代ポケモンみたいにセリフ毎にとうろくしてつけるのも有り。
$hit_point -= $skill[0]['damage'];
echo 'クソったれは' . $skill[0]['damage'] . "のダメージを受けた<br>残りHP" . $hit_point . "点<br>";
$hit_point *= 2;
echo 'クソったれはチートを使った。残りHP:' . $hit_point . "点。<br><br>🏆️称号: ザコザコお兄さん❤の称号を手に入れた";
$status = 'ザコザコお兄さん❤<br><br>';
echo "<br><br>最終HP $hit_point <br>称号: $status";

?>
<?php
//関数の定義
function tae()
{
    echo "多英！大好きです！！！結婚して！！<br>";
}

//関数の呼び起こし
tae();
tae();
//for(;;){tae();}
?>
<?php
function fucking($name){
    echo "<br><br>くたばれ、" . $name . "さん！";
}

fucking("魂魄妖夢");
function add(int $a, int $b):int//戻り値はintでなくてはいけない、と宣言
{
    $sum = $a + $b;
    return $sum; //sumは単に自分で決めた引数名
}
// 関数の戻り値を、変数 $result に代入する
$result = add(3, 5);
echo $result;
echo add(10, 20);
function testReturn()
{
    return "ここで処理は終わり" ."<br>";
    echo "この行は実行されません";
}
echo "<br>" . 3 ."<br>";
echo testReturn();
echo "この文章の上が「ここで処理は終わり」という文だけなら成功しています";
echo add(2, 2);//4(これは動的言語のため)
//echo add(2, "ringo");
function add_and_format(int $a, int $b): int//整数で返す
{
    $sum = $a + $b;
    return /*"合計は: "*/$sum;
}
echo add_and_format(1, 5);
function sayHello(string $name):void{
    echo "こんにちは" . $name . "さん！！";
    //returnを書かない
}
sayHello("鈴木");
$age = 15;
//もし、変数%ageが、18以上ならば
if ($age >= 18){
    echo "貴方は成人です。";
}else{
    echo "貴方は未成年です。";
}
//ifなんてCでもExcelでもさんざん使い倒したんだけど。そこまで理解深める必要があるのかは謎ではある
$score = 85;
$check_score = match (true) {//match の条件を指定して、戻り値がtrueのものの＝＞を探している
    90 <= $score && $score < 100 => '評価はAです。',
    80 <= $score && $score < 90 => '評価はBです。',
    70 <= $score && $score < 80 => '評価はCです。',
    default => '評価対象外',
};
echo $check_score;
$signal = "red";
switch(true){
    case $signal === "red":
        echo '止まれ';
            break;
    case $signal === "blue":
        echo '進め';
            break;
    case $signal === "yellow":
        echo '注意';
        break;
    default:
        echo '何なんだお前は..';
        break;
}
//動的言語はCみたいに数値だけ限定ということがないらしい
echo "<br>";
for ($i = 1; $i <=10 ; $i++){
    //$iは別になんでもいい。単にfor i構文って言われているから見本として使われただけだと思う。宣言で初期値入れて、条件入れて処理が終わる毎に何をするかって決めている

//for(変数初期化;条件;繰り返される毎回の要素)
//{
//echo"";1回繰り返される毎に繰り返される処理。
//}
    echo $i ."回目のビンタ<br>";
}
for ($i = 10; $i > 0 ; $i--){
    echo $i . "...<br>";
}
echo 0 .  "<br>";
$fruits = ["りんご","みかん","ばなな"];
foreach ($fruits as $fruits){
    echo $fruits . "はおいしい!<br>";
}
$score = [
    "国語" => 80,
    "数学" => 95,
    "英語" => 72,
];
//キーを$subjectに、値を$score ニ代入してループ
foreach ($score as $subject => $score){
    echo $subject . "点数は: " . $score . "点です。<br>";//ゲームとかのデータ作ったら楽しそうだよね。演出も必要だからその処理とかも大変なんだけど、初代ポケモンとかだとその辺りデータ省略のためにSEで演出したよね。映像畑にいるからこそ気づくことだけど
}
for ($finger = 1; $finger <= 11; $finger++){
    if($finger === 8){
        continue;//次のループへ
    }else{
        echo "不思議な指が" . $finger . "本あります！<br>";
    }
}
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;//次のループへ
    } else {
        echo $i . "<br>";
    }
}
//追加
$fruits = ['りんご', 'バナナ'];
$fruits[] ='みかん';
$fruits[] = 'ぶどう';
print_r($fruits);//「_r」はarrayの事。
echo "<br>";
print $score;//brはできない
$fruits = ['りんご', 'バナナ', 'みかん'];
$fruits[1] = 'ぶどう';
print_r($fruits);
// 出力: Array ( [0] => りんご [1] => ぶどう [2] => みかん )
// ぶどうだけ取り出す
echo $fruits[1]; // 出力: ぶどう
//サジェストが出なくなったら、ctrl+shift+Rでリロードする。
//Reload Windowをぶち込むだけでもいい
//先輩に右のバーにいたaiの野郎が文章打ってくれる機能を教えてもらえました。
//悪いことを覚えました☆🐇
// 補完やコメント変換を無効化した場合の戻し方
// .vscode/settings.json で以下を true / "on" に戻すと再開できる
// "editor.quickSuggestions": { "comments": true, "strings": true, "other": true }
// "editor.tabCompletion": "on"
// "editor.inlineSuggest.enabled": true
// "editor.acceptSuggestionOnEnter": "on"
// それでも戻らないときは、Ctrl+Shift+P → Developer: Reload Window
unset($fruits[1]);
echo "<br>";
print_r($fruits);//Array ( [0] => りんご [2] => みかん )
//インデックスを詰め直す
$fruits = array_values($fruits);
echo "<br>";
print_r($fruits);//Array ( [0] => りんご [1] => みかん )
$user = ['name' => '山田', 'age' => 30];
print_r($user);
var_dump($user);//array(2) { ["name"]=> string(6) "山田" ["age"]=> int(30) }
//int は整数10進数からなるもので()内に書かれているが、stringは文字列のbit数でカウントしている。
//文字で数える場合mb_strlen()で文字数を数えよう。この辺りに関して、例えば初代ポケモンのメッセージ欄の文字数制限なんかを処理するときとかに必要になるんだろう。
// まあ。[]内に文字列の指定を来ておくくらいでもいい気がするし、多分ソッチのほうが昔は行われていたんだろうけど。実際処理自体は同じだから、多分関数として処理されているかどうかの問題なのかな。あとは使用言語によって変化がありそう。
echo "<br>要素の数は" . count($fruits) . "<br>";//要素数は2
if (in_array('バナナ', $fruits)) {
    echo "<br>バナナあります!<br>";
}
//in_arrayは、配列の中に指定した値があるかどうかを調べる関数です。trueかfalseで返す。それをifで使って判断したって感じだね
//in_array() - 値が存在するか確認

array_push($fruits, 'ぶどう', 'みかん');
//要素の追加です。場所は末尾。[3]が最大なら[4]まで
print_r($fruits);
$fruits1 = ['りんご', 'バナナ'];
$fruits2 = ['みかん', 'ぶどう'];
$all_fruits = array_merge($fruits1, $fruits2);//マージは結合。ブレンダーでもやったわねarrayはなんていえばいいんだろ。配列かな。
print_r($all_fruits);
if (array_key_exists('email', $user)) {
    echo "<br>メールアドレスがあります。<br>";
}else{
    echo "<br>メールアドレスはありません。<br>";
}
//array_key_exists() - 配列のキーが存在するか確認
//出力:メールアドレスが有りません


/*
まとめ

[配列関数]に関して。

・count() - 要素数を数える。
・in_array() - 値が存在するか確認。
・array_push() - 末尾に要素を追加。
・array_merge() - 配列を結合。
・array_key_exists() - 配列のキーが存在するか確認。
・array_values() - インデックスを詰め直す。

・print_r() - 見やすく表示
・var_dump() - 型情報も表示
・mb_strlen() - 文字数を数える(日本語などマルチバイト文字に対応)エクセルで言うところのLEN関数みたいなもん。bit側は一体何に使うのか。容量の確認？いや、数字にはそのまま使えるのか

*/

//時速の計算
echo "<br>";
$distance = 12; // 距離（km）
$speed = 25; // 時速の計算
echo "時速: " . $speed . " km/h";
//信号待ちなどの予備時間を足します。
$prep_time = 10; // 予備時間（分）
//時間の算出
$time = $distance / $speed + $prep_time / 60; // 時間（時間単位）
//時間単位の計算roundup(時：分)
if($time / 1 <1){
    $time_hour = 0;}else{
        $time_hour = (int)($time / 1);
}
$time_minute = (int)(($time - $time_hour) *60);
//時間の表示
echo "<br>所要時間: " . $time_hour . " 時間 " . $time_minute . " 分<br>";
//Cはscanf_s("%d", &変数名)とprintf、int宣言と、double宣言。後はint型に固定するやり方。に変更するだけで大枠は同じ。強いて言えばPHPがルーズな感じ

?>