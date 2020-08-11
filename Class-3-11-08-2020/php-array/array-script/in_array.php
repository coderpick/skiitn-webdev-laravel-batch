<?php
$newCity = "Chittagong";

$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

if(in_array($newCity,$city))
{
echo "In Bangladesh most of the islamic scholars lives in $newCity";
}
else
{
	echo "This array element not found";
	
}

?>

