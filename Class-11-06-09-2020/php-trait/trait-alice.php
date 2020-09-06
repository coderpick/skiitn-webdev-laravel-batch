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
    use Foo, Bar{
        // This class will now call the method
        // first function from Foo Trait only\
        Foo::first_function insteadof Bar;
        // first_function of Bar can be
        // accessed with second_function
        Bar::first_function as second_function;
    }
}
 
$obj = new FooBar;
 
// Output: From Foo Trait
 
$obj->first_function();
 
echo "<br/>";
// Output: From Bar Trait
 
$obj->second_function();
 
?>