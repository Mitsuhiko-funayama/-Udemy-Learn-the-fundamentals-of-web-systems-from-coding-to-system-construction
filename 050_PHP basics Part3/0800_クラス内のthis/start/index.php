<<?php

class Person
{

    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }


    function hello() {
        echo 'hello, ' . $this->name;
        return $this; // ココの$thisは生成した後のオブジェクトを指す！-> $Bob
    }

    function bye() {
        echo 'bye, ' . $this->name;
        return $this;
    }

}

$Bob = new Person('Bob', 18);

echo $Bob -> name. '<br>';
echo $Bob -> age. '<br>';
$Bob -> hello() -> bye(); // この書き方をチェーンメソッドという

$Tim = new Person('Tim', 30);

echo $Wim -> hello();