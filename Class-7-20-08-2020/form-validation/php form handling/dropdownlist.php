<form method=post action=''>
	<select name='color[]' size=8 multiple>
	<option value='blue'>Blue</option>
	<option value='green'>Green</option>
	<option value='red'>Red</option>
	<option value='yellow'>Yelllow</option>
	<option value='white'>White</option>
	</select> 
	<input type=submit>

</form>


<?php
$color= $_POST['color'];

 if( is_array($color)){
	 
		while (list ($key, $val) = each ($color))
	{
echo "$val <br>";
}
}//
else{echo "not array";}
?>