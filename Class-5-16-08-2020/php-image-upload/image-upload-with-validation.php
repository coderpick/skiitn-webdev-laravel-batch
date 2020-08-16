<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>php Image upload with validation</title>
	</head>
	<body>
		
		<?php
		/* $permited  = array('jpg', 'jpeg', 'png', 'gif');
					$file_name ='man.JPG';
					$div       = explode('.',$file_name);
					$file_ext = strtolower(end($div));
					echo $uniqueString = substr(md5(time()),0,10).".".$file_ext;*/
				$imageError='';
				$success    ="";
				if(isset($_POST['submit']))
				{
				
					$file_name   =  $_FILES["image"]["name"];
					$file_size 	 =  $_FILES["image"]["size"];
					$file_tmp    =  $_FILES["image"]["tmp_name"];

					$permited  = array('jpg', 'jpeg', 'png', 'gif');

					$div 	   = explode(".", $file_name);
					$file_ext  = strtolower(end($div));

					$unique_image = substr(md5(time()), 0, 8).'.'.$file_ext;

					$uploaded_image = "uploads/".$unique_image;

				if (empty($file_name))
				{
				   $imageError= "<span class='error'>Please Select any Image !</span>";
				}
				elseif ($file_size >1048567)
				{
				$imageError = "<span class='error'>Image Size should be less then 1MB!</span>";
				}
				elseif (in_array($file_ext, $permited) === false)
				{
				$imageError = "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
				}
				else
				{
					move_uploaded_file($file_tmp, $uploaded_image);
					$success="<span>File upload successfully</span>";
				}
			}
		?>
		<form action="" method="post" enctype="multipart/form-data">
			
			<p>Upload Image</p>
			<p>
				<input type="file" name="image">
				<span style="color:red"><?php echo  $imageError??"" ?></span>
			</p>
			<p style="color:green"><?php echo $success??"" ?></p>
			<p><button type="submit" name="submit">Upload</button></p>
		</form>
	</body>
</html>