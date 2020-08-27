

<?php


spl_autoload_register(function($class_name){

	include "classess/".$class_name.".php";
});
 


// function __autoload($class_name){
// 	//echo "$class_name";
// 	include"classess/".$class_name.".php";
// }



$java   = new JAVA;
$ruby   = new RUBY;
$python = new PYTHON;

?>