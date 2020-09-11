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
$error="";
if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $address = $_POST['address'];
    if(empty($name) || empty($email) || empty($mobile) || empty($address))
    {
        $error ="All field are required";
    }
    else{

         $insert = "INSERT INTO users(name,email,mobile,address)VALUES('$name','$email','$mobile','$address')";
         $result = mysqli_query($conn,$insert);
         if ($result) {            
            header("location:index.php?msg=".urlencode('User information save seccessfully'));
         }else{
             echo "Data insert failed";
         }

    }
}

?>

   <div class="container">
       <h1>PHP CRUD</h1>
       <hr>
       <a href="index.php" class="button button-outline">Back</a>      
      
      <p style="color:red"> <?php echo $error??"";?> </p>
       
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <fieldset>
                <label for="nameField">Name</label>
                <input type="text" name="name" placeholder="Name" id="nameField">

                <label for="emailField">Email</label>
                <input type="email" name="email" placeholder="Email" id="emailField">

                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" placeholder="Mobile number" id="mobile">

                <label for="address">Address</label>
                <textarea name="address" placeholder="Enter address"  id="address"></textarea>

                <input class="button-primary" type="submit" name="submit" value="Submit">
            </fieldset>
        </form>

    </div>
</body>
</html>