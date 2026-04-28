<?php
/**
 * 理解度チェック（クラス）
 * 
 * 目的：ファイルの書き込みを行うためのクラスを定義する
 * ヒント）PHP_EOL： 改行するための特殊な定数
 * ＊index.php02に色々書き込む！
 */

class MyFileWriter
{
    public $file;
$content = 'Hello Bob'; // append（文字列を繋ぎ合わせるのに使う）
$content .= PHP_EOL; // newline（改行）
$content .= 'Bey,'; // append（文字列を繋ぎ合わせるのに使う）
$content .= 'Bob.'; // append（文字列を繋ぎ合わせるのに使う）
$content .= PHP_EOL; // newline（改行）

// commit（ファイルに対して書き込みを行う -> sample.txtへの書き込み）
file_put_contents('sample.txt' , $content) // file_put_contents()、ファイルに書き込む機能で、ココで言えばsample.txtに書き込む内容

$content = '';

$content = 'Good night, Bob.'; // append

// commit
file_put_contents('sample.txt', 'Hello, Bob', FILE_APPEND);
$content = '';
}

/**  クラスの呼び出し方は以下を参考にする

    $file = new MyFileWriter('sample.txt');
    $file -> append('Hello Bob');
    -> newline();
    -> append('Bey,');
    -> append('Bob.');
    -> newline();
    -> commit();
    -> append('Good night, Bob.')
    -> commit(MyFileWriter::APPEND);
*/