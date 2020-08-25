<?php 
	class Man
	{
		function hand($substance){
			return 'I grab the '.$substance;
		}

		function leg($path)
		{
			return 'I go to '.$path;
		}

		function mouth($food)
		{
			return 'I eat '.$food;
		}

		function eye($object)
		{
			return 'I watch '.$object;
		}
	}

	$hafizur = new Man;

	echo $hafizur->hand('Mouse')."\n";
	echo $hafizur->leg('Office')."\n";

	$raihan = new Man;

   echo	$raihan->eye('Moive');


 ?>