<?php
/*
|* 関数を作ってみよう（Part. 2）
|*
|* デフォルト引数を設定可能
|* 文字列を関数として実行可能
*/

$price = 1000;

function with_tax($base_price, $tax_rate = 0.1) { // デフォルト引数を設定する場合は、引数の最後に設定する必要がある
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price); // 他に引数を設定しない場合は、四捨五入する
    return $sum_price;
}
$price1 = with_tax($price, 0.08); // デフォルト引数があっても、引数設定すればこちらが優先される
echo $price1 . '<br>';

$price2 = 'with_tax'($price, 0.08); // PHPでは文字列を関数として実行することも可能
echo $price2 . '<br>';
print_r($price1) . '<br>'; //echo()と書いてしまうとブラウザ上で[1]が表示されてしまうので、echo()はいらない
