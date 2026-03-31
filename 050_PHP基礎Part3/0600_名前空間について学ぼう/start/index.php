<?php
/**
 * 名前空間について学ぼう
 * 
 * コードの格納場所
 */
require_once 'lib.php';

// このやり方は、index.phpのwith_taxを呼び出している
use function \lib\with_tax; // 「\lib\」の初めの「\」は名前空間のグローバル空間を表している
use const lib\TAX_RATE;

// このやり方は、ファイルのパスを指定するやり方
// $price = \lib\with_tax(1000, 0.08); // lib.php内の名前空間にwith_taxも登録されているので、それを呼び出す

// echo \lib\TAX_RATE;

// libからmy_textを呼び出す
\lib\my_Text(); // 「\」を入れて呼び出すことで、名前空間を使うことができる

use function lib\my_Text; // useを使ってるときは「\lib\」とせずに、「lib\」として実行する
