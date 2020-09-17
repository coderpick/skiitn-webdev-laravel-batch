<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 

	class Cart
	{
	    
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

    	
    	public function addToCart($quantity,$id)
    	{

    		$quantity   = $this->fm->validation($quantity);
    
		    $quantity   = mysqli_real_escape_string($this->db->link,$quantity);
		    $productId  = mysqli_real_escape_string($this->db->link,$id);
		    $sId        = session_id();

		    if($quantity<=0){
		    	$msg ="Please enter quantity  at least 1";
		    	return $msg;
		    }


		    $squery  = "SELECT * FROM tbl_product WHERE id = '$productId'";
		    $result  = $this->db->select($squery)->fetch_assoc();

		    $productName = $result['product_name'];
		    $price		 = $result['price'];
		    $image  	 = $result['image'];

			$checkProduct = "SELECT * FROM tbl_cart WHERE product_id ='$productId' AND s_id='$sId'";

			$result = $this->db->select($checkProduct);
			if ($result) {
				$msg ="This product already add to Cart";
				return $msg;
			}
			else
			{
			    $query = "INSERT INTO tbl_cart(s_id,product_id,product_name,price,quantity,image)
			    VALUES('$sId','$productId','$productName','$price','$quantity','$image')";

			    $inserted_row = $this->db->insert($query);
			    if ($inserted_row) 
			    {
		    		 echo '<script>window.location="cart.php"</script>';  
		    		// $msg ="This product  add to Cart Successfully";
				    // return $msg;
		        }
		        else
		        {
				
				    echo '<script>window.location="404.php"</script>';  
		        }
	       	}	
    	}

    	public function getCartProduct()
		{
			   $sId =  session_id();
			   $query = "SELECT * FROM tbl_cart WHERE s_id = '$sId'";
			   $result = $this->db->select($query);
			   return $result;
			 

		}


	public function UpdateCart($cartId,$quantity)
		{
			$cartId      = mysqli_real_escape_string($this->db->link,$cartId);
		    $quantity    = mysqli_real_escape_string($this->db->link,$quantity);

		     if($quantity<=0){
		    	$msg ="Please enter quantity  at least 1";
		    	return $msg;
		    }


		    $query ="UPDATE tbl_cart SET quantity='$quantity' WHERE cart_id='$cartId'";

		    	$cartupdate = $this->db->insert($query);
		    	if ($cartupdate) 
		    	{
		    		//header("Location:cart.php");
		    		  echo '<script>window.location="cart.php"</script>';  
		        }
		        else
		        {
					$msg = "<span class='error'>Cart update Failed</span>";
		    		return $msg;
		        }
		}


		   	public function delPorductByCart($delId)
			{
				$delId = mysqli_real_escape_string($this->db->link,$delId);

				$query = "DELETE FROM tbl_cart WHERE cart_id ='$delId'";
				$deldata = $this->db->delete($query);
				if ($deldata) 
		    	{
		    	 echo "<script> window.location= cart.php</script>";
			    	
		        }
		        else
		        {
					$msg = "<span class='error'>Cart item not Deleted </span>";
		    		return $msg;
		        }
			}

		public function checkCartTable()
			{
				$sId   = session_id();
				$query = "SELECT * FROM tbl_cart WHERE s_id = '$sId'";
				$result = $this->db->select($query);
				return $result;
			}

	

	 public function addCustomerOrder($cmrId){

			 $sId = session_id();

			$query = "SELECT * FROM tbl_cart WHERE s_id = '$sId'";
			$getPro = $this->db->select($query);

			if ($getPro) {
				while ($result = $getPro->fetch_assoc()) {
									
					$productId 		= $result['product_id'];
					$productName 	= $result['product_name'];
					$quantity		= $result['quantity'];
					$price 			= $result['price']*$quantity;
					$image 			= $result['image'];	


					$query = "INSERT INTO tbl_order(cmrId,productId,productName,quantity,price,image,status,orderdate)
			    VALUES('$cmrId','$productId','$productName','$quantity','$price','$image',0,now())";
			     $inserted_row = $this->db->insert($query);
				}
			}

		}


		public function delCustomerCart()
		{
			$sId = session_id();
			$query = "DELETE FROM tbl_cart WHERE s_id = '$sId'";
			$result = $this->db->delete($query);
			
		}
	

	 public function getCustomerOroder($cmrId){

			$query = "SELECT * FROM tbl_order WHERE cmrId = '$cmrId'";
			$getOrder = $this->db->select($query);
            
            return $getOrder;
    }

    
	public function getAllOrderProduct()
	{
		$query = "SELECT tbl_order.id,tbl_order.productName,tbl_order.quantity,tbl_order.price,tbl_order.orderdate,tbl_order.status,tbl_customer.id,tbl_customer.name FROM tbl_order INNER JOIN tbl_customer ON tbl_order.cmrId = tbl_customer.id ORDER BY tbl_order.id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function GetCustomerinfo($cmrId)
	{
			$query = "SELECT * FROM tbl_customer WHERE id = '$cmrId'";
			$getinfo = $this->db->select($query);
            
            return $getinfo;
	}

	public function GetCustomerProduct($cmrId)
	{
			$query = "SELECT * FROM tbl_order WHERE cmrId = '$cmrId'";
			$getinfo = $this->db->select($query);
            
            return $getinfo;
	}

		public function CustomerOderupdate($cmrId)
		{
			$query = "UPDATE tbl_order SET status='1' WHERE cmrId = '$cmrId'";
			$statusupdate = $this->db->update($query);
            
            return $statusupdate;
		}

		public function DeleteCoustomerOder($cmrId)
		{
			$query = "DELETE FROM tbl_order WHERE cmrId = '$cmrId'";
			$result = $this->db->delete($query);
			if ($result) {
				  $msg = "<span class='text-success'>Oder  delete Successfully</span>";
		    		return $msg;
			}else
			{
				  $msg = "<span class='text-danger'>Oder  delete failed</span>";
		    		return $msg;
			}
			
		}


}