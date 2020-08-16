<?php 
	session_start();

	if ($_SESSION['username'] == null) {

		header("Location:Login.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile page</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username']??""; ?></h1>
	<hr>
	<a href="logout.php">Logout</a>
</body>
</html>