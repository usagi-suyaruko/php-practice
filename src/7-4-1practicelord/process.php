<?php
var_dump($_POST);
$username = $_POST["username"];//[]内はid属性の値を指定します。

$username = $_POST["username"];//[]内はid属性の値を指定します。

// 脆弱性を防ぐために、HTMLエスケープを行います。
$safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
//ENT_COMPATクォートとダブルクォートの両方yを変換すると言うオプションです
//UTf-8は文字列コードです

//これらを徹底してください。
//といってたら、これはlaravelでは自動的に使用されるらしい。まあ、理屈理科時に考えると、HTMLエスケープは重要です。

echo "<br>こんにちは\"" . $safe_username . "\"さん";
