<?php
/**
 * 定数の使い方
 *
 * - define, constでの定義方法
 * - constはif文や関数の中では使えない
 * - constは名前空間内に配置される（名前空間のレクチャーで紹介）
 *
 * - defineではグローバルスコープに値が配置される
 * - defineはconstの代わりに、if文の中で使うことができる
 */
/** -定数-
 * ここでいうTAX_RATEは定数として宣言されており、一度定義したら上書きできない特徴がある。
 * また 0.1 をそのまま関数の中で使用するのはメンテナンス性が悪い。
 * したがって、定数に入れた状態で後で呼び出せるようにするのが一般的である。
 */

// defineを使った場合のif文の書き方
// if(!defined('TAX_RATE')) { // definedは既に定数が定義されているかを確認する時に使う
//     define('TAX_RATE' , 0.1);
// }

// constを使った場合のif文の書き方
const TAX_RATE = 0.1;
function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;


?>