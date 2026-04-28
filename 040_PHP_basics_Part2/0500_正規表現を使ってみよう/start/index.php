<?php
// 正規表現を使ってみよう!
// 正規表現とは、文字列のパターンを表現するための方法

$char = 'aAabd1_sscc';
if(preg_match("/aAa/", $char, $result)) {
	// "/aAa/" ：第一引数に$charに格納されている文字列を検索する（パターン）
	// $char：第二引数に対象の文字、ここでは変数を指定
	// $result：第三引数に空の変数を用意する
	echo '検索成功';
	print_r($result);
} else {
	echo '検索失敗';
}
