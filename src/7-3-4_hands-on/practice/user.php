<h2>ユーザー管理プログラム</h2>
<h3>自己紹介</h3>


<?php
class User
{
    public string $name;
    public int $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce(): string
    {
        return "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。";
    }
    public function isAdult(){
        if ($this->age >= 18) {
            return true;}else{
            return false;
        }
    }
    //この辺りforeach的につかえばもっと収まりはいいはずなんだけど。そもそも[][]式じゃないからなああ。多分この中でも出来なくはないんだろうけれど。
    //isAdultの戻り値を利用し"成人" / "未成年"に変更し、表示する
    public function adultStatus(): string
    {
        return $this->isAdult() ?/*if*/ "成人" /*true*/: "未成年"/*false*/;//?はifの意味をなす。:はExcelで言うとところの「,」のような存在に該当するようだ。簡単なifならこっちのほうがわかりやすいのかもしれない。
    }
    public function Adult_Judge():string{
        return $this->name . "さんは" . $this->adultStatus() . "です。";
        //〇〇さんは成人ですと判断される
    }
}

$class1 = new User("田中太郎", 25);
$class2 = new User("佐藤花子", 17);
$class3 = new User("鈴木一郎", 30);

echo $class1->introduce() . "<br>";
echo $class2->introduce() . "<br>";
echo $class3->introduce() . "<br>";
?><h3>成人判定</h3><?php
echo $class1->Adult_Judge() . "<br>";
echo $class2->Adult_Judge() . "<br>";
echo $class3->Adult_Judge() . "<br>";
?>