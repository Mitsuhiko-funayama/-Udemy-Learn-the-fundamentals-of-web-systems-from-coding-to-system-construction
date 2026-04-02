<?php
class Person
{
    private $name;
    public $age;
    public static $whereToLive = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

        function hello() {
        echo 'hello, ' . $this->name;
        echo static::bye();
        return $this;
    }

    /**
     * staticメソッドとは？
     *
     * クラス自体に登録するメソッドである。
     * 静的なメソッドである。staticメソッド内では「this」は使えない。
     * 
     */
    static function bye() {
        echo 'bye, ';
    }
}

$bob = new Person('Bob', 18);
// Person::bye(); // 関数byeの呼び出し
$bob->hello();
echo Person::$whereToLive;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();