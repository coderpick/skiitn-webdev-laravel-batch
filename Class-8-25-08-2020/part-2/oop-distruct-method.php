<?php

class Opp
{

	 public function __construct(){
	     echo "Welcome to PHP World!\n";
	 }
	 public function sayHello(){
	     echo "Hello World\n";
	 }
  
	 public function __destruct(){
	     echo "<br/>I'm about to disappear - bye bye!";
	 }
 
}

$obj = new Opp;
 
echo "<br>";
 
$obj->sayHello();
 
?>
