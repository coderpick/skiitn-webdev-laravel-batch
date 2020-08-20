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
  		 	$name     = validate($_POST['name']);
  		 	$email    = validate($_POST['email']);
  		 

  		 	if(empty($name)){
  		 		$nameErr ="Name field is required";
  		 	}
  		 	else{
  		 		$name =$name;
  		 	}
      if(empty($email)){
          $emailErr ="Email field is required";
        }
        else{
          $email =$email;
        }

  		 }

       $languages = @$_POST['language'];

       $checkItems = "";
       if($languages !=null)
       {
           foreach ($languages as  $value) {
              $checkItems .= $value.',';
             }
       }
      

       $city= @$_POST['city'];

       $selectedCity = "";
       if ($city !=null) {
       foreach ($city as $value) {
         $selectedCity .=$value;
       }
       }
       

       function validate($data)
       {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
       }

  	 ?>

   	<div class="container">
   		<div class="row">
   			<div class="col-md-8 offset-md-2">   				
   				<h2>PHP Form Validation</h2>

   				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
   					<div class="form-group">
   						<label for="">Name</label>
   						<input type="text" name="name" class="form-control" value="<?php echo $name??"";?>">
   						<span class="text-danger"><?php echo $nameErr??"" ?></span>
   					</div>
   					<div class="form-group">
   						<label for="">Email</label>
   						<input type="email" name="email" class="form-control">
              <span class="text-danger"><?php echo $emailErr??"" ?></span>
   					</div>   				   
            <div class="form-group">
              <label for="">Language</label>             
             <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="language[]" value="PHP">
              <label class="form-check-label" for="inlineCheckbox1">PHP</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="language[]" value="JAVA">
              <label class="form-check-label" for="inlineCheckbox1">JAVA</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="language[]" value="PYTHON">
              <label class="form-check-label" for="inlineCheckbox1">PYTHON</label>
            </div>
            </div>
            <div class="form-group">
              <label for="">City</label>
              <select name="city[]" class="form-control">
                 <option value="Natore">Natore</option>
                 <option value="Rajshahi">Rajshahi</option>
                 <option value="Pabna">Pabna</option>
                 <option value="Bogra">Bogra</option>                 
               </select>
            </div>
   					<div class="form-group">
   						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
   					</div>
   				</form>
   			</div>
			<hr>

   		</div>
   	</div>

        <h4>User Name: <?php echo $name??'' ?></h4>
      <h4>User Eamil: <?php echo $email??'' ?></h4>
      <h4>Favourite Language: <?php echo $checkItems??'' ?></h4>
      <h4>User City: <?php echo $selectedCity??'' ?></h4>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>