<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
</head>
<body>
    <h1>ユーザー情報入力</h1>
    <form action="process.php" method="post">
        <p>
            <label>お名前</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレスを入力してください">
        </p>
        <button type="submit">送信</button>
    </form>
</body>
</html>