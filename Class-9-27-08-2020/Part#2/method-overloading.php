<?php 

	class DB
	{
		public function __call($method, $args)
		{
			echo 'You call the method: '.$method;
		}

	}

	$db = new DB;

	echo $db->whereUsername('alien');

 ?>