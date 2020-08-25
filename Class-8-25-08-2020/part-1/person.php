
<?php
class Employee{

	public $name;
	public $age;

	public function EmpName($name="no name found"){

		echo $this->name = $name;
	}

	public function Age($age){
		echo $this->age=$age;
	}
}

$emp = new Employee();
 //$emp->name='hafizur';
 $emp->EmpName('Rakib');
 echo "<br/>";
 $emp->Age(25);
?>