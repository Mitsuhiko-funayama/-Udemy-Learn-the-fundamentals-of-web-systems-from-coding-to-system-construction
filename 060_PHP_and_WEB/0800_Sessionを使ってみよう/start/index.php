<?php
/**
 * セッションの場合はサーバー側に値を保持する。
 * セッションの値とは、cookieのセッションID
 */
session_start();
$_SESSION['VISIT_COUNT'] = 1;
// ブラウザ上のValueの値 ＝ セッションID、になる。
echo $_SESSION['VISIT_COUNT'];

phpinfo();