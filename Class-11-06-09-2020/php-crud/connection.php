<?php

$conn = mysqli_connect('localhost','root','','skit_crud');

if(!$conn)
{
    die('Database connection failed').mysqli_connect_error();
}
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);
?>