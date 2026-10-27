<?php
function bone_year_to_now($Y, $m, $d)
{
    $age = date('Y') - $Y;
    if (date('m') > $m or (date('m') == $m && date('d') >= $d)) {
    } else {
        $age = $age - 1;
    }
    return $age;
}
//クラスについて
//User と言う名前のクラスを定義する
/*class User{
    //この中に、プロパティ(データ）と、メソッド（処理）を定義して行く
    //プロパティ（データ）を定義
    public string $first_name;
    public string $last_name;
    public int $age;
    public int $bone_year;
    public int $bone_month;
    public int $bone_day;
    public  function introduce():string{
        return "やー、". $this->first_name ."の名前は" . $this->last_name . $this->first_name . "だよ！年齢は" . $this->age . "歳！！<br>";
    }
}
//useというクラスの設計図から、2つのインスタンス（実体）を生成する
$User1 = new User();
//いんすたんすのプロパティに、値を設定する。



$User1->last_name = "長屋";
$User1->first_name = "大樹";
$User1->age = bone_year_to_now(1998, 8, 3);
$User2 = new User();
$User2->last_name = "佐藤";
$User2->first_name = "多英";
$User2->age = bone_year_to_now(1998, 12, 12);
$message = $User1->introduce();
$message2 = $User2->introduce();
echo $message;
echo $message2;
echo "大きな子供やないかいwwwwでも多英大好き！";*/


// var_dump()で、インスタンスの中身を見てみる
/*var_dump($User1);
//object(User)#1 (0) { }
echo "<br>";
var_dump($User2);
//object(User)#2 (0) { }
*/

//コンストラクトとはなにか__constructメソッドを使って、コンストラクタを定義する
/*前のセクションではUserクラスのインスタンスを生成した後、
$user1->name = "山田 太郎";
のように一つずつプロパティに値を設定していました。しかし、これには2つの問題があります。

だろうな！！
*/
class User
{
    public string $name;
    public int $age;
    //コンストラクタを定義
    public function __construct(string $name, int $age){
        /*if (is_string($name) == false or is_int($age) == false) {
        echo "引数の型が正しくありません。（）内はstring,int型で指定してください。<br>";
        }*/ //どうやら、型チェックはPHPの型宣言で自動的に行われるので、ここでは不要のようだ。個人的にはエラーメッセージは自分で出したいんだがな。まあエラーが複合した際に対処が問題になるのか
        echo "Userインスタンスが作成されました！<br>";
        //引数で受け取った値を、プロパティニ設定する。
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(): string{
        return "こんにちは私の名前は" . $this->name . "です。年齢は" . $this->age . "歳です。";
    }
}

//インラインチェックコメントです。git コパイロットに契約したのでそのテストになりますね。いつかはProとかにも目が行くのかもしれませんが、現状はそこまでの腕がないと思いますのでとりあえず保留。
//兎の数を数えます
/*$rabbit_count = 0;
function count_rabbit() {
    global $rabbit_count;
    $rabbit_count++;
}
*/
/*ちょっと関係ないけどrank.eqっていうExcel関数について、もし処理するなら、元データが膨大になることを想定して、順位付けは、グループわけ何かを使うことで処理が楽にならないだろうか。と思うが、よほどうまく作らないと処理が面倒になると思われる。単に着工していない段階での推測では有るんだけど。あとは乱数の使用について。小数点が生まれるなら、1000*intとかにして比較するわけなんだが、それを上記のものでやることになるのかな？と思います。1000000分の一で被るのでなんともですが。アルんですかね？そんなこと？まあ、正直やらないと行けないまで流行りたくない処理っすが。問題自動算出とか。のあれで。やるなら乱数を使用することになるのかな。*/

    $user1 = new User("山田 太郎",30);
    //どうゆうわけか上の()内が存在するなら、コンストラクタ内にある、エコーが表示されるらしい。ふしぎだね。
    echo $user1->introduce();

//__constructについて。
//これは、インスタンス([]内のようなイメージ)が初期化(new)される時に自動的に一度だけ呼び出される特別なメソッドです。
//コンストラクタを使うことで、インスタンス生成時に必要な初期化処理をまとめて行うことができます。


?>