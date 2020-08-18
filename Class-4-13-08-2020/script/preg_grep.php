<?php
$foods = array("pasta", "steak", "fishs", "potatoes");
//$food = preg_grep("/^p/", $foods);
$food = preg_grep("/s$/", $foods);
print_r($food);
?>