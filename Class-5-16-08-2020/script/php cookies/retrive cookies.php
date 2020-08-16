<?php
if(isset($_COOKIE['lastVisit']))
$visit = $_COOKIE['lastVisit'];
else
echo "You've got some stale cookies!";


echo "Your last visit was - ". $visit;
?>