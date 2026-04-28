<?php
/**
 * ファイル分割方法を学ぼう
 *
 * -require,includeの違い
 * -require,require_onceの使い方
 */

// この関数はfile1以外で定義されていないかを調べるときに使う↓
if(!function_exists('fn1')) { //!（ノット）演算子を使っているので、fn1が宣言されないときにfn1を実行する、という式になる
    function fn1() {
        echo 'fn1 is called';
    }
}

$array['num']++; // numに1を代入する



?>