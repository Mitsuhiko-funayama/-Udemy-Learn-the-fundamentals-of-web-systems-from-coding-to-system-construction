<?php
namespace lib;
// namespace lib\sub; // namespaceはフォルダの様に階層分け出来る

const TAX_RATE = 0.1; // constを使ったことで、libに定数としてTAX_RATEが登録された。

function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

/**
 * 名前空間のグローバル空間とは？
 *
 * phpでは、ファイルの先頭にnamespaceと記載しなければ、自動的にココに配置される
 * PHP標準の機能： strlen() や array_merge() といった、
 * PHPが最初から用意してくれている便利な命令（関数）や、Exception などのクラスのほとんどは、
 * この「グローバル空間」に住んでいます。
 * 
 */
function my_Text() { // my_Textの部分がグローバル空間として登録される
    echo 'this is my text';
}