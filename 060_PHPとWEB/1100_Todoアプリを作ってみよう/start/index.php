<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $self_url; ?>">
    <input type = "text" name = "title">
    <input type = "submit" name = "type" value="create">
</form>

<?php
/**
 * $_SESSIONの初期化を行う
 */
if(empty($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
    echo 'タスクを入力しましょう！';
}
/**
 * 
 */
if(isset($_POST['type'])) {
    if($_POST['type'] === 'create') {
        $_SESSION['todos'][] = $_POST['title'];
    }
}
?>