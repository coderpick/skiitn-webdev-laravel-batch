<?php 

	$conn = new mysqli('localhost','root','','smartbazer_db');

	if (!$conn) {
		die('Database connecton failed');
	}


	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$mobile   = $_POST['mobile'];
	$message  = $_POST['message'];

	$insert = "INSERT INTO tbl_contact(name,email,mobile,message)VALUES('$name','$email','$mobile','$message')";

	$process = $conn->query($insert);

	if ($process == TRUE) {
		echo "<div class='text-success'> <strong>Success!</strong> Thanks for contact us.</div>";
	}
	else
	{
		echo "Contact send failed";
	}

 ?>