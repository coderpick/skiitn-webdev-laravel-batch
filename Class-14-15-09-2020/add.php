<?php 
    include "layout/header.php";
?>
<?php
 $error = "";
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

        $insert = "INSERT INTO users(name,email,mobile,address)VALUES(?,?,?,?)";

        if($stmt = $conn->prepare($insert))
        {
            $stmt->bind_param('ssss',$p_name,$p_eamil,$p_mobile,$p_address);

            $p_name     = $name;
            $p_eamil    = $email;
            $p_mobile   = $mobile;
            $p_address  = $address;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("Location:index.php?msg=".urlencode("User info save successfully"));
                exit();
            } 
            else
            {
                $error =  "Something went wrong. Please try again later.";
            }
        }
        $stmt->close();
       
    }
     // Close connection
    $conn->close();
}


?>
    <div class="container">
    <h3>PHP CRUD</h3>
    <hr>
        <div class="row">
            <div class="column column-80 column-offset-10">
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
        </div>
    </div>
    

