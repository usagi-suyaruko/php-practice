<?php
//var_dump($_POST);

$name = $_POST["name"];
$email = $_POST["email"];
/*
$username = $_POST["username"];//[]内はid属性の値を指定します。
$username = $_POST["username"];//[]内はid属性の値を指定します。

// 脆弱性を防ぐために、HTMLエスケープを行います。
$safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
//ENT_COMPATクォートとダブルクォートの両方yを変換すると言うオプションです
//UTf-8は文字列コードです

//これらを徹底してください。
//といってたら、これはlaravelでは自動的に使用されるらしい。まあ、理屈理科時に考えると、HTMLエスケープは重要です。

echo "<br>こんにちは\"" . $safe_username . "\"さん";
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>処理結果</title>
</head>
<body>
    <h1>入力内容</h1>
    <p>お名前:<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8");?></p>
    <p>メールアドレス:<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8");?></p>
</body>
</html>