<?php

// classとは新しくオブジェクトを生成するためのひな型、一つのまとまり、構造体である。
class Person
{
    // クラス内で変数を宣言する場合は、キーワードを付けて宣言することで、変数のアクセス範囲を指定できる
    public $name; // 変数を宣言することをプロパティと呼ぶ privateはクラス内でしか変数を呼び出せない
    public $age; // publicと付いている場合は、クラスの外から変数を呼び出せる


    function __construct($name, $age) // __constructは、newを使った場合に呼ばれる関数
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    // 下記の関数の場合クラス内に配置されているので、メソッドと呼ばれる！
    // クラス内に配置されていない関数は、そのまま関数と呼ばれる！
    function hello() {
        echo 'hello, ' . $this->name; // $thisというのはクラス全体を指す変数で、nameとした場合は$nameを指す
    }
}

/**
 * インスタンス化とは?
 * newでオブジェクトを作成することをインスタンス化という
 * newで作成したオブジェクトは、インスタンス、インスタンスオブジェクト、という
 *  */
// $obj = new Other;


$Bob = new Person('Bob', 18);

// プロパティの呼び出し方
// クラス内でprivate、に設定されている場合はクラスの外からはアクセスできない
// publicに設定されている場合は、クラス外からもアクセスできる
echo $Bob -> name. '<br>'; // '<br>'は改行
echo $Bob -> age. '<br>';

// メソッドの呼び出し方
$Bob -> hello();