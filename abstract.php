<?php
/* Abstract Classes:
1. Abstract classes cannot be instantiated on their own but can be subclassed
Abstract ব্যবহার করলে ঐ class কে আর instantiated করা যায় না। অবজেক্ট তৈরি হবে না। কিন্তু
subclassed বা Child use korte parbee.
*/
// abstract class Father // Father die.
// {
//     public function print100()
//     {
//         for ($i = 0; $i <= 100; $i++) {
//             echo $i . PHP_EOL;
//         }
//     }
// }
// class Son extends Father
// {
// }

// $obj = new Son();
// // $objFather = new Father(); //Not Possible instantiated
// // $objFather->print100();
// $obj->print100();

//Real Life Problem Abstart Class and Method Vehicle and Car Pathoo Example.

abstract class Vehicle
{
    abstract public function getBaseFare();
    abstract public function getPerKiloFare();
    public function getTotal($kilo)
    {
        return $this->getBaseFare() + ($this->getPerKiloFare() * $kilo);
    }
}

class Car extends Vehicle
{
    public function getBaseFare()
    {
        return 100;
    }
    public function getPerKiloFare()
    {
        return 20;
    }
}
class Bike extends Vehicle
{
    public function getBaseFare()
    {
        return 80;
    }
    public function getPerKiloFare()
    {
        return 10;
    }
}

$car = new Car();
$bike = new Bike();

echo "Car Total=" . $car->getTotal(5) . PHP_EOL;
echo "Bike Total=" . $bike->getTotal(5);
