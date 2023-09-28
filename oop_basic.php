<?php
//Class and Object declare and use.
class Student //Student Class
{
    //'public' access modifier to use any of the class and object
    public $name; //Properties
    public $age;
    public $roll;
    public function showInfo() //Method
    {
        echo $this->name . PHP_EOL; //$this-> keyword use to use properties within class
        echo $this->age . PHP_EOL;
        echo $this->roll;
    }
}

$std1 = new Student(); //Object initiate with 'new' keyword 
$std1->name = "Rahim"; //Assign value in public properties
$std1->age = 36;
$std1->roll = "547";
$std1->showInfo(); //Calling Method.
echo PHP_EOL;
print_r($std1); //print_r(Array/Object)
