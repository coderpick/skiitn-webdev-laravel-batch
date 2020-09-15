<?php
include "inc/header.php";
include "config.php";
include "Database.php";

?>

<?php

$db = new Database();
$query = "SELECT * FROM tbl_users";
$read = $db->select($query);
?>
<?php
	if(isset($_GET['msg'])){
		echo "<span class='alert alert-success fade in'>".$_GET['msg']."</span>";

		
	}

?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<table class="table table-bordered">
				<tr>
					<th>SL/No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Skill</th>					
					<th>Action</th>					
				</tr>
				<?php if($read) {?>			
					
				<?php
				$i=1;
				 while ($row=$read->fetch_assoc()){?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['skill'];?></td>
					<td>
					<a class="btn btn-info" href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a>		
					</td>
				</tr>
				<?php }?>
				<?php } else{ ?>
				<p>Data is not available !!</p>
				<?php }?>
			</table>
			<a href="create.php" class="btn btn-primary">Add Data</a>
		</div>
	</div>
</div>

<?php
include "inc/footer.php";
?>
