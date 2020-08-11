<h2>PHP string methods</h2>
<hr>
<?php 
		$city = "Dhaka        is       capital of  Bangladesh";

		// echo strlen($city);
		//echo str_word_count($city);
		//echo strrev($city);
		//echo strpos($city, 'capital');
		//echo str_replace('Bangladesh','BD',$city);
		echo trim($city);
 ?>
 <h3>php exploade method</h3>
 <?php 
 	  $post ='Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Tempore ipsam fugit vero, autem asperiores, accusamus ea unde magni distinctio excepturi minus amet repudiandae, debitis nulla voluptatem earum deleniti error reiciendis!';
 	  $newArray = explode(' ', $post);

 	  print_r($newArray);
 	  echo '<hr/>';

 	  $newPost = implode(' ', $newArray);

 	  echo $newPost;

  ?>
  <hr>
   <?php
	echo number_format("1000000")."<br>";
	echo number_format("1000000",2)."<br>";
	echo number_format("1000000",2,",",".");
	?> 