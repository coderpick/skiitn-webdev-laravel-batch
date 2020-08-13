<?php 

	$post ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sapiente dolorem nemo repudiandae quisquam sed, laudantium, ad iusto. Ipsum omnis eum quibusdam ullam, earum quia eos eius ea fuga suscipit!";


	$newarray = explode(" ",$post );

	print_r($newarray);

	echo "<hr>";

	$newstring = implode(" ", $newarray);

	echo  $newstring;
 ?>
