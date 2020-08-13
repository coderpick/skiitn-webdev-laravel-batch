<?php

$username= "asffD";
if(!preg_match("([^a-z])",$username)){
	echo "Username is valid";
	}else{
		echo "Username is invalid";
	}

?>