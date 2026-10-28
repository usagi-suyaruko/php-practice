<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        hi {
            color: #333;
            text-align: center;
            border-bottom: 3px solid #0066cc;
            padding-bottom: 10px;
        }
        h2{
            color: #0066cc;
            margin-top: 30px;
        }
        .user-info{
            background-color: #f0f08ff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #0066cc;
        }
        .adult {color: #28a745;}
        .minor {color: #dc3545;}
    </style>
</head>
<body>



<div class="container"><h1>ユーザー管理プログラム</h1>
<?php
class User {//クラスは最初の文字を大文字で書くのが一般的らしい。名詞判定なのか、単に見分けのためなのか。多分他と混同しないようにっているのが趣旨だと思われる。関数とかの変換とかで候補としてごっちゃになると大変だしね。
    public$name;
    public$age;
    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce() {
        echo "<div class='user-info'>";
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
        echo "</div>";
        echo "</div>";
    }
    /*public function introduce() {
        return "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }
        */
    public function isAdult() {
        return $this->age >= 18;//確かにこれでもtrueになるね。大なりを代入しているわけだから。
    }
}
//ユーザーを作成
$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);
echo "<h3>自己紹介</h3>";
echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();
//ifelse文で成人か未成年かを判定
echo "<h3>成人判定</h3>";
$users = [$user1, $user2, $user3];
foreach ($users as $user) {
    if ($user->isAdult()) {
        echo "<div class='adult'>✓{$user->name}さんは成人です。<br></div>";
    } else {
        echo "<div class='minor'>✗{$user->name}さんは未成年です。<br></div>";
    }
}
/*if ($user1->isAdult()) {
    echo $user1->name . "さんは成人です。<br>";
} else {
    echo $user1->name . "さんは未成年です。<br>";
}
if ($user2->isAdult()) {
    echo $user2->name . "さんは成人です。<br>";
} else {
    echo $user2->name . "さんは未成年です。<br>";
}
if ($user3->isAdult()) {
    echo $user3->name . "さんは成人です。<br>";
} else {
    echo $user3->name . "さんは未成年です。<br>";
}
*/
//関数には変数+文字で変数として扱えるそうなので、これを利用すれば、for文でまとめて判定できると考えられるよね。foreachのほうが楽だけど、
// その場合内部側での処理が確認しづらい問題が有る。この辺りはAiかツールなどの制作が必要と目される。

?>
</div>
</body>
</html>