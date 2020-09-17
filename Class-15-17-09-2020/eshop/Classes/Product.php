
<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 

	class Product
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
    		
    	$productname  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['productname']));
		$catId  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['catId']));
		$brandId  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['brandId']));
		$details	  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['details']));
		$price  	  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['price']));
		$type  		  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['type']));
		$status  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['status']));

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $file['image']['name'];
	    $file_size = $file['image']['size'];
	    $file_temp = $file['image']['tmp_name'];

	    $div = explode('.', $file_name);
	    $file_ext = strtolower(end($div));
	    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	    $uploaded_image = "uploads/".$unique_image;

	    if ($productname == "" || $catId =="" || $brandId =="" || $details =="" || $price =="" || $type =="" || $status=="")
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
		    $query ="INSERT INTO tbl_product(catid,brandId,product_name,price,type,image,status,details)
		    VALUES('$catId','$brandId','$productname','$price','$type','$uploaded_image','$status','$details')";

		    	$productinsert = $this->db->insert($query);

		    	if ($productinsert)
		    	{
		    		$msg = '<div class="alert alert-success fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product insert Successfully ! 
					   </div>';
					     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product insert failed ! 
					   </div>';
					     return $msg;
		        }

	    }


    	}

    	public function show()
    	{
    		
    		$query = "SELECT tbl_product. *,tbl_brand.brandname,tbl_category.category_name FROM tbl_product
             	INNER JOIN tbl_brand
				ON
				tbl_product.brandId = tbl_brand.id
				INNER JOIN tbl_category
				ON
				tbl_product.catid = tbl_category.catId ORDER BY tbl_product.id DESC";
    		   $result = $this->db->select($query);
		       return $result;
    	}



	    public function edit($id){
				$query = "SELECT * FROM tbl_product WHERE id = '$id'";
				$result = $this->db->select($query);
		         return $result;

			}

		public function update($data,$file,$id){

	    $productname  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['productname']));
		$catId  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['catId']));
		$brandId  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['brandId']));
		$details	  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['details']));
		$price  	  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['price']));
		$type  		  = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['type']));
		$status  	  = @ mysqli_real_escape_string($this->db->link,$this->fm->validation($data['status']));

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
	    $file_name = $file['image']['name'];
	    $file_size = $file['image']['size'];
	    $file_temp = $file['image']['tmp_name'];

	    $div = explode('.', $file_name);
	    $file_ext = strtolower(end($div));
	    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
	    $uploaded_image = "uploads/".$unique_image;

	    if ($productname == "" || $catId =="" || $brandId =="" || $details =="" || $price =="" || $type =="" || $status=="")
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
           
        $query = "SELECT * FROM tbl_product WHERE id = '$id'";
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
		    UPDATE tbl_product SET 
		    catid='$catId',
		    brandId='$brandId',
		    product_name='$productname',
		    price='$price',
		    type ='$type',
		    image='$uploaded_image',
		    status='$status',
		    details='$details' WHERE id ='$id'";

		    $productupdate = $this->db->update($query);

		    	if ($productupdate)
		    	{
		    		$msg = '<div class="alert alert-success fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product update Successfully ! 
					   </div>';
					     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product update failed ! 
					   </div>';
					     return $msg;
		        }

	        }
	    }
	    else
	    {
         
          $query ="
		    UPDATE tbl_product SET 
		    catid='$catId',
		    brandId='$brandId',
		    product_name='$productname',
		    price='$price',
		    type ='$type',		
		    status='$status',
		    details='$details' WHERE id ='$id'";

		    $productupdate = $this->db->update($query);

		    	if ($productupdate)
		    	{
		    		$msg = '<div class="alert alert-success fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product update Successfully ! 
					   </div>';
					     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
					    <a href="#" class="close" data-dismiss="alert">&times;</a>
					    <strong>Success!</strong> Product update failed ! 
					   </div>';
					     return $msg;
		        }
          
	    }

	   }		
	}


			public function delete($id)
			{

	            $query = "SELECT * FROM tbl_product WHERE id = '$id'";
				$result = $this->db->select($query);

					if ($result)
						{
						 while ($row = $result->fetch_assoc()) {
						 		$dellink = $row['image'];
						 		unlink($dellink);
						 		}
						}

				$query = "DELETE FROM tbl_product WHERE id ='$id'";
				$proDelete = $this->db->delete($query);


				if ($proDelete) 
		    	{
		    		$msg = '<div class="alert alert-success fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Product delete Successfully ! 
							   </div>';
							     return $msg;
		        }
		        else
		        {
					$msg = '<div class="alert alert-danger fade in">
							    <a href="#" class="close" data-dismiss="alert">&times;</a>
							    <strong>Success!</strong> Product delete Failed! 
							   </div>';
					  return $msg;
		        }
				
			}

			public function showFeatureProduct()
			{
				   $query = "SELECT * FROM tbl_product WHERE type = 'feature'";
	               $result = $this->db->select($query);
	               return $result;
			}

	       public function showNewProduct()
			{
				   $query = "SELECT * FROM tbl_product WHERE type = 'new'";
	               $result = $this->db->select($query);
	               return $result;
			}

			public function getSingleProductbyId($id)
			{
				$query = "SELECT tbl_product.id,tbl_product.product_name,tbl_product.price,tbl_product.image,tbl_product.details,tbl_category.category_name,tbl_brand.brandname FROM tbl_product INNER JOIN tbl_category ON tbl_product.catid = tbl_category.catId INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.id WHERE tbl_product.id ='$id'";

    		        $result = $this->db->select($query);
		            return $result;
			}

			public function getCategoryPro($id)
			{
				 $query = "SELECT * FROM tbl_product WHERE catid = '$id'";
	               $result = $this->db->select($query);
	               return $result;
			}

			public function getSearchProduct($data)
			{
			 $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%$data%' OR details LIKE '%$data%'";
	               $result = $this->db->select($query);
	               return $result;
			}

    }
