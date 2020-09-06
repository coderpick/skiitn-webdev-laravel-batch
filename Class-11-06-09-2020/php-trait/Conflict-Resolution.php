<?php
 
trait Foo{
    public function first_function(){
        echo "From Foo Trait";
    }
}
 
trait Bar{
    public function first_function(){
        echo "From Bar Trait";
    }
}
 
class FooBar{
    //use Foo,Bar;
    use Foo, Bar{
        // This class will now call the method
        // first function from Foo only
        Foo::first_function insteadof Bar;
    }
}
 
$obj = new FooBar;
 
$obj->first_function();
 
?>