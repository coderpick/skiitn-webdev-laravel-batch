<?php


interface Moveable 
{

    public function move();
}

class Man implements Moveable {

    public function move() 
    {
        echo "A man can move<br/>";
    }

}

 class Vehicle implements Moveable 
 {
    public function move() 
    {
    echo "A Vehicle also can move";
    }

}

$man = new Man;
$man->move();

$vehicle = new Vehicle;
$vehicle->move();

?>