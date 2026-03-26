<?php
/**
 * ファイル分割の方法を学ぼう
 * 
 * - require、includeの違い（使い分け）
 * - require、require_onceの使い方
 */

// file1をMainで呼び出したい
$array = [
    'num' => 0
];

// file1.phpからの出力
require('file1.php'); // 読み込みたい対象のファイルを指定する（あくまでも読み込んだだけで、file1の中の関数を実行しているわけではない）
fn1(); // 上の行で指定したファイルの関数fn1()はfunction = 関数を指す
// ー＞上記の2行はfile1で指定した関数fn1と同じ意味になる！！

// file2.phpからの出力
// require('file2.php');
// require_once('file2.php');
// require_once('file2.php');
// require_once('file2.php'); // require_onceと入力すると何回requireと入力されても出力されない

echo $array['num'];

/**
 * requireとincludeの違い！
 *
 * 主にエラーメッセージの違いがある
 * -requireは、Warning:（中略）No such file or directoryと表示される。
 * また、Fatal error:（中略）の様に致命的なエラーと表示されて、問題のある行でプログラムの実行が止まる。
 * -includeは、問題の行の処理は実行されずに、Warning:（中略）と表示される。その後に続く処理は問題なければ実行される。
 * ー＞またどちら共に関数、キーワードとしても使える！
 *  */
