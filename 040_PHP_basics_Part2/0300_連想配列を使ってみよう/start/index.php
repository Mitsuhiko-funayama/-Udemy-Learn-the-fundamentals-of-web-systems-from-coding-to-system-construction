<?php
//連動配列を使ってみる

$array =[
	'name' => 'Bob',
	'age' => 12,
	'sports' => ['baseball', 'swimming']
];

/* 一番上にくる配列を削除する
| array_shift($array);
*/

/* unset()関数は、()内の文字を削除する関数
| unset($array['name']);
*/

// 'name'を出力
echo $array['name'] . "<br>";

/* 'age'の年齢を書き換える
| $array['age'] = 24;
*/

/* 'age'の年齢に+する書き方
| $array['age'] += 24;
*/

// 'age'の出力
echo $array['age'] . "<br>";

// 'sports'から配列内の'swimming'を出力したい
echo $array['sports'][1] . "<br>";

