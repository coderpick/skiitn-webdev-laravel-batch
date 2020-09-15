<?php 
    include "layout/header.php";
?>
<?php
 $error = "";
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $address = $_POST['address'];

    if(empty($name) || empty($email) || empty($mobile) || empty($address))
    {
        $error ="All field are required";
    }
    else{

        $insert = "UPDATE users SET name=?,email=?,mobile=?,address=? WHERE id=?";

        if($stmt = $conn->prepare($insert))
        {
            $stmt->bind_param('ssssi',$p_name,$p_eamil,$p_mobile,$p_address,$param_id);

            $p_name     = $name;
            $p_eamil    = $email;
            $p_mobile   = $mobile;
            $p_address  = $address;
            $param_id  = $id;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("Location:index.php?msg=".urlencode("User info update successfully"));
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
    $mysqli->close();
}
else
{      
          // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        $sql = "SELECT * FROM users WHERE id=?";
        if($stmt = $conn->prepare($sql))
        {
            $stmt->bind_param("i", $param_id);            
            // Set parameters
            $param_id = $id;

            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows ==1)
                {
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                   

                }
                else{
                    $error ='No record found this id';
                }
            }
        }
        else{
                $error = "Oops! Something went wrong. Please try again later.";
            }

    }


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
        </div>
    </div>
    

