<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
          //echo '<h1>this is my first php script</h1>';
          //single line comments
          /*
            multiline comments
            afafafaf
          */
          #slingle line comments;
          print "Hello";
        ?>
        <h1>Welcome to <?php echo 'PeopleNtech'; ?></h1>
        <hr>
        <?php 

           $x = 20;
           $y = 30;
           $z  = $x+$y;
           echo $z;
           echo "<br/>";


         ?>
         <h2>php constant</h2>
         <?php 
              define('SEVER_NAME', 'localhost');

              echo SEVER_NAME;
          ?>
        <hr>
        <?php
      // Assign value to variable
      $color = "blue";
       
      // Try to print variable value
      echo "The color of the sky is " . $color . "<br>";
      echo "The color of the sky is " . $Color . "<br>";
      echo "The color of the sky is " . $COLOR . "<br>";

      // Get the type of a variable
    echo gettype($color) . "<br>";
    echo GETTYPE($color) . "<br>";
    echo var_dump($color) . "<br>";

      ?>
      <h2>PHP Data type</h2>
      <ol>
        <li>Scaler data type</li>
        <li>compound data type</li>
      </ol>
      <h5>1. String</h5>
      <?php 
            $userName = 'Hafizur';
            $password = "123456HR";

            var_dump($password);
       ?>
        <h5>2.integar</h5>
        <?php 
             $a = 25;
            var_dump($a);
         ?>

          <h5>3.Float</h5>
        <?php 
             $x = 25.022;
            var_dump($x);
         ?>
          <h5>4.Boolean</h5>
        <?php 
             $x = false;
            var_dump($x);
         ?>

         <h5>5.Array</h5>
          <?php 

             //$color = array(20,'green','blue','pink','black');
             $color = [20,'green','blue','pink','black'];           

             var_dump($color);

           ?>
         <h5>6.object</h5>
         <?php 
              class Car{

                 public  $name = 'Corlea';

              }

          $newCar = new Car();
          echo $newCar->name;
         // var_dump( $newCar);

          ?>
          <h5>7. NULL data type</h5>
          <?php
            $a = NULL;
            var_dump($a);
            echo "<br>";
             
            $b = "Hello World!";
            $b = NULL;
            var_dump($b);
          ?>
  <h5>8. Resource data type</h5>
          <?php
        // Open a file for reading
        $handle = fopen("note.txt", "r");
        var_dump($handle);
        echo "<br>";
         
        // Connect to MySQL database server with default setting
        $link = mysqli_connect("localhost", "root", "");
        var_dump($link);
        ?>


</body>
</html>