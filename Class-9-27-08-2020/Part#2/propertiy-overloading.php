<?php 

	class Furits{

		public function __set($name, $value){
			echo $name. ' = '. $value."<br>";
		}

		 public function __get($name)
		{
			echo "You have call ".$name;
		}
	}

  $furits = new Furits;
  // $furits->kola ="Sagor kola";
  // $furits->apple='Red apple';
  $furits->mango;