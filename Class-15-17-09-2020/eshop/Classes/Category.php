<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 


	/**
	 * Login class
	 */
	class Category
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

    	
    	public function addCategory($category,$status)
    	{
    		$category    = $this->fm->validation($category); 
	    	$category    = mysqli_real_escape_string($this->db->link,$category);
	    	$status      = $status;

	    	if (empty($category) || empty($status)) 
	    	{
	    		$msg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong> Category field must not be empty ! 
			   </div>';
			     return $msg;
	    	}
	    	else
	       {
	          $insert ="INSERT INTO tbl_category(category_name,status)VALUES('$category','$status')";


		    	$catinsert = $this->db->insert($insert );
		    	if ($catinsert) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
				    <a href="#" class="close" data-dismiss="alert">&times;</a>
				    <strong>Success!</strong> Category insert Successfully ! 
				   </div>';
				     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong>  Category insert failed ! 
			   </div>';
			     return $msg;
		        }
	       }		
    	}

    	public function showCategory()
    	{
    		 $query = "SELECT * FROM tbl_category ORDER BY catId DESC";
    		$result = $this->db->select($query);
		     return $result;
    	}


			public function catDelById($id)
			{
				$query = "DELETE FROM tbl_category WHERE catId ='$id'";
				$catDel = $this->db->delete($query);
				if ($catDel) 
		    	{
		    		$msg = "<span class='text-success'>Catagory Delete successfully</span>";
		    		return $msg;
		        }
		        else
		        {
					$msg = "<span class='text-error'>Catagory Delete Failed</span>";
		    		return $msg;
		        }
				
			}


			public function edit($id){

				$query = "SELECT * FROM tbl_category WHERE catId = '$id'";

					$result = $this->db->select($query);
		            return $result;

			}

			public function CatUpdate($category,$status,$id)
			{
						$category    = $this->fm->validation($category); 
				    	$category    = mysqli_real_escape_string($this->db->link,$category);
				    

				    	if (empty($category)) 
				    	{
				    		$msg = '<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <strong>Error!</strong> Category field must not be empty ! 
						   </div>';
						     return $msg;
				    	}
				    	else
				       {
				          $update ="UPDATE tbl_category SET category_name ='$category', status ='$status' WHERE catId='$id'";


					    	$catupdate = $this->db->update($update);
					    	if ($catupdate) 
					    	{
					    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Category update Successfully ! 
							   </div>';
							     return $msg;
					        }
					        else
					        {
								$msg = '<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <strong>Error!</strong>  Category update failed ! 
						   </div>';
						     return $msg;
					        }
				       }		
			}

    }
