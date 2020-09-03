<?php


interface Moveable {
    public function move();
}


interface Test {
    public function testMove();
}


class Man implements Moveable,Test {

    public function move() {
    echo "A man can move<br/>";
    }


    public function testMove() {
    echo "Multiple Interface multiple inheritence<br/>";
    }


}


class Vehicle implements Moveable {

public function move() {
    echo "A Vehicle also can move";
}


}


$mans = new Man();
$mans->move();
$mans->testMove();
$machine = new Vehicle();
$machine->move();
?>