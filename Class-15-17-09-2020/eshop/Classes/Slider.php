<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 

	class Slider
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

    	
    	public function insert($data,$file)
    	{
    		$title      = $this->fm->validation($data['title']); 
    		$details    = $this->fm->validation($data['details']); 

	    	$title      = mysqli_real_escape_string($this->db->link,$title);
	    	$details    = mysqli_real_escape_string($this->db->link,$details);


		$permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $file['image']['name'];
	    $file_size = $file['image']['size'];
	    $file_temp = $file['image']['tmp_name'];

	    $div = explode('.', $file_name);
	    $file_ext = strtolower(end($div));
	    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	    $uploaded_image = "uploads/".$unique_image;

	    if ($title == "" || $details =="")
	    {
		  $msg = "<span class='text-danger'>Field must not be empty !!</span>";
		  return $msg;
	    }
	    elseif ($file_size >1048567)
	    {
		    echo "<span class='text-danger'>Image Size should be less then 1MB!</span>";
		}
		elseif (in_array($file_ext, $permited) === false)
		{
		    echo "<span class='text-danger'>You can upload only:-".implode(', ', $permited)."</span>";
		}
	    else
	    {


	    	   move_uploaded_file($file_temp, $uploaded_image);

	          $insert ="INSERT INTO tbl_slider(title,details,image)VALUES('$title','$details','$uploaded_image')";


		    	$sliderinsert = $this->db->insert($insert);
		    	if ($sliderinsert) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
				    <a href="#" class="close" data-dismiss="alert">&times;</a>
				    <strong>Success!</strong> Slider insert Successfully ! 
				   </div>';
				     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong>  Slider insert failed ! 
			   </div>';
			     return $msg;
		        }
	       }		
    	}

    	public function show()
    	{
    		$query = "SELECT * FROM tbl_slider ORDER BY id DESC";
    		$result = $this->db->select($query);
		     return $result;
    	}

        public function showHomeSlider()
        {
        	$query = "SELECT * FROM tbl_slider LIMIT 6";
    		$result = $this->db->select($query);
		     return $result;
        }

	    public function edit($id){

				$query = "SELECT * FROM tbl_slider WHERE id = '$id'";

				$result = $this->db->select($query);
		         return $result;

			}

		public function update($data,$file,$id){
	
 		    $title      = $this->fm->validation($data['title']); 
    		$details    = $this->fm->validation($data['details']); 

	    	$title      = mysqli_real_escape_string($this->db->link,$title);
	    	$details    = mysqli_real_escape_string($this->db->link,$details);

			$permited  = array('jpg', 'jpeg', 'png', 'gif');
		    $file_name = $file['image']['name'];
		    $file_size = $file['image']['size'];
		    $file_temp = $file['image']['tmp_name'];

		    $div = explode('.', $file_name);
		    $file_ext = strtolower(end($div));
		    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		    $uploaded_image = "uploads/".$unique_image;

			     if ($title == "" || $details =="")
		    {
			  $msg = "<span class='text-danger'>Field must not be empty !!</span>";
			  return $msg;
		    }
		    else
		    {

		    if($file_name != null)
		    {

		    if ($file_size >1048567)
		    {
			    echo "<span class='text-danger'>Image Size should be less then 1MB!</span>";
			}
			elseif (in_array($file_ext, $permited) === false)
			{
			    echo "<span class='text-danger'>You can upload only:-".implode(', ', $permited)."</span>";
			}
		    else
		    {
	           
	        $query = "SELECT * FROM tbl_slider WHERE id = '$id'";
			$result = $this->db->select($query);

			if ($result)
				{
				 while ($row = $result->fetch_assoc()) {
				 		$dellink = $row['image'];
				 		unlink($dellink);
				 		}
				}


	    	 move_uploaded_file($file_temp, $uploaded_image);
		    $query ="
		    UPDATE tbl_slider SET 		    
		    title='$title',		  
		    image='$uploaded_image',		
		    details='$details' WHERE id ='$id'";

		    $sliderupdate = $this->db->update($query);

		    	if ($sliderupdate)
		    	{
		    		$msg = '<div class="alert alert-success fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Slider update Successfully ! 
					   </div>';
					     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Slider update failed ! 
					   </div>';
					     return $msg;
		        }

	        }
	    }
	    else
	    {
         
          $query ="
		    UPDATE tbl_slider SET 		    
		    title='$title',		
		    details='$details' WHERE id ='$id'";

		    $sliderupdate = $this->db->update($query);

		    	if ($sliderupdate)
		    	{
		    		$msg = '<div class="alert alert-success fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Slider update Successfully ! 
					   </div>';
					     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Slider update failed ! 
					   </div>';
					     return $msg;
		        }
          
	          }

	        }

			}


			public function delete($id)
			{
				   $query = "SELECT * FROM tbl_slider WHERE id = '$id'";
					$result = $this->db->select($query);

					if ($result)
						{
						 while ($row = $result->fetch_assoc()) {
						 		$dellink = $row['image'];
						 		unlink($dellink);
						 		}
						}

				$query = "DELETE FROM tbl_slider WHERE id ='$id'";
				$slider = $this->db->delete($query);
				if ($slider) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Slider delete Successfully ! 
							   </div>';
							     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Slider delete Failed! 
							   </div>';
					  return $msg;
		        }
				
			}

    }
