
<?php

include "config.php";

if (isset($_GET['id'])) {

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

		$id = $_POST['id'];
		$update = "UPDATE user SET name='$name',gender='$gender',hobbi='$check',city='$selected' WHERE id='$id'";
		if (mysqli_query($conn, $update)) {
			header('Location: index.php?msg=' . urlencode("Data Update Successuflly"));
		}
	} else {
		$id = $_GET['id'];
		$sql = "SELECT * FROM user WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);

		?>
<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
    <form action="" method="post">
        <p>Name:<input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
        <p>Gender:
        <input type="radio" name="gender" value="Male" <?php if ($row['gender'] == "Male") {echo "checked";}?>>Male
        <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == "Female") {echo "checked";}?>>Female
        </p>
        <?php
$chkbox = $row['hobbi'];
		$arr = explode(",", $chkbox);
		?>
        <p>Hobbi:
        <input <?php if (in_array("Reading", $arr)) {echo "checked";}?> type="checkbox" name="hobbi[]" value="Reading">Reading
        <input <?php if (in_array("Traveling", $arr)) {echo "checked";}?> type="checkbox" name="hobbi[]" value="Traveling">Traveling
        <input <?php if (in_array("Swiming", $arr)) {echo "checked";}?> type="checkbox" name="hobbi[]" value="Swiming">Swiming
        </p>
        <p>City:
        <select name="city[]">
                <option <?php if ($row['city'] == "Dhaka") {echo "selected";}?>>Dhaka</option>
                <option <?php if ($row['city'] == "Rajshahi") {echo "selected";}?>>Rajshahi</option>
                <option <?php if ($row['city'] == "Khulna") {echo "selected";}?>>Khulna</option>
        </select>
        </p>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <p><input type="submit" name="submit" id="submit" value="Update"></p>
    </form>
</body>
</html>
<?php }}?>