<?php
session_start();
$self_url = $_SERVER['PHP_SELF']; // ココで今いるページのurlを取ってくる
?>

<form action="<?php echo $self_url; ?>" method="post"> <!-- フォームの入力欄 -->
    <input type = "text" name = "title">
    <input type = "submit" name = "type" value="create">
</form>

<?php
/**
 * submitボタンが押された時に実行される処理を記載する
 */
if(isset($_POST['type'])) {
    if ($_POST['type'] === 'create') {
        $_SESSION['todos'][] = $_POST['title'];
        echo "新規タスク[{$_POST['title']}]が追加されました。<br>";
    } elseif ($_POST['type'] === 'update'){
        $_SESSION['todos'][$_POST['id']] = $_POST['title'];
        echo "タスク[{$_POST['title']}]の名前が変更されました。<br>";
    } elseif ($_POST['type'] === 'delete'){
        array_splice($_SESSION['todos'], $_POST['id'], 1);
        echo "タスク[{$_POST['title']}]が削除されました。<br>";
    }
}

/**
 * $_SESSION['todos']の初期化を行うための処理
 */
if(empty($_SESSION['todos'])) {
    $_SESSION['todos'] = []; // ココで$_SESSION['todos']を初期化している。
    echo 'タスクを入力しましょう！';
    die(); // phpの処理を止めるために使う関数、ココより下の処理を止める処理
}
?>

<ul>
    <<?php
    for($i = 0; $i < count($_SESSION['todos']); $i++):
    ?>
        <li>
            <form action="<?php echo $self_url; ?>" method = "POST">
                <input type="hidden" name="id" value="<?php echo $i; ?>">
                <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i]; ?>">
                <input type="submit" name="type" value="delete">
                <input type="submit" name="type" value="update">
            </form>
        </li>
    <?php endfor; ?>
</ul>

