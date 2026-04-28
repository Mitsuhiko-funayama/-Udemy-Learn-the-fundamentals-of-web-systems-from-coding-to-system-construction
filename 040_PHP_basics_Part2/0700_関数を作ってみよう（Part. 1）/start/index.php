<?php
/* 関数を作ってみよう！
|
|* 特定の機能を使いまわせる様になる
|* Input（引数）、Output（戻り値）を定義する
|* returnが実行された時点でその関数の処理を終了する
*/

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

// $sum = 0;
// foreach ($numbers as $num) {
//     $sum = $sum + $num;
//     // 自己代入を行うことで、$numbersの全ての要素を足し合わせることができる
// }
// echo "合計：{$sum}<br>";

// $sum2 = 0;
// foreach ($numbers2 as $num) {
//     $sum2 = $sum2 + $num;
//     // 自己代入を行うことで、$numbers2の全ての要素を足し合わせることができる
// }
// echo "合計：{$sum2}";

// function sum($numbers) { // ()内の変数の事を引数と呼ぶ
//     $sum = 0;
//     foreach ($numbers as $num) {
//         $sum = $sum + $num;
//     }
//     echo "合計：{$sum}<br>";
// }

sum($numbers);
sum($numbers2);

function sum($numbers) { // ()内の変数の事を引数と呼ぶ
    $sum = 0;
    foreach ($numbers as $num) {
        $sum = $sum + $num;
    }
    return $sum; // 戻り値 例えばreturnで内部の処理は完了している。
                 // 以降にechoで出力をしようとしても、出力されない。
}
    $result = sum($numbers);
    echo "合計：{$result}<br>";