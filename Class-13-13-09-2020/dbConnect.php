<?php
include 'config.php';
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
	die("ERROR: Could not connect. " . $conn->connect_error);
}
//echo 'success'
?>