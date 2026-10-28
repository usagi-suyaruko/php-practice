<?php

//URLのパラメータを受け取る
$id = $_GET["id"];
$name = $_GET["name"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
</head>
<body>
    <h1>商品詳細</h1>
    <p>商品ID:<?php echo htmlspecialchars($id,ENT_QUOTES,'UTF-8'); ?></p>
    <p>商品名:<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8'); ?></p>
    <p><a href="list.php">一覧に戻る</a></p>
</body>
</html>