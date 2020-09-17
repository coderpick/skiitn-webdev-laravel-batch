<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 

	class Brand
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

    	
    	public function insert($brandname,$status)
    	{
    		$brandname    = $this->fm->validation($brandname); 
	    	$brandname    = mysqli_real_escape_string($this->db->link,$brandname);
	    	$status      = $status;

	    	if (empty($brandname) || empty($status)) 
	    	{
	    		$msg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong> Brand field must not be empty ! 
			   </div>';
			     return $msg;
	    	}
	    	else
	       {
	          $insert ="INSERT INTO tbl_brand(brandname,status)VALUES('$brandname','$status')";


		    	$brandinsert = $this->db->insert($insert);
		    	if ($brandinsert) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
				    <a href="#" class="close" data-dismiss="alert">&times;</a>
				    <strong>Success!</strong> Brand insert Successfully ! 
				   </div>';
				     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong>  Brand insert failed ! 
			   </div>';
			     return $msg;
		        }
	       }		
    	}

    	public function show()
    	{
    		$query = "SELECT * FROM tbl_brand ORDER BY id DESC";
    		$result = $this->db->select($query);
		     return $result;
    	}



	    public function edit($id){

				$query = "SELECT * FROM tbl_brand WHERE id = '$id'";

				$result = $this->db->select($query);
		         return $result;

			}

		public function update($brandname,$status,$id){

						$brandname    = $this->fm->validation($brandname); 
				    	$brandname    = mysqli_real_escape_string($this->db->link,$brandname);
				    

				    	if (empty($brandname)) 
				    	{
				    		$msg = '<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <strong>Error!</strong> Brand field must not be empty ! 
						   </div>';
						     return $msg;
				    	}
				    	else
				       {
				          $update ="UPDATE tbl_brand SET brandname ='$brandname', status ='$status' WHERE id='$id'";


					    	$brandupdate = $this->db->update($update);
					    	if ($brandupdate) 
					    	{
					    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Brand update Successfully ! 
							   </div>';
							     return $msg;
					        }
					        else
					        {
								$msg = '<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert">&times;</a>
						    <strong>Error!</strong>  Brand update failed ! 
						   </div>';
						     return $msg;
					        }
				       }		
			}


			public function delete($id)
			{
				$query = "DELETE FROM tbl_brand WHERE id ='$id'";
				$brandDel = $this->db->delete($query);
				if ($brandDel) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Brand delete Successfully ! 
							   </div>';
							     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Brand delete Failed! 
							   </div>';
					  return $msg;
		        }
				
			}

    }
