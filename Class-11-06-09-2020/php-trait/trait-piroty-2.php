<?php
 class Base{
     public function sayHello(){
         echo "say hello from base";
    }
}
 
trait trt{
    public function sayHello(){
        echo "say hellow from trait";
    }
}
 
class Child extends Base{
 
    use trt;
   /* public function sayHello(){
        echo "hello from child class";
    }*/
}
 
$objCls = new Child;
 
$objCls->sayHello();
 
?>