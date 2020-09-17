<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 

	class Contact
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

    	
      public function show()
    	{
    		$query = "SELECT * FROM tbl_contact ORDER BY id DESC";
    		$result = $this->db->select($query);
		     return $result;
    	}

    	public function UpdateMessageStatus($id)
    	{
    			  $update ="UPDATE tbl_contact SET  status ='1' WHERE id='$id'";
                  $statusupdate = $this->db->update($update);
                  return $statusupdate;
    	}

    	public function showSeenMessage()
    	{
    			$query = "SELECT * FROM tbl_contact WHERE status = 1";
    		    $result = $this->db->select($query);
		        return $result;
    	}

    	public function deleteContact($id)
    	{
    			$query = "DELETE FROM tbl_contact WHERE id = '$id'";
    		    $result = $this->db->delete($query);

		       	if ($result) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Contact delete Successfully ! 
							   </div>';
							     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Contact delete Failed! 
							   </div>';
					  return $msg;
		        }
    	}

    	

    	

    }
