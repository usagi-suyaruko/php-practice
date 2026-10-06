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
echo "<p>PHPbバージョン: " . phpversion() . "</p>";
echo "<p>現在の時刻</p>" . date("Y-m-d H:i:s") . "</P>";
//これは一行コメントです。
echo "Hello, World";//この行は、画面ニ文字を出力します。
/*
これは行間コメントデス
関数の説明などを詳しく書く時に使います。
＠param string 挨拶文
 */
function great($name)
{
    return "こんにちは、" . $name . "さん！";
}
/*
//一時的にこのコードを無効にしたい
echo "この部分は実行されません"*/
?>