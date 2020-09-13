<?php

include "config.php";

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$gender = $_POST['gender'];

	$hobbi = $_POST['hobbi'];

	$check = "";

	foreach ($hobbi as $checked) {
		$check .= $checked . ",";
	}

	$city = $_POST['city'];
	$selected = "";

	foreach ($city as $select) {
		$selected .= $select;
	}

	$sql = "INSERT INTO user(name,gender,hobbi,city)VALUES('$name','$gender','$check','$selected')";
	if (mysqli_query($conn, $sql)) {
		//echo "New record create successfully";
		header("location:index.php?msg=" . urlencode("Data insert successfully"));

	} else {
		die("Data insert failed") . mysqli_error($conn);
	}
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<p>Name:<input type="text" name="name"></p>
		<p>Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		</p>
		<p>Hobbi:
		<input type="checkbox" name="hobbi[]" value="Reading">Reading
		<input type="checkbox" name="hobbi[]" value="Traveling">Traveling
		<input type="checkbox" name="hobbi[]" value="Swiming">Swiming
		</p>
		<p>City:
		<select name="city[]">
				<option value="Dhaka">Dhaka</option>
				<option value="Rajshahi">Rajshahi</option>
				<option value="Khulna">Khulna</option>
		</select>
		</p>
		<p><input type="submit" name="submit" value="Insert"></p>
	</form>
</body>
</html>