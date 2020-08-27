<?php

class Fund {

	private $fund;

	function __construct($initialFund=0)
	{
		$this->fund = $initialFund;
	}

	function addFund($money) {
		$this->fund += $money;
	}

	function deductFund($money) {
		$this->fund -= $money;
	}
	function getTotalFund()
	{
		echo "Total fund is {$this->fund} <br/>";
	}
}

$fund = new Fund();
//$fund->fund = 75;
$fund->addFund(100);
$fund->getTotalFund();
$fund->deductFund(20);
$fund->getTotalFund();

?>