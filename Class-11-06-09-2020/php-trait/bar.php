<?php
include("foo.php");
class Bar{
    // Using the Trait Here
     use Foo;
}
 
 $obj = new Bar;
 
 // Executing the method from trait
echo $obj->sayHello(); //Hello
echo "\n";
echo $obj->sayWorld(); // World
?>