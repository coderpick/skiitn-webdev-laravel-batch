<?php
include "inc/header.php";
?>

<h>PHP Operators</h>
<h3>1. Arithmetic operators</h3>
<hr/>

<?php
$x = 10;
$y = 4;

echo "$x and $y Addition is = ".($x + $y);
echo "<br>";
echo "$x and $y Subtraction is = ".($x - $y);
echo "<br>";
echo "$x and $y Multiplication is =".($x * $y);
echo "<br>";
echo "$x and $y Division is = ".($x / $y);
echo "<br>";
echo "$x and $y Modulus is = ".($x % $y);

?>

<h3>2. Assignment operators</h3>
<hr/>

<?php
    $x = 10;
    echo $x;
    echo "<br>";

    $x = 20;
    $x += 30;
    echo  $x;
    echo "<br>";

    $x = 50;
    $x -= 20;
    echo $x;
    echo "<br>";

    $x = 5;
    $x *= 25;
    echo $x;
    echo "<br>";

    $x = 50;
    $x /= 10;
    echo $x;
    echo "<br>";

    $x = 100;
    $x %= 15;
    echo $x;

?>

<h3>3. Comparison operators</h3>
<hr/>

<?php
    $x = 25;
    $y = 35;
    $z = "25";

    var_dump($x == $z);
    echo "<br>";
    var_dump($x === $z);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x !== $z);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x > $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x >= $y);

?>

<h3>4. Incrementing and Decrementing operators</h3>
<hr/>

<?php
    $x = 10;
    echo ++$x;
    echo "<br>";
    echo $x;
    echo "<hr>";

    $x = 10;
    echo $x++;
    echo "<br>";
    echo $x;
    echo "<hr>";

    $x = 10;
    echo --$x;
    echo "<br>";
    echo $x;
    echo "<hr>";

    $x = 10;
    echo $x--;
    echo "<br>";
    echo $x;

?>
<h3>5. Logical operators</h3>
<hr/>

<?php
    $year = 2021;
   
    // Leap years are divisible by 400 or by 4 but not 100

    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
    echo "$year is a leap year.";
    } 
    else
    {
    echo "$year is not a leap year.";
    }

echo "<hr>";

    $x = 100;  
    $y = 50;

    if ($x == 105 and $y == 50) 
    {
        echo "Hello world!";
    }
    else
    {
        echo "Your condrition is not true";
    }
 echo "<br>";

    $x = 100;  
    $y = 50;

    if ($x == 100 or $y == 80) {
        echo " \'or'\ condrition is correct";
    }
 echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }
 echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 && $y == 50) {
        echo "Hello world!";
    }
echo "<br>";
    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world!";
    }
echo "<br>";
    $x = 100;  

    if ($x !== 90) {
        echo "Hello world!";
    }
?>
<h3>6. String operators</h3>
<hr/>

<?php
    $x = "Hello";
    $y = " World!";
    echo $x . $y; // Outputs: Hello World!
    echo "<br>";
    $x .= $y;
    echo $x; // Outputs: Hello World!

?>

<h3>7. Array operators</h3>
<hr/>

<?php
    $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
    $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

    $z = $x + $y; // Union of $x and $y
    var_dump($z);
    echo "<hr>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    echo "<br>";
    var_dump($x !== $y);

?>
<?php
include "inc/footer.php";
?>
