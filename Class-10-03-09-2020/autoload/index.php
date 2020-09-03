<?php 
  
  spl_autoload_register(function($fileName){
    include $fileName.".php";
  });
?>