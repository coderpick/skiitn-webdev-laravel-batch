<?php 

	class DB
	{
		public static function __callStatic($method, $args)
		{
			echo 'You call the static method: '.$method;
		}


	}

	DB::hello();
 ?>