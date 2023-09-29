<?php
/* Final Keyword:
1. If you declare a class as final, it means it cannot be extended (inherited).
2. If you declare a method as final, it means it cannot be overridden by a subclass.
*/
final class Father
{
    final  public function print100()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo "$i\n";
        }
    }
}

//If final keyword in Class than Child class 'Son' can't Inherited 'Father'.
// class Son extends Father
// {
// }

//$objSon = new Son(); //can't create object if final in parent class
//$objSon->print100();
$objParent = new Father();
$objParent->print100();
