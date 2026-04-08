<<?php
var_dump($_POST);

$num = $_POST['num'];
$price = $_POST['price'];
$discount = $_POST['discount'];

$sum = $num * $price;
$sum -= $sum * $discount / 100;

echo '合計：', round($sum), '円'; // round()で出力される値が整数になる

?>