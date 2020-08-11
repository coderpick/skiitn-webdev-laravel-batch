<?php
 $age=array("Peter"=>"37","Ben"=>"32","Joe"=>"43"); 
 
 //asort($age); // acending oder by value
 ksort($age); // decending oder by key
 //arsort($age); // decending oder by value
 //krsort($age); // decending oder by key
 
 foreach($age as $x=>$x_value) { 
 echo "Key=" . $x . ", Value=" . $x_value; echo "<br>";
 }
 ?>