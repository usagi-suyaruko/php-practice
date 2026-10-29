<?php
$name = $_POST["name"];
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
    <h1>ユーザー登録 (2/3) 確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <table border="1">
        <tr>
            <th>名前</th>
            <td><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?php echo htmlspecialchars($age,ENT_QUOTES,'UTF-8');?></td>
        </tr>
    </table>
    <!--確認画面から完了画面へデータを渡すためのフォーム -->
    <form action="complete.php" method="post">
    <!--hidden属性で、データを隠して送信。まーよーするに、見えないままにデータを渡すだけ-->
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?>">
    <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8');?>">
    <p>
        <button type="button" onclick="history.back()">戻る</button><!--one clickの略だと思われる。history backは単にブラウザキャッシュに残していた、一つ前に戻るってことだと思われる。歴史に戻るってくらいだからね-->
        <button type="submit">登録する</button>
    </p>
    </form>
</body>
</html>