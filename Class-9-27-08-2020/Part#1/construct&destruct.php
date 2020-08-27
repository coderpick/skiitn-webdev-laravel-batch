<?php
/**
* 
*/
class UserData
{

	public $user;
	public $userid;

	function __construct($userName,$userID)
	{
		$this->user=$userName;
		$this->userid=$userID;

		echo "Username is {$this->user} and UserID is {$this->userid}";
	}

	public function __destruct(){
		unset($this->user);
		unset($this->userid);		
	}
}
$usr = new UserData('Shahin','22');

?>