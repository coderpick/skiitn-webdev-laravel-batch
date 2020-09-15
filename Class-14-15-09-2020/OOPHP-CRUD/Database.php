<?php

/**
* 
*/
class Database 
{

	public $host 	=	DB_HOST;
	public $user 	=	DB_USER;
	public $pass 	=	DB_PASS;
	public $dbname 	=	DB_NAME;

	public $link;
	public $error;

 public function __construct(){
 	$this->connectDB();
 }
	private function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if (!$this->link) {
			$this->error = "Connection failed ".$this->link->connect_error;
			return false; 
		}
	}
	// select or read data

	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if ($result->num_rows>0) {
			return $result;
		}else{
			return false;
		}
	}
	// Insert Data
	public function insert($query){
		$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);	
		if($insert_row){
			header("Location: index.php?msg=".urlencode('Data Insert successfully'));
			exit;
		}	else{
			
			die ("Error : (" .$this->link->errno.")".$this->link->error);
		}
	}

	// Update Data
	public function update($query){
		$update_row = $this->link->query($query) or die($this->link->error.__LINE__);	
		if($update_row){
			header("Location: index.php?msg=".urlencode('Data Updated successfully'));
			exit;
		}	else{
			
			die ("Error : (" .$this->link->errno.")".$this->link->error);
		}
	}

	// Update Data
	public function delete($query){
		$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);	
		if($delete_row){
			header("Location: index.php?msg=".urlencode('Data Deleted successfully'));
			exit;
		}	else{
			
			die ("Error : (" .$this->link->errno.")".$this->link->error);
		}
	}

}//end Database Class

?>