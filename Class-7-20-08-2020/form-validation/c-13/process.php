<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender']; 
    $address=$_POST['address'];   
    $hobbi=$_POST['hobbi']; 
    $chk="";  
    foreach($hobbi as $chk1)  
       {  
        $chk .= $chk1.",";  
       } 
	$select="";
	foreach($_POST['district'] as $selected){
		$select .=$selected;
	}

echo "<p><i>Your name is</i>: $fname $lname</p>";
echo "<p>Your email is $email</p>";
echo "<p>Your Gender is $gender</p>";
echo "<p>Your Hobbies is $chk</p>";
echo "<p>Your District is: $select</p>";
echo "<p>Your Address is: $address</p>";

}
   
 
?>
