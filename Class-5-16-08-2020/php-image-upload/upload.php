<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Image Upload</title>
</head>
<body>

	<?php 

		$imageError='';

		if(isset($_POST['submit']))
		{
		  // var_dump($_FILES);
			$fileName 	= $_FILES['image']['name'];
			$fileType 	= $_FILES['image']['type'];
			$fileSize   = $_FILES['image']['size'];
			$fileTmpName = $_FILES['image']['tmp_name'];
			$fileError   = $_FILES['image']['error'];

			if($fileError>0){
				$imageError = "Please select image first";
			}
			else
			{

				$fileDir = "uploads/";

				move_uploaded_file($fileTmpName, $fileDir.$fileName);

				echo "File upload success";

			}


		}

	 ?>
	
		<form action="" method="post" enctype="multipart/form-data">
			
			<p>Upload Image</p>
			<p>
				<input type="file" name="image">
				<span style="color:red"><?php echo  $imageError??"" ?></span>
			</p>
			<p><button type="submit" name="submit">Upload</button></p>

		</form>

</body>
</html>