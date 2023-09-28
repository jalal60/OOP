<?php
//Class and Object declare and use.
class Student //Student Class
{
    //'public' access modifier to use any of the class and object
    public $name; //Properties
    public $age;
    public $roll;
    public function __construct($name, $age, $roll) //Constructor
    {
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }
    public function __destruct()
    {
        echo "Destructor Called";
    }
    public function showInfo() //Method
    {
        echo "Name=" . $this->name . PHP_EOL; //$this-> keyword use to use properties within class
        echo "Age=" . $this->age . PHP_EOL;
        echo "Roll=" . $this->roll . PHP_EOL;
    }
}

$std1 = new Student("Jamal", 36, "0404706");
$std1->showInfo();
$std2 = new Student("Kamal", 32, "142566");
$std2->showInfo();
//$std1 = new Student(); //Object initiate with 'new' keyword 
// $std1->name = "Rahim"; //Assign value in public properties
// $std1->age = 36;
// $std1->roll = "547";
// $std1->showInfo(); //Calling Method.
// echo PHP_EOL;
//print_r($std1); //print_r(Array/Object)
