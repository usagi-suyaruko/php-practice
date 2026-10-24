<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>成績判定システム</h1>
<h2>【個別成績】</h2>
<?php
//関数式にすればもっと便利だったなと後悔
echo "<br>";
$student = [
    ['name' => '田中太郎','score' => 85],
    ['name' => '佐藤花子','score' => 92],
    ['name' => '鈴木一郎','score' => 78],
    ['name' => '高橋美咲','score' => 65],
    ['name' => '伊藤健太','score' => 58],
    ];
    $score_if = [
    ['score1' =>90, 'grade' => 'A','judge' =>'優秀'],
    ['score1' =>80, 'grade' => 'B','judge' =>'良好'],
    ['score1' =>70, 'grade' => 'C','judge' =>'普通'],
    ['score1' =>60, 'grade' => 'D','judge' =>'要努力'],
    ['score1' =>0, 'grade' => 'F','judge' =>'不合格'],
    ];
$failed = 0;
$pass = 0;
$total_score = 0;
$score_other =0;
    foreach ($student as $value) {
    if(is_null($value['score'])){
        echo $value['name'] . ": テスト受験無し。";
        $score_other++;//例外
    }else{
        for ($s = 0, $r = false;$r == false; $s++) {
            if($score_if[$s]['score1'] <= $value['score']){//ここの引数の額を変数したいなー。
                $r = true;
                if($value['score'] < $score_if[count($score_if)-2]['score1']){/*この辺り関数を作るべきだよねえ。繰り返し使っている*/
                    $failed++;//不合格者
                }else{
                    $pass++;//合格
                }
            }
        }

        $s -= 1;
        echo $value['name'] . ': ' . $value['score'] . '点 - ' . "評価 " . $score_if[$s]['grade'] . "<br>";
        $total_score += $value['score'];
        }
}
//foreach について。これに関しては、foreach{変数(配列) as 添字 => 要素}｛｝といった具合に書くことができる。これは
//foreach($rabbit as $number => $value)$rabbit 以外は自分で書いたものです。
/* rabbit = array()
 * rabbit[0] = "a";
 * rabbit[2] = "b";
 * rabbit[5] = "c";
 * となり、これをforeachだけで使うと[0]=>0[2]=>1[5]=>2といった感じに再定義される。そうした値に関してはforeach内で表示された時に$numberは0からだと「0」と記載され、[1]なら2。$value[0]なら[a]として表示される。1ならｂ
 */
?>
<h2><b>【統計情報】</h2>
<br>
<?php
$sub_total_average = $failed + $pass;
$total_average = $total_score / $sub_total_average;//何もしなくても少数になるんだけど怖
echo "合格者数: " . $pass . "人<br>";
echo "不合格者数: " . $failed . "人<br>";
echo "平均点: " . $total_average . "点<br>";
/*
function name_count_changer($a, $b, $c)
{
    $a1 = $a - $b;
    if (is_null($c)) {
        $c = 1;
    } else {
        if (is_string($c)) {
            $c = 9999999999999999;
        }//強制終了用
    }
    for ($i = 0; $a1 < $i; $i += 1 * $c) {
        continue;
    }
}
    これnull continueでええやん*/
    /*私のかんがえる関数は */

?>
</body>
</html>