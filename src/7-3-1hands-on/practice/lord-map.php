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
class User{
    //この中に、プロパティ(データ）と、メソッド（処理）を定義して行く
    //プロパティ（データ）を定義
    public string $first_name;
    public string $last_name;
    public int $age;
    public int $bone_year;
    public int $bone_month;
    public int $bone_day;
    public  function introduce():string{
        return "こんにちは、". $this->first_name ."の名前は" . $this->last_name . $this->first_name . "だよ！年齢は" . $this->age . "歳！！<br>";
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
echo $message;
// var_dump()で、インスタンスの中身を見てみる
var_dump($User1);
//object(User)#1 (0) { }
echo "<br>";
var_dump($User2);
//object(User)#2 (0) { }

?>