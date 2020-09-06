<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
    <style>
        table{
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th,td{
            border:1px solid #444;
            padding: 12px;
        }
    </style>
</head>
<body>

    <h3>Users List</h3>
    <hr>
    <table>
        <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Action</th>
        </tr>
        <?php 

            $slq ="SELECT * FROM users";
            $result = mysqli_query($conn,$slq);
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {?>
                  <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                  </tr>
             <?php 
                 }
            }        
        
        ?>
    </table>
    
</body>
</html>