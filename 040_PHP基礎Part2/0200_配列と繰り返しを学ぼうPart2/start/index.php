<?php

//
$array = [
    ['table' , 1000],
    ['chair' , 100],
    ['bed' , 10000],
];

/*
foreach($array as $val) {
    echo"{$val[0]}は{$val[1]}円です。";
   // print_r($val);
}
*/

/*
$array = [
	['chair' , 500]
];

foreach($array as $val) {
    echo"{$val[0]}は{$val[1]}円です。";
}
*/

/*
$array[1][1] = 500;

foreach($array as $val) {
    echo"{$val[0]}は{$val[1]}円です。";
}
*/

// 配列の一番上の要素を削除する関数
// array_shift($array);

// 配列の一番下の要素を削除する関数
// array_pop($array);


// array_splice($array, 1, 1);

array_splice($array, 2, 1, ['replace' , 400]);

foreach($array as $val) {
    echo"{$val[0]}は{$val[1]}円です。";
    // print_r($val);
}