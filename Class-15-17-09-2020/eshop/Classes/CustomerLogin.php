<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath .'/../lib/Database.php');
   include_once ($filepath .'/../lib/Format.php');
 ?>

<?php 


  /**
   * Login class
   */
  class CustomerLogin
  {
      
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }



      public function Registration($data)
      {

       $name          = mysqli_real_escape_string($this->db->link,$this->fm->validation($data['name']));
       $email         =  mysqli_real_escape_string($this->db->link,$this->fm->validation($data['email']));
       $password      =  mysqli_real_escape_string($this->db->link,$this->fm->validation($data['password']));
       $mobile        =  mysqli_real_escape_string($this->db->link,$this->fm->validation($data['mobile']));
       $address       =  mysqli_real_escape_string($this->db->link,$this->fm->validation($data['address']));

      if (empty($name) || empty($email) || empty($password) ||empty($mobile) || empty($address)) 
        {
          $msg = '<p class="text-danger">Field must not be empty!</p>';
           return $msg;
        }
        else
           {
     $insert ="INSERT INTO tbl_customer(name,email,password,mobile,address)VALUES('$name','$email','$password','$mobile','$address')";

          $insert = $this->db->insert($insert);
          if ($insert) 
          {
            $msg = '<p class="text-success">Registration Successfully!</p>';
            
             return $msg;
            }
            else
            {
          $msg = '<p class="text-danger">Registration failed!</p>';
               return $msg;
            }
         }
      }

      /* customer login */

      public function Login($data)
      {
        
      $email      =  $data['email'];
      $password     =  $data['password'];

        $email    = $this->fm->validation($email);
        $password = $this->fm->validation($password);

        $email    = mysqli_real_escape_string($this->db->link,$email);
        $password = mysqli_real_escape_string($this->db->link,$password);

        if(empty($email) || empty($password))
        {
          
          $msg = '<p class="text-danger">Field must not be empty!</p>';
           return $msg;
        }
        else 
        {
          $query = "SELECT * FROM tbl_customer WHERE email='$email' AND password ='$password'";
        
         $result = $this->db->select($query); 

          if ($result != false) 
          {
            $value = $result->fetch_assoc();
            Session::set('cmrlogin',true);
            Session::set('cmrId',$value['id']);
            Session::set('cmrName',$value['name']);
            
            // header("Location:payment.php");
            echo '<script>window.location="payment.php"</script>';
          }
          else
          {
          $msg = '<p class="text-danger">Email or Password does not match!</p>';
                return $msg;
          }
        }


      }
  }
 ?>