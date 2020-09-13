<?php
include 'dbConnect.php';
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}
echo 'success'?>