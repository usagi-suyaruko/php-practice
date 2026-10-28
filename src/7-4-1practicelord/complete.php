<?php
$name = isset($_GET["name"]) ? $_GET["name"] : "ゲスト";
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8");?>さん、登録が完了しました</h1>
    <p><a href="input.php">入力画面に戻る</a></p>
</body>
</html>