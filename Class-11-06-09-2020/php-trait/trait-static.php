<?php
trait Calories {
    public $banana = 105;
    public $cake = 300;
    static public $donation = 205;
     
    public static function test(){
        return self::$donation;
    }
}
 
class Cookbook {
    use Calories;
     
}
 
$c = new Cookbook;
echo Cookbook::$donation;
echo "<br/>";
echo Cookbook::test();
?>