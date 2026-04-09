<?php
/**
 * Cookieの確認方法
 * cookieはHeadersの中に格納されている
 * 確認のやりかた、Webブラウザの開発モード->Networkタブ->Nameタブ->
 * 今開いてるファイルのフォルダーを選択する->Response headersタブのSet-Cookie、を確認する。
 * 上記以外でも確認する方法はある。
 * WebブラウザのApplication->Storageタブ->Cookieタブ、で確認できる。
 * 
 * 一度設定したCookieの値は必ずsetcookie()関数を使わないといけない。
 */
setcookie('VISIT_COUNT', 1, [
    /**
     * time()の引数を左から順番に整理していくと、以下の様に表せる
     * -> time() + 60秒間 * 60回 * 24時間 * 30日間
     */
    'expires' => time() + 60 * 60 * 24 *30, // 一か月分の時間を指定する表現

    // 下記の様に設定すれば、ページ全体でcookieが有効になる
    'path' => '/'
]);

var_dump($_COOKIE['VISIT_COUNT']);

?>