<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

<?php
include "connection.php";
$error = "";
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$id = $_POST['id'];

	if (empty($name) || empty($email) || empty($mobile) || empty($address)) {
		$error = "All field are required";
	} else {

		$insert = "Update users SET name='$name',email='$email', mobile='$mobile',address='$address'  WHERE id='$id'";
		$result = mysqli_query($conn, $insert);
		if ($result) {
			header("location:index.php?msg=" . urlencode('User information update seccessfully'));
		} else {
			echo "Data insert failed";
		}

	}
} else {
	if (isset($_GET['id']) && $_GET['id'] != null) {

		$id = $_GET['id'];

		$select = "SELECT * FROM users WHERE id='$id' LIMIT 1";
		$result = mysqli_query($conn, $select);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	}
}

?>

   <div class="container">
       <h1>PHP CRUD</h1>
       <hr>
       <a href="index.php" class="button button-outline">Back</a>

      <p style="color:red"> <?php echo $error ?? ""; ?> </p>

       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <fieldset>
                <label for="nameField">Name</label>
                <input type="text" name="name" placeholder="Name" value="<?php echo $row['name'] ?? ''; ?>" id="nameField">

                <label for="emailField">Email</label>
                <input type="email" name="email" placeholder="Email"value="<?php echo $row['email'] ?? ''; ?>" id="emailField">

                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" placeholder="Mobile number"value="<?php echo $row['mobile'] ?? ''; ?>" id="mobile">

                <label for="address">Address</label>
                <textarea name="address" placeholder="Enter address"  id="address"><?php echo $row['address'] ?? ''; ?>
                </textarea>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <input class="button-primary" type="submit" name="submit" value="Update">
            </fieldset>
        </form>

    </div>
</body>
</html>