<?php
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<hr>

<?php
	$startdate = strtotime("Sunday");

	$enddate = strtotime("+6 weeks",$startdate);

	while ($startdate < $enddate) 
	{
		echo date("M d", $startdate),"<br>";

		$startdate = strtotime("+1 week", $startdate);
	}
?>
<h2>Upcoming Birthday</h2>
<?php
	$d1 = strtotime("February 09");
	$d2 = ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 9th of February.";
?>
<h2>php time</h2>
<?php 

	$t=  time();	

	echo date('d-m-y h:i:sa',$t);
 ?>
 <hr>
 <?php 
 	echo  uniqid();
  ?>