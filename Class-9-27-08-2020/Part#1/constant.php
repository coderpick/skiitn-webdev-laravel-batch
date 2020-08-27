<?php

class UserData
{
	public $user;
	public $userid;
	// constant
	const NAME = "Hafizur Rahman";
	const AGE  = "28";

	function __construct($userName,$userID)
	{
		$this->user=$userName;
		$this->userid=$userID;

		echo "Username is {$this->user} and UserID is {$this->userid}";
	}


	public function display(){
		echo  "Full name is ".UserData::NAME." Age is ".UserData::AGE;
		
	}



	public function __destruct(){
		unset($this->user);
		unset($this->userid);
	}
}
$usr = new UserData('hafizur','25');
echo "<br/>";
$usr->display();

?>