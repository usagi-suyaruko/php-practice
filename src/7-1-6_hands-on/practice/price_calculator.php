<?php
$product_name = "ノートパソコン";
$price = 80000;//金額
$quantity = 2;//数量
$tax_rate = 0.1;//税額
$sub_total = $price * $quantity;//小計
$tax_amount = $sub_total * $tax_rate;//税額
$total = $sub_total + $tax_amount;//合計
echo "商品名: " . $product_name;?><br><?php
echo "単価: " . number_format($price) . "円";?><br><?php
echo "数量: " . $quantity . "個"; ?><br><?php
echo "小計: " . $sub_total . "円"; ?><br><?php
echo "消費税: " . number_format($tax_amount) . "円"; ?><br><?php
echo "合計金額: " . number_format($total) . "円";?><br><?php
/*<?php
const product = [
    ['name' => 'ノートパソコン' , 'price' => 80000]//品番絶対いると思うんだがどうなんだろ
];

//上のこれを「配列」と呼ぶ
//constには$が使えないらしい。


echo "商品名: " . product[0]['name']?><br>
<?php /* . "そうなのか"*//* echo "単価: " . number_format(product[0]['price']) . "円"; ?><br>
<?php
$quantity = 2;//数量
echo "数量: " . $quantity . "個";//配列の書き方には""で｛｝をするやり方と、""からだして、「 . 」を挟んで$product[][]といったように書くやり方が有る。constでやると確定で「 . 」でやることになるようだ。""で使えるのは変数までってことかな。エクセルで言うところの「 . 」は「＆」判定ってことらしい。
$sub_total = product[0]['price'] * $quantity;
?><br>
<?php
echo "小計: " . number_format($sub_total) . "円";
$tax_rate = 0.1;//税率
$tax_amount = (int)($sub_total * $tax_rate);
?><br>
<?php echo "消費税(" . $tax_rate * 100 . "%): " . number_format($tax_amount) . "円"; ?><br>
<b>合計金額: <?php
$total = $sub_total + $tax_amount;
echo number_format($total);
?>円</b>//とても残念なお知らせです。こんなに頑張ったのに、指定の名前があるとか言われました。画像から想像して欠いた私が馬鹿に見えてきますわね❤*/

?>