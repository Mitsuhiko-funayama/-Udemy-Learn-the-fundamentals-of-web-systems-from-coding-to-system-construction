<?php
/***
 * 条件分岐を省略して記述しよう
 *
 * 三項演算子の使い方
 * null合体演算子
 */
$array = [
    'key' => 10,
];

// if文を使った書き方
// if (isset($array['key'])) {
//     $array['key'] = $array['key'] * 10 . '<br>';
//  // $array['key'] *= 10; // <-上記と書いてある内容は同じ！
// } else {
//     $array['key'] = 1;
// }
// echo $array['key'];

// 三項演算子を使った書き方
// $array['key'] = isset($array['key']) ? $array['key'] * 10 : 1;
// echo $array['key'];

// null合体演算子
if (isset($array['key'])) {
} else {
     $array['key'] = 1;
}
$array['key'] = $array['key'] ?? 1; // ??の部分がnullの部分になる
echo $array['key'];

