	<?php
	
	require_once 'class.TestDemo.php';
	require_once 'class.Webcoachbd.php';

	$objWeb = new OOPHP\Webcoachbd();
	$objWeb->getTutorial(' OOPHP');
	$objFrm = new Framework\Webcoachbd();
	$objFrm->getTutorial(' Framework');

	?>
