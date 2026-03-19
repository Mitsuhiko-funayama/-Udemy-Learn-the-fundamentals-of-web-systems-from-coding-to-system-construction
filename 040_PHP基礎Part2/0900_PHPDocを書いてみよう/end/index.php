<?php

/** <-この書き方を DocComment という
 *  税率計算のための関数を記述するためのファイル <-このファイルの簡単な説明
 * @author mitsuhiko-funayama <-phpDocの書式ではアノテーションという機能が使える
 * @since 0.0.1 <-開発中のAppのバージョン等をメモできる <-コレもアノテーション
 */

/** <- 下の関数 with_tax に関するコメントの書き方
 *     しかも関数名にカーソルを合わせると、各変数の定義を確認できる
 * 税込み金額を取得する関数
 *
 * ～補足説明があればココに記載する！～
 *
 * @param int $base_price 価格
 * @param float $tax_rate 税率
 *
 * @return int $$sum_price 税込み金額
 * @see https://example.com/ <-参考URLを載せることも出来る
 */
function with_tax($base_price, $tax_rate = 0.1) { 
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price); 
    return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;

