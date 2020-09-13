

<?php

include "config.php";
$select ="select * from user";
$result  = mysqli_query($conn,$select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<?php
  if (isset($_GET['msg'])) {
  echo "<span class='alert alert-success fade in'>".$_GET['msg']."</span>"; 
  }
?>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
       <table class="table table-bordered">
       <tr>
           <th>S/N</th>           
           <th>Name</th>
           <th>Gender</th>
           <th>HOBBI</th>
           <th>CITY</th>
           <th>Edit</th>
       </tr>
       <?php
        if(mysqli_num_rows($result)>0){
          $i=1;
            while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['hobbi'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> ||
                    <a onclick="return confirm('Are you sure delete!')" href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                    </td>
                </tr>
            <?php }}?>
   </table>
    <a href="add.php" class="btn btn-info">Add Data</a>
    </div>
  </div>
</div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>