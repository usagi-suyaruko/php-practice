<!DOCTYPE html>
<html lang="jn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>始めてのPHP</title>
</head>

<body>
    <h1>PHPの世界にようこそ!</h1>
    <p>PHPを使って、動的なコンテンツを表示してみましょう。</p>
    <p>1 + 1 は、<? echo 1 + 1; ?>です。</p>
    <p>現在の時刻は<?php echo date("Y年m月d日h時i分s秒"); ?>です。</p>
</body>

</html>
<?php
echo "<h1>Hello form Docker!</h1>";
echo "<p>phpが正常に動作しています</p>";
echo "<p>PHPバージョン: " . phpversion() . "</p>";
echo "<p>現在の時刻</p>" . date("Y-m-d H:i:s") . "</P>";
//これは一行コメントです。
echo "Hello, World";//この行は、画面ニ文字を出力します。
/*
これは行間コメントデス。ホントウデス
関数の説明などを詳しく書く時に使います。
＠param string 挨拶文
 */
echo "Hello, PHP!";
function great($name)
{
    return "こんにちは、" . $name . "さん！";
}
/*
//一時的にこのコードを無効にしたい
echo "この部分は実行されません"*/
echo "最初の文章";
echo "次の文章";//セミコロン「;」を忘れるとエラーになる。
$today = "Monday";
echo $today;
//変数 $name に、文字列 "山田太郎" を代入する
$name = "山田太郎";
// 変数 $age に、数値30を代入する
$age = 30;
// 変数の中身をechoで表示する
echo "$name くん $age ちゃい ";
$age = 31;
echo "$age";
echo "きっっつ！！";
$fruits = ['りんご','ばなな','みかん'];
//Cもそうだけど左から0、1，2の番号がつくね。
echo $fruits[0];//"りんご" が出力される
echo $fruits[1];//"ばなな" が出力される
echo $fruits[2];//"みかん" が出力される
//配列に要素を追加
$fruits[] = 'ぶどう';//末尾に追加される
echo "$fruits[3]";
//連想配列の作成　（キー =>値 の形式）
$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72,
];
//キーを使って値にアクセス
echo $scores['国語'];//"80"が表示される
echo $scores['数学'];//"95"が表示される
echo $scores['英語'];//"72"が表示される
//あたらしいキーと値の追加
$scores['理科'] = 88;
echo $scores['理科'];//"88"が表示される
//ニ次配列の作成（商品リスト）
$products = [
    ['name' => 'ノートPC', 'price' => 80000],
    ['name' => 'マウス', 'price' => 3000],
    ['name' => 'キーボード', 'price' => 5000],
];
//最初のsw用品の名前を取得
echo $products[0]['name'];//ノートPCが表示される
//ニ番目の商品の価格を取得
echo $products[0]['price'];//80000が表示される。
//よーするにproductsの箱の0番目に有るこの名前で登録されている物とってこーい
$last_name = '長屋';
$first_name = '大樹';
$age = 28;
//ピリオドで連結
$full_name = $last_name . $first_name;
echo $full_name;
echo "$age 歳です";//長屋大樹29歳が出力される
echo '私の名前は、' . $full_name, 'です。';
$name = '佐藤多英';
$age = 27;
//ダブルコーテーション内で変数を展開
echo "私の名前は、$name です。年齢は $age 歳です。";
$a = 10;
$b = 3;
echo $a + $b; // 13（加算）
echo $a - $b; // 7（減算）
echo $a * $b; // 30（乗算）
echo $a / $b; // 3.3333...（除算）
echo $a % $b; // 1（剰余：10 ÷ 3 = 3 余り 1）
echo $a ** $b; // 1000（べき乗：10の3乗）

//実務での使用例だそうです。
$price = 151;                 //商品単価
$quantity = 3;                 //購入数
$tax_rate = 0.10;              //消費税率
//一言はっきりと管理画面かなんかの入力で変更される変数なのになんでこれで完結しているのかが不思議ですね。


//小計を計算
$subtotal = $price * $quantity;
echo '小計: ' . $subtotal . '円';//小計: 4500円
//税込み価格を計算
$total = $subtotal * (1 + $tax_rate);
echo "税込合計: $total 円"; //税込合計: 4950円
/*正直3つ気になることが在って
・なぜ入力画面の変数がないのか(Cでいうscanf_s)気になるが、この辺りはPOSTで送られてきたものに対してたいおうするのかな。
・直前で""と''の対応がーと言いながら、矛盾する記述。コピペなのかどうか判断したいのかな。
・一番謎なのはtotal = $subtotal * (1 + $tax_rate);の計算。subtotal+subtotal*tax_rateではダメなのか。あと、小数点どうする気なのか。roundみたいなものがないのかどうか気になりますね。
まあこの辺りはすでにあるんでしょうけれども。ゴミデータ出来ないといいなあ。小数点のせいで〇〇はバツバツより小さいので決済ができませんとかｗだとしたらゲラゲラ笑うけどｗｗｗ
*/

//if文きたー！！whileとdo while i for switchはよ。おりゃー(╯°□°）╯︵ ┻━┻
$number = 7;
if ($number % 2 == 0){//ようは2で割って余るかどうかだな。それでTrueとfalse出すと。（これ毎回思うけど読み方ふぉるせなのよね。ホワイルといい。納得いかぬ。まあ、固執をこしつって読んでいるやつみたいなもんか）
    echo "$number は偶数です";
}else{
    echo "$number は奇数です。";//小w数w点wどwうwすwんwねwんwwwww
    }

?>