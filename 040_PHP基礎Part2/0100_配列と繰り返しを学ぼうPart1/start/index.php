<?php

$array = ['taro', 'hanako', 'jiro'];

// print_r($array);
// $array[1] = 'sachiko';

$array[] = 'saburo';

// var_dump($array);
// echo $array[1];

for($i = 0; $i < 4; $i++) {
    echo'<div>', $array[$i], '</div>';
}

// foreach文は、上記でやったfor文の内容を短縮することができる記載方法
foreach($array as $v) {
    echo'<div>', $v, '</div>';
}

// さらに配列内の順番を表示したい場合は、$i =>を追加する
foreach($array as $i => $v) {
    echo'<div>', $i, $v, '</div>';
}