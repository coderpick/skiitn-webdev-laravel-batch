<?php
// Starting session
session_start();
 
// Storing session data
$_SESSION["firstname"] = "Hafizur";
$_SESSION["lastname"] = "Rahman";

/ Accessing session data
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
?>