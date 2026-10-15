<style>
    .price {
        display: inline-block;
        width: 100px;
        text-align: right;
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
if ($input === true){
    $sub_total = $original_price * (1 - $price_down);

    echo '元の価格: <div class="price">' . number_format($original_price) . '円</div><br>';

            
            /*number_format($original_price) . "円</span><br>";/*        <span style=
            "display:inline-block;width:200px;text-align:right;"
            >' .*/
    echo "値引き額(" . $price_down * 100 . "%): " . number_format($original_price) . "円<br>";
    echo '値引き後: ' . number_format($sub_total) . '円<br>';
}
;




?>