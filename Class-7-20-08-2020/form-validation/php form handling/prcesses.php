<?php

$name = $_POST['color'];

// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $color){
echo $color."<br />";

}
/*
<?php

$name = $_GET['color'];

if(isset($_GET['color'])) {

echo "You chose the following color(s): <br>";

foreach ($name as $color){
echo $color."<br />";

}

} // end brace for if(isset

else {

echo "You did not choose a color.";

}

?>
*/
/*<?php

$name = $_GET['color'];

if(isset($_GET['color'])) {

echo "You chose the following color(s): <br>";
echo "<ul>";

foreach ($name as $color){

echo "<li>" .$color."</li>";

}

echo "</ul>";

} // isset

else {

echo "You did not choose a color.";

}

?>
*/
?>