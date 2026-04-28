<?php
/**
 * プログラムの記述順には注意しよう
 * 
 * - 関数内の処理は関数が実行されて初めて動く
 * - 関数宣言はプログラムの実行よりも前に準備される
 * - それ以外は上から順に実行される
 */
$num = 0;
counter(2).'<br>'; // phpの場合、関数本体よりも先に呼び出しても問題なく動く

function counter($step = 1) {
    global $num; // グローバルスコープで設定した、$num をココで呼び出す
    $num += $step; // $num + $step した結果を $num に代入する
    echo $num; // $num の計算結果を出力する
    return $num; // 合計値を返す https://x.gd/0uAoz return の意味（URL参照）
}

counter(2).'<br>'; // <-ココまで来て初めてcounter関数が実行される






?>