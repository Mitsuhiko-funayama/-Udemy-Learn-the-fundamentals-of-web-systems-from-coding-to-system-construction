<?php
abstract class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE;
        echo static::$WHERE;
    }

    abstract function hello();

    static function bye() {
        echo 'bye';
    }
}

/** 継承とは？
 * Personクラスからextendsでクラスを継承した、
 * Japaneseクラスを作成する
 */
class Japanese extends Person {

    public static $WHERE = '日本';

    function __construct($name, $age)
    {
        Parent::__construct($name, $age);
        // $this->name = $name;
        // $this->age = '30歳';
    }

    function hello() {
        echo 'こんにちは、 ' . $this->name . '<br>';
        return $this;
    }

        function address() {
        echo '住所は、 ' . parent::$WHERE . 'です。<br>';
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
$taro->hello();
$taro->address();
// echo $taro->age;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();