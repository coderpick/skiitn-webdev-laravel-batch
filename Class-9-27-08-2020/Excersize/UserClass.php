<?php 

   class User{
    
    public $name ;

      function __construct($name)
      {
        $this->name = $name;
      }

      // public function setName($name="")
      // {
      //   $this->name = $name;
      // }

      public function getName()
      {
        echo "User name is  $this->name";
      }

   }

   $user = new User('Sumon');
   //$user->setName('tanvir');
   $user->getName();

?>