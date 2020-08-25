

<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number</td>
			<td>
				<input type="number" name="num1">
			</td>
		</tr>
		<tr>
			<td>Enter the second number</td>
			<td>
				<input type="number" name="num2">
			</td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" value="Calculate" name="calculation"></td>
		</tr>
	</table>

</form>


<?php

include 'function.php';

if (isset($_POST['calculation'])) {

	$numOne = $_POST['num1'];
	$numtwo = $_POST['num2'];

	if (empty($numOne) or empty($numtwo)) {
		echo "<span style='color:red'>Field must not be empty</span> <br/>";
	}else{
		echo "Frist number is :" .$numOne. "  Second number is ".$numtwo."<br/>";

		$cal = new Calculation();
		$cal->add($numOne,$numtwo);
		$cal->sub($numOne,$numtwo);
		$cal->mul($numOne,$numtwo);
		$cal->div($numOne,$numtwo);


	}
}

?>