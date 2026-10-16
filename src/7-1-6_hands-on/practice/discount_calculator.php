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
$input_number = 2.5;
while(!(is_float($input_number) || is_int($input_number))){
    echo "文字列が入力されました。やりなおしてください";
    break; //仮入力だからあとでこのbreakなおす
};
if (is_float($input_number) === true) {
    $input_number2 = (int)(($input_number + 0.5)) % 2 + 1;
    switch($input_number2){
        case 1:
            $input_number2_jge = "偶数";
            break;
        case 2:
            $input_number2_jge = "奇数";
            break;
        default:
            $input_number2_jge = "warning想定外の自体、小数点の判断時に、文字列を排除したうえで四捨五入後に%2+1が1と2以外を表示しています。通常このエラーは表示されません。";
            break;
    };
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
}else
{
    $input_number = (int) $input_number + 1;
    switch($input_number){
        case 1:
            $input_number_jge = "偶数";
            break;
        case 2:
            $input_number_jge = "奇数";
            break;
        default:
            $input_number_jge = "warning想定外の自体、文字列と小数点を排除したうえで+1が1と2以外を表示しています。通常このエラーは表示されません。";
            break;
    };
    echo "入力された数値は[<b>{$input_number_jge}</b>]です";
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
*/
?>

<?php



?>
