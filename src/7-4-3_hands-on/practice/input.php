<!-- inputは入力ページです。英単語の意味だと「入力する」という意味です。 -->
<?php
$count = 1;
$total = 3;
include "../header.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <form action="confirm.php" method="post">
        <p>
            <label>お名前:</label><!--盲目の方でも楽しめるための配慮-->
            <input type="text" name="username" placeholder="テスト 太郎" required>
        </p>
        <p>
            <label>メールアドレス:</label>
            <input type="e-mail" name="email" placeholder="test@example.com" required>
        </p>
        <p>
            <label>年齢:</label>
            <input type="value" name="age" placeholder="30" required>
        </p>
        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>