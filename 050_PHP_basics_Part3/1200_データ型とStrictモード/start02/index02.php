<?php declare(strict_types = 1);
/**
 * declare(strict_types = 1)はこのファイル全体のデータ型に対して厳密に検査するモードに入る。
 * これによりデータ型に反する実装等はエラーになる。
 * */

function add1 (int $val): int {
    return $val + 1;
}
$result = add1(1);
var_dump($result);

