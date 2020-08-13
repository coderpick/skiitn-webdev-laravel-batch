
<?php
$pswd = "jasonAz12Rfff";
if (!eregi("^[a-zA-Z0-9]{8,10}$", $pswd))
echo "Invalid password!";
else
echo "Valid password!";
?>