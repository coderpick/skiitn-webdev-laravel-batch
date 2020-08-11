<?php
 $person =  array(
	 'Tony' => 25,
	 'Bony' => 32,
	 'mony' => 19, 
	);

//print_r($person);


 foreach ($person as $key => $value) {
 	 echo "Person Name is ".$key. " and age is ".$value."<br/>";
 }


?>