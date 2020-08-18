<?php
	$num = '4'; 
	$string = "This string has four words. This string has four words.";
	
 	$string = preg_replace('/four/', $num, $string);
  	echo $string; /* Output: 'This string has 4 words.' */


?>