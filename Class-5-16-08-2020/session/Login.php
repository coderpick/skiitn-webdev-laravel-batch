<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		if (isset($_POST['submit'])) {
			 
			 $name = $_POST['name'];

			 $_SESSION['username'] = $name;

			 header("Location:profile.php");
		}

	 ?>
		<form action="" method="post">
			<p><input type="name" name="name" placeholder="Enter your name"></p>
			<p><input type="submit" name="submit" value="Login"></p>
		</form>
</body>
</html>