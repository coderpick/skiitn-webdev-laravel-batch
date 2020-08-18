
<?php
$password = "ABCDabcd2";

	if (!preg_match("/^[a-zA-Z0-9]{8,10}$/", $password))
	{
		echo "Invalid password!";
	}
	else
	{	
		echo "Valid password!";
	}
?>


<hr>

<?php
// The "i" after the pattern delimiter indicates a case-insensitive search

if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>

