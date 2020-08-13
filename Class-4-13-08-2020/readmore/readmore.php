<?php
function readMore($text,$limit=50){
	$text = $text. "";
	$text = substr($text, 0,$limit);
	$text = substr($text, 0,strrpos($text, " "));
	$text = $text." ....";
	return $text;
}

?>

<?php
$post="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id eius aspernatur eaque exercitationem omnis maxime magni ducimus quo. Eveniet perspiciatis, vel autem saepe numquam unde corporis temporibus a repellendus explicabo?";

echo readMore(($post));//
?>
