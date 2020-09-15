<?php
include "inc/header.php";
include "config.php";
include "Database.php";
?>

<?php
$db = new Database();
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	$email = mysqli_real_escape_string($db->link,$_POST['email']);
	$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
	if($name=="" || $email == "" || $skill == ""){
		$error = "Field must not be Empty!!";
	}else{
		
		$query = "INSERT INTO tbl_users(name,email,skill)VALUES('$name','$email','$skill')";
		$create =$db->insert($query);
	}
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
				<form class="form-horizontal" action="" method="post">
				    <div class="form-group">
			            <label for="inputName" class="control-label col-xs-2">Name</label>
			            <div class="col-xs-10">
			                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="inputEmail" class="control-label col-xs-2">Email</label>
			            <div class="col-xs-10">
			                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
			            </div>
			        </div>
			        <div class="form-group">
			            <label for="inputSkill" class="control-label col-xs-2">Skill</label>
			            <div class="col-xs-10">
			                <input type="text" name="skill" class="form-control" id="inputSkill" placeholder="Skill">
			            </div>
			        </div>			   		        
			        <div class="form-group">
			            <div class="col-xs-offset-2 col-xs-10">
			                <button type="submit" name="submit" class="btn btn-primary">Insert</button>
			                <button type="reset"  class="btn btn-danger">Cancel</button>
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
