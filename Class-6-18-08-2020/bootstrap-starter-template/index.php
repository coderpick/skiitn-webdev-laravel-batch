<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
  	<?php 

  		 $nameErr=$emailErr=$passErr='';
  		 $name=$email=$password='';

  		 if(isset($_POST['submit']))
  		 {
  		 	$name = $_POST['name'];
  		 	$email = $_POST['email'];
  		 	$password = $_POST['password'];

  		 	if(!$name){
  		 		$nameErr ="Name field is required";
  		 	}
  		 	else{
  		 		$name =$name;
  		 	}
  		 }

  	 ?>

   	<div class="container">
   		<div class="row">
   			<div class="col-md-8 offset-md-2">   				
   				<h2>PHP Form Validation</h2>

   				<form action="" method="post">
   					<div class="form-group">
   						<label for="">Name</label>
   						<input type="text" name="name" class="form-control">
   						<span class="text-danger"><?php echo $nameErr??"" ?></span>
   					</div>
   					<div class="form-group">
   						<label for="">Email</label>
   						<input type="email" name="email" class="form-control">
   					</div>
   					<div class="form-group">
   						<label for="">Password</label>
   						<input type="password" name="password" class="form-control">
   					</div>
   					<div class="form-group">
   						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
   					</div>
   				</form>
   			</div>
			<hr>
			<h4>User Name: <?php echo $name??'' ?></h4>

   		</div>
   	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>