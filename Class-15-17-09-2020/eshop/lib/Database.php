  
 <?php 
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../config/config.php');
  ?>
<?php

Class Database{

     public $host   = DB_SERVER;
     public $user   = DB_USERNAME ;
     public $pass   = DB_PASSWORD;
     public $dbname = DB_NAME;
     
     
     public $link;
     public $error;
     
     public function __construct(){
      $this->connectDB();
     }
     
    private function connectDB(){

     $this->link = new mysqli($this->host, $this->user, $this->pass, 
      $this->dbname);
     if(!$this->link){
       $this->error ="Connection fail".$this->link->connect_error;
      return false;
     }
     //echo 'success';
   }
     
    public function select($query){
      $result = $this->link->query($query) or die($this->link->error.__LINE__);
      if($result->num_rows > 0){
        return $result;
      } else {
        return false;
      }
     }
     
  public function insert($query){
     $insert_row = $this->link->query($query) or 
       die($this->link->error.__LINE__);
     if($insert_row){
       return $insert_row;
     } else {
       return false;
      }
     }
      

  public function update($query){
     $update_row = $this->link->query($query) or 
       die($this->link->error.__LINE__);
     if($update_row){
      return $update_row;
     } else {
      return false;
      }
     }
  
  public function delete($query){
     $delete_row = $this->link->query($query) or 
       die($this->link->error.__LINE__);
     if($delete_row){
       return $delete_row;
     } else {
       return false;
      }
     }
     
    }