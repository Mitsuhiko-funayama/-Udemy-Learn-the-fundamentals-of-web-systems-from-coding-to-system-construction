<?php
/*
|* １．郵便番号
|*
|* 以下のパターンでOK、NGとなるように
|* 正規表現を記述してみてください。
*/
/*----------------------------------------------------------------------------------------
|【自己回答】
*/
$char = '001-0012'; // OK
if(preg_match("/[0-9]{3}-[0-9]{4}/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}

$char = '001-001'; // NG
if(preg_match("/[a-z]{3}-[a-z]{3}/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}

$char = '2.2-3042'; // NG
if(preg_match("/[0-9]{3}-[0-9]{4}/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}

$char = 'wd3-2132'; // NG
if(preg_match("/[0-9]{3}-[A-z]{4}/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}

$char = '124-56789'; // NG
if(preg_match("/[a-z]{3}-[a-z]{4}/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}
/*-----------------------------------------------------------------------------------------
|* [講座模範解答]
*/
$char = '001-0012'; // '001-0012'~'124-56789'までの文字列全てのOK,NGを判定出来るようにする！
if(preg_match("/^\d{3}-\d{4}$/", $char, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
}
/* -----------------------------------------------------------------------------------------
|* 上記のやり方では、$charの中身を一々書き換えないと確認できない。
 * 従って効率よく「配列」と「繰り返し」を使って一気に処理できるようにする。
*/
$chars = [
    '001-0012', //ok
    '001-001', //NG
    '2.2-3042', //NG
    'wd3-2132', //NG
    '124-56789'];

foreach($chars as $char) {
    echo "判定中：". $char. "ー＞";

    if(preg_match("/^\d{3}-\d{4}$/", $char,/* $result*/)) {
        echo 'OK<br>';
        //print_r($result);
    } else {
        echo 'NG<br>';
    }
}
/*----------------------------------------------------------------------------------------------
|* ２．Email
|*
|* 以下のパターンでOK、NGとなるように
|* 正規表現を記述してみてください。
|* ※. _ - と半角英数字が可能
*/
/*----------------------------------------------------------------------------------------------
|【自己回答】
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
/*-----------------------------------------------------------------------------------------
|* [講座模範解答]
*/
$mail = 'example000@gmail.com'; // OK
if(preg_match("/^[\w.\-]+@[\w\-]+\.[\w\.\-]+$/", $mail, $result)) {
    echo 'OK<br>';
    print_r($result);
} else {
    echo 'NG<br>';
    print_r($result);
}
//---------------------------------------------------------------------------------------------
/* ３．HTML
|* 見出しタグ(h1~h6)の中身のみ取得してみてください。
*/
/*----------------------------------------------------------------------------------------------
|【自己回答】
*/
$html = '<!DOCTYPE html>
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
    echo $text . "\n<br>";
}

/*-----------------------------------------------------------------------------------------
|* [講座模範解答]
*/
if(preg_match_all('/<h[1-6]>(.+)<\/h[1-6]>/', $html, $result)) {
    print_r($result);
}

?>
