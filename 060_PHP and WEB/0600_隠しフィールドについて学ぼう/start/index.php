<!--
 隠しフィールドとは？
 画面には入力欄を表示したくないけど、値としてはサーバーに送りたいフィールドのこと。
-->
<form action="post.php" method="POST">
    <div>
        個数：<input type = "number" name = "num" id = "">
    </div>
    <div>
        価格：<input type = "price" name = "price" id = "">
    </div>
    <div>
        割引：10%
    </div>
    <input type="hidden" name="discount" value="10"> <!-- "hidden"フィールドで隠しフィールドにする！ -->
    <input type="submit" value="合計">
</form>