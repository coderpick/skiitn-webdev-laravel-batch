<?php 

	class Person{

		public $name="";
		public $age ="";

		public  function setName($name)
		{
			return $this->name = $name;
		}
		public function setAge($age)
		{
			return $this->age =$age;
		}

		public function getInfo()
		{
			echo "My name is ".$this->name." and age is ". $this->age." year";
		}
	}
	$person = new Person;
	$person->setName('Hafizur');
	$person->setAge('33');
	$person->getInfo();
	/*method chaining */
	
 ?>
 <hr>
 <?php 
class person2
{
  private $name="";
  private $age="";
 
  public function setName($name="")
  {
    $this->name=$name;  
    return $this;
  }
  public function setAge($age="20")
  {
    $this->age=$age;
    return $this;
  }
 
  public function getInfo()
  {
    echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
  }
}
 
$person = new person2();

$person->setName("Masud Alam")->setAge("33")->getInfo();

?>