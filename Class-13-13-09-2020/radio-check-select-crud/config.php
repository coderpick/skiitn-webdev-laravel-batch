<?php
$conn = mysqli_connect('localhost', 'root', '', 'bar_crud');

if (!$conn) {
	die("connection failed") . mysqli_connect_error();
}
//echo "Success";
?>