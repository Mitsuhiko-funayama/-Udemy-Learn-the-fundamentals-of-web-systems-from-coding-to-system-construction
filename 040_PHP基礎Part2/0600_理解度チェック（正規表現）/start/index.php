<?php
/*
|* １．郵便番号
|*
|* 以下のパターンでOK、NGとなるように
|* 正規表現を記述してみてください。
*/
$char = '001-0012'; // OK
if(preg_match("/[0-9]{3}-[0-9]{4}/", $char, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$char = '001-001'; // NG
if(preg_match("/[a-z]{3}-[a-z]{3}/", $char, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$char = '2.2-3042'; // NG
if(preg_match("/[0-9]{3}-[0-9]{4}/", $char, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$char = 'wd3-2132'; // NG
if(preg_match("/[0-9]{3}-[A-z]{4}/", $char, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$char = '124-56789'; // NG
if(preg_match("/[a-z]{3}-[a-z]{4}/", $char, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

/*
|* ２．Email
|*
|* 以下のパターンでOK、NGとなるように
|* 正規表現を記述してみてください。
|* ※. _ - と半角英数字が可能
*/

$mail = 'example000@gmail.com'; // OK
if(preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $mail, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$mail = 'example-0.00@gmail.com'; // OK
if(preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $mail, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$mail = 'example-0.00@ex.co.jp'; // OK
if(preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $mail, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

$mail = 'example/0.00@ex.co.jp'; // NG
if(preg_match("/[]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $mail, $result)) {
    echo 'OK<br>';
} else {
    echo 'NG<br>';
}

/* ３．HTML
// 見出しタグ(h1~h6)の中身のみ取得してみてください。
*/
$html = '
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>見出し１</h1>
    <h2>見出し２</h2>
    <h3>見出し３</h3>
    <header>ヘッダー</header>
</body>
</html>';

// <h1>~<h6>の中身を正規表現で表すと、以下のようになる。
$pattern = '/<h[1-6]>(.*?)<\/h[1-6]>/';

// 上記HTML文から取り出す。
preg_match_all($pattern, $html, $result);

foreach($result[1] as $text) {
    echo $text . "\n";
}
?>
