<?php
session_start();

if(isset($_POST['username'])
    && isset($_POST['pwd'])
    // この下2行のusername,pwd両方がOKな場合は、ログインできる
    && $_POST['username'] === 'test'
    && $_POST['pwd'] === 'pwd') {
    // ログインOK！
        $_SESSION['user'] = [
            'name' => $_POST['username'],
            'pwd' => $_POST['pwd']
        ];

}

if(!empty($_SESSION['user'])) {
    echo 'ログイン中です。';
} else {
    echo 'ログインしていません。';
}
/**
 * 上記のやり方だと一回ログインしたら、
 * 検証モードからセッションIDを消さない限りログアウトできない。
 */