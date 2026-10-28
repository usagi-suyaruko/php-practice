<?php
$name = $_POST['name'];

// ここでデータベースに保存する処理
//今回はしょ言う略

//処理が完了したら、完了画面にリダイレクト
$encoded_name = urlencode($name);
//これは標準の関数で、URLに含められない文字、例えばスペースや日本語などをエンコードしてくれるので安全にURLに含められる。安全上の問題というより、単にURLに含めるために必要な処理
header("Location: complete.php?name=" . $encoded_name);
exit;
?>