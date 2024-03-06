<?php
trait kaamkefunctions1 {
    public function kaamka1() : string {
        return "<p>Ye bohat kaam ka function hai</p>";
    }
}
trait kaamkefunctions2 {
    public function kaamka2() : string {
        return "<p>Ye Bhi bohat kaam ka function hai number 2</p>";
    }
}
interface StartCar {    
    public function makeSound();
}

abstract class Car {
    public $name;

    public static function welcome() {
        echo "<p>Hello World!</p>";
    }

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

class Toyota extends Car implements StartCar {
    use kaamkefunctions1,kaamkefunctions2;
    public function intro() : string {
        return "<p>Made in Japan! I'm $this->name!</p>";
    }
    public function makeSound()
    {
        echo "<p>boom boom</p>";
    }    
}

$obj = new Toyota("Corolla");
echo $obj->intro();

$obj = new Toyota("Grande");
echo $obj->intro();

$obj->makeSound();
echo $obj->kaamka1();
echo $obj->kaamka2();

Car::welcome();