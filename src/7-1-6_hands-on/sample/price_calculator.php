<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品価格計算</title>
    <style>
        body {
            font-family: Arial, sans-serif;     /* */
            max-width: 600px;                   /* */
            margin: 50px auto;                  /* */
            padding: 20px;                      /* */
            background-color: #f5f5f5;        /* */
        }
        .result {
            background-color: white;                        /**/
            padding: 30;                                    /**/
            border-radius: 10px;                            /*マゾ豚PCのうちの豚の角をradiusで丸くしています。*/
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);     /**/
        }
        h1 {
            color: #333;
            text-align: center;

        }
        .line {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }
        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #0066cc;
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>
<body>
    <div class="result">
        <h1>商品価格の計算</h1>
        <?php
        //商品情報の定義
        $product_name = "ノートパソコン";
        $price = 80000;
        $quantity = 2;//数量
        $tax_rate = 0.1;//税率

        //計算処理
        $sub_total = $price * $quantity;//小計
        $tax_amount = $sub_total * $tax_rate;
        $total = $sub_total + $tax_amount;//合計

        echo "<div class='line'>商品名: $product_name </div>";
        echo "<div class='line'>単価:  {$price}円</div>";
        echo "<div class='line'>数量:  {$quantity}個</div>";
        echo "<div class='line'>小計:  {$sub_total}円</div>";
        echo "<div class='line'>消費税(" . ($tax_rate * 100) . "%): {$tax_amount} 円</div>";
        echo "<div class='total'>合計金額: {$total}円</div>";
        ?>
    </div>
</body>
</html>