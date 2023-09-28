<?php
/*
Inheritance
1.Inheritance sets up a "like parent, like child" relationship between classes.
2.Instead of rewriting code, the child class can reuse or change what it gets from the parent.
3.One class (the child) can use everything from another class (the parent).
*/

class Father
{
    public function print100()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
    public function printMsg()
    {
        echo "This is from Parent Message";
    }
}

class Son extends Father
{
    // Overriding Methods
    public function print100()
    {
        for ($i = 0; $i <= 80; $i++) {
            echo $i . PHP_EOL;
        }
        // Calling Parent Method.
        parent::printMsg();
    }
}

$obj = new Son(); //inistance of Son
$obj->print100();
