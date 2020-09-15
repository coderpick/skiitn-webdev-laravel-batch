<?php
include "inc/header.php";
include "config.php";
include "Database.php";
?>

<?php
$id=$_GET['id'];

$db = new Database();

$query = "SELECT * FROM tbl_users WHERE id=$id";
$getData = $db->select($query)->fetch_assoc();


if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	$email = mysqli_real_escape_string($db->link,$_POST['email']);
	$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
	if($name=="" || $email == "" || $skill == ""){
		$error = "Field must not be Empty!!";
	}else{
		
		$query = "Update tbl_users SET 
			 name	='$name',
			 email	='$email',
			 skill	='$skill' 
			 WHERE id= $id;	"; 
		$update =$db->update($query);
	}
}
?>
<?php
	
if (isset($_POST['delete'])) {
	$query= "DELETE FROM tbl_users WHERE id=$id";
	$deleteData=$db->delete($query);
}

?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php
			if(isset($error)){
					echo "<span class='alert alert-danger fade in'>".$error."</span>";
					
				}
			?>
		<div class="add-form">
				<form class="form-horizontal" action="update.php?id=<?php echo $id; ?>" method="post">
				    <div class="form-group">
			            <label for="inputName" class="control-label col-xs-2">Name</label>
			            <div class="col-xs-10">
			                <input type="text" name="name" class="form-control" id="inputName" value="<?php echo $getData['name'];?>">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="inputEmail" class="control-label col-xs-2">Email</label>
			            <div class="col-xs-10">
			                <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $getData['email'];?>">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="inputSkill" class="control-label col-xs-2">Skill</label>
			            <div class="col-xs-10">
			                <input type="text" name="skill" class="form-control" id="inputSkill" value="<?php echo $getData['skill'];?>">
			            </div>
			        </div>			   		        
			        <div class="form-group">
			            <div class="col-xs-offset-2 col-xs-10">
			                <button type="submit" name="submit" class="btn btn-primary">Update</button>		               
			                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
			                <a class="btn btn-warning" href="index.php">Cancel</a>
			            </div>
			        </div>
			    </form>
			    <a href="index.php" class="btn btn-info">Go Back</a>
			</div>
		</div>
	</div>
</div>

<?php
include "inc/footer.php";
?>
