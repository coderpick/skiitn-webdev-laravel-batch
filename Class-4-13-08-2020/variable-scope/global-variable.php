
<?php 
	$x =20; // global variable
	$y =30; // global variable
	
	function sum(){	
	 // echo	 $GLOBALS['x'] + $GLOBALS['y'];
		global $x,$y;
		echo $x+$y;
	}
	sum();
	echo "<br/>";
	echo $x+$y;
 ?>