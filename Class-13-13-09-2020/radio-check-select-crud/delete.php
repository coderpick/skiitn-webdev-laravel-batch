


<?php

include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$delete ="DELETE FROM user WHERE id='$id'";

if (mysqli_query($conn, $delete)) {
		//echo "New record create successfully";
		header("location:index.php?msg=".urlencode("Data delete successfully"));

	}else{
		die("Data delete failed").mysqli_error($conn);
	}


?>