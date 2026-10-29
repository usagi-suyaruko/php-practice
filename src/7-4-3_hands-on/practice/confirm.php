<!-- confirmは確認ページです。英単語の意味だと「確認する」という意味です。-->
<?php
$count = 2;
$total = 3;
include "../header.php";
$name = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <p>以下の内容で登録します、よろしいですか？<br></p>
<!--ここから先でボーダーライン、padding、コネクトとうで、横2、縦３の表レイアウトを決める内部には６個のセルができるイメージになる-->
<!--枠は画面サイズの４等分程度、ただし、Windowsサイズに応じた調整が必要これに関してはCSS側での操作-->
    <div>
    <p>
        <b>お名前</b>
        <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8");?>
    </p>
    <p>
        <b>メールアドレス</b>
        <?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8");?>
    </p>
    <p>
        <b>年齢</b>
        <?php echo htmlspecialchars($age, ENT_QUOTES, "UTF-8");?>
    </p>
        <a href="input.php"><button>戻る</button></a>
        <form action="complete.php" method="post">
            <input type="hidden" name="username" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8");?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8");?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, "UTF-8");?>">
            <button type="submit">登録する</button>
        </form>
    </div>
</body>
</html>