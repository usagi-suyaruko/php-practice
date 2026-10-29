<!-- completeは完了ページです。英単語の意味だと「完了する」という意味です。-->
<?php
$count = 3;
$total = 3;
include "../header.php";
$name = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];
//配列書く時に’’って書く曲があるから""でHTMLでは書いて送ることを念頭に覚えておくこと
    $judge = (empty($name) or empty($email) or empty($age)) ? true : false;
    echo $judge;
    //echo ($judge === false) ? "ユーザー登録-完了" : "入力エラー？ブラウザバッグされたし。";
    //これの面白いところは、ｉｆの外にechoを書いても問題がないところ。逆だと絶対処理されんのがPHPの仕様。代入にまで使えるしｗｗｗ


    //elseifにしたい場合、$result = (条件1) ? "A" : ((条件2) ? "B" : "C");のように()を使うことがver8以降では推奨されている。バグるのかな？ifとの使い合わせによって使い合わせられそう
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ($judge === false) {echo "ユーザー登録 - 完了";} else {echo "入力エラー？ブラウザバッグされたし。";}?></title>
</head>
<body>
    <p><?php echo htmlspecialchars($name) . "さん、登録が完了しました！";?></p>
    <p>確認メールを<?php echo htmlspecialchars($email);?>に送信しました。</p>
    <a href="input.php">最初に戻る</a>
</body>
</html>



