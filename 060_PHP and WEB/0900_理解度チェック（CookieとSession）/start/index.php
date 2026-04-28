<?php
/**
 * --問題：SessionとCookieの理解度チェック--
 * index.phpに訪問するたびに訪問回数が1つづつ増える処理を実装してみてください。
 * Session、Cookieの二つのパターンで実装してみましょう。
 * １回目
 * 訪問回数は 1 回目です。
 * ２回目
 * 訪問回数は 2 回目です。
 *-----------------------------------------------------------------------
 *--要点の整理--
 * 「訪問回数は～」という表示になっているので、echoで出力する。
 * 訪問回数++で、1回ごとに1づつカウンターが上がる
 * Session、Cookieの二つのパターンで実装
 */

/**
 * --Cookieで$countをインクリメントする--
 */
function get_countVisits($countID) {
    $life = 60 * 60 * 24 * 30 * 12;   // 一年分の期間を指定
    /**
     * issetは、変数が定義されている（存在している）かつ、値がnullではない場合に
     * trueを返す組み込み関数です。
     * 
     * $_COOKIE[]は、ブラウザ内に保存されているCookieを確認する。
     * 
     * 'count'.$countIDは、Cookieがすでにある場合なら探す、という意味。
     */
    if(isset($_COOKIE['count'.$countID])) { // ココの一文の意味が、もし既にCookieをブラウザが持っていたら？という一文。
        $count = $_COOKIE['count'.$countID] +1; // 既に持っていたら今の数字に「1」を足す。
    } else { // 初めてアクセスした場合は、、、
        $count = 1; //「1」からスタートする。
    }
    /**
     * setcookie：このデータをブラウザに保存して、という関数
     * $count：さっき計算した最新の数字
     * time() + $life：いつまで保存するか？time()から、決められた時間（life）が過ぎるまで有効、という意味。
     */
    setcookie('count'.$countID, $count, time() + $life);
    return $count; // 今のカウントはn回目、という結果を返す。
}
    $res = get_countVisits('Cookie_counter');

    echo 'これはCookieでカウントしてます。<br>';
    echo $res . '回目<br>';
    echo '訪問回数は、' . $res . '回目です。<br>';

/**
 * --Sessionでカウントをインクリメントする--
 */
session_start();

if(isset($_SESSION['VISIT_COUNT'])) {
    $_SESSION['VISIT_COUNT']++; // 2回目以降の訪問時
} else {
    $_SESSION['VISIT_COUNT'] = 1; // 初回以降の訪問時
}
echo 'これはSessionでカウントしています。<br>';
echo $_SESSION['VISIT_COUNT'] . '回目<br>';
echo '訪問回数は、'. $_SESSION['VISIT_COUNT'] . '回です。<br>';
