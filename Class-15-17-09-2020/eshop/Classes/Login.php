<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 


	/**
	 * Login class
	 */
	class Login
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

	    public function adminLogin($email,$password)
	    {
	    	$email    = $this->fm->validation($email);
	    	$password = $this->fm->validation($password);

	    	$email    = mysqli_real_escape_string($this->db->link,$email);
	    	$password = mysqli_real_escape_string($this->db->link,$password);

	    	if(empty($email) || empty($password))
	    	{
	    		$loginmsg = '<div class="alert alert-danger fade in">
			    <a href="#" class="close" data-dismiss="alert">&times;</a>
			    <strong>Error!</strong> Username or Password must not be empty ! 
			   </div>';
			     return $loginmsg;
	    	}
	    	else 
	    	{
	    	  $query = "SELECT * FROM tbl_users WHERE email='$email' AND password = md5('$password')";
			  
			   $result = $this->db->select($query);	

			   	if ($result != false) 
					{
						$value = $result->fetch_assoc();
						
						Session::set('login',true);
						Session::set('userID',$value['id']);
						Session::set('userName',$value['name']);
						
						echo '<script>window.location="dashboard.php"</script>';
						
					}
					else
					{
						$loginmsg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Error!</strong> Username or Password not match ! 
					   </div>';
						return $loginmsg;
					}
	    	}


	    }


	}
 ?>