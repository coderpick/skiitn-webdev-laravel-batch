<?php 
	//oop class 
	class Fruit{

	 public	$name; /* propertiy*/
	 public $color;

	 /* method or function */
	 public function setName($name)
	 {
	 	$this->name = $name;
	 }

	 public function setColor($color)
	 {
	 	$this->color= $color;
	 }


    /* method*/
	 public function getFuritInfo()
	 {
	   echo "The furit name is $this->name and fruit color is $this->color \n";
	 }

	}

$apple = new Fruit;

$apple->setName('Apple');
$apple->setColor('Red');
$apple->getFuritInfo();


 ?>