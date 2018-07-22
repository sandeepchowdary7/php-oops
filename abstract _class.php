<?php

abstract class Animal{

    public $sound;

    public function setvalue($sound)
    {
        $this->sound = $value;
    }

    public function getvalue($value)
    {
      return $this->value;
    }
}

class Cat Extends Animal{

    public function sound()
    {
        echo  "meow meow";
    }
}

$obj = new Cat();
$obj->sound();

class Dog Extends Animal{

    public function sound()
    {
        echo"bow bow";
    }
}

echo"<br>";
$obj = new Dog();
$obj->sound();