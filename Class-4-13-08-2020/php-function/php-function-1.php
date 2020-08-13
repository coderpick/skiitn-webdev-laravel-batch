<?php 

    // declare a function
    function welcome()
    {
        echo "Welcome to peoplentech";
    }
    //function calling
    welcome();
?>
<h2>Ex-2</h2>
<?php 	
	
	function addNumber($x,$y)
	{
		echo $x+$y;
	}
	addNumber(25,25);

 ?>
 <h2>Ex-3</h2>
 <?php 
    // function default aurgruament 
 	function userInfo($name,$age=18)
 	{
 		echo "User name is ".$name." and age is ".$age."<br/>";
 	}
 	userInfo('Hafizur', 33);
 	userInfo('Tanvir', 25);
 	userInfo('Niloy', );
 	userInfo('Mizan', 20);
  ?>	

  <h2>Ex-4</h2>
  <?php 

  	//return function 

    function sum($x,$y)
    {
    	return $x+$y;
    } 

    echo sum(25,30);

   ?>