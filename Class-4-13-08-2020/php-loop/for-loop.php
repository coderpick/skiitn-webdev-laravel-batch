
<h2>for Loop</h2>
<?php

   for($i=1; $i<10; $i++)
   {
        echo "The nubmer is $i <br/>";
   }

?>
<h2>Example 2:</h2>
<?php

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

?>

<h2>Example 3:</h2>
<?php


$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

?>


<h2>Example 4:</h2>
<?php

    $brush_price = 5; 

    echo "<table border=\"1\">";
    echo "<tr><th>Quantity</th>";
    echo "<th>Price</th></tr>";
    for ( $counter = 1; $counter <= 20; $counter += 1) {
        echo "<tr><td>";
        echo $counter;
        echo "</td><td>";
        echo $brush_price * $counter;
        echo "</td></tr>";
    }
    echo "</table>";

?>
<hr/>
<div>
    <form action="">
        <label>Date for birth</lable>
        Day
        <select>
            <?php 
                for($i=1; $i<=31; $i++)
                {
                  echo " <option value='$i'>$i</option>";   
                }
            ?>
           
        </select>

          Year
        <select>
            <?php 
                for($i=1905; $i<=date('Y'); $i++)
                {
                  echo " <option value='$i'>$i</option>";   
                }
            ?>
           
        </select>
    </form>
</div>
