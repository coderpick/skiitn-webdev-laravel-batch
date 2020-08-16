<?php
  date_default_timezone_set('Asia/Dhaka');
//Calculate 60 days in the future

//seconds * minutes * hours * days + current time

$inTwoMonths = 60 * 60 * 24 * 60 + time(); 

setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);

?>
