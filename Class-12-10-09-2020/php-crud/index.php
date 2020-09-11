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

   <div class="container">
       <h1>PHP CRUD</h1>
       <hr>
       <a href="create.php" class="button">Add New</a>
       <br>
       <h3 style="color:green">
           <?php
               if (isset($_GET['msg'])) {
                  echo $_GET['msg'];
               }
           ?>
       </h3>
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

            $slq = "SELECT * FROM users";
            $result = mysqli_query($conn, $slq);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {?>
                            <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
                                        <a href="" class="button button-outline">Delete</a>
                                    </td>
                            </tr>
            <?php
            }
            }

        ?>
    </table>
</div>
</body>
</html>