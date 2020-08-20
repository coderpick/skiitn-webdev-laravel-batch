<!DOCTYPE html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="myform">
       
        <form action="process.php" method="post" enctype="multipart/form-data">
           <h1>Simple Contact Form</h1>
           <p>First Name: <input type="text" name="fname"></p>
           <p>Last Name: <input type="text" name="lname"></p>
           <p>Email: <input type="email" name="email"></p>
           <p>Gender: <input type="radio" name="gender" id="male" value="Male">
           <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
            </p>
           <p>Hobbies:
           <input type="checkbox" name="hobbi[]" id="cricket" value="Cricket">
            <label for="cricket">Cricket</label>
            <input type="checkbox" name="hobbi[]" id="traveling" value="Traveling">
            <label for="traveling">Traveling</label>
            <input type="checkbox" name="hobbi[]" id="swimming" value="Swimming">
            <label for="swimming">Swimming</label>
            </p>
            <p>
                Your Home District:
                <select name="district[]">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                </select>
            </p>
            <p>Address:<br/>
                <textarea cols="30" rows="5" name="address"></textarea>
            </p>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
            
        </form>
    </div>
</div>
</body>
</html>
