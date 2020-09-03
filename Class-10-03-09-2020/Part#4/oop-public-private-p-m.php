<?php
class Fund {
	private $fund;
	public function __construct($initialFund = 0) {
		$this->fund = $initialFund;
	}
	public function addFund($money) {
		$this->fund += $money;
		$this->deductFund(5);
	}
	private function deductFund($money) {
		$this->fund -= $money;
	}
	public function getTotalFund() {
		echo "The total fund is {$this->fund}<br/>";
	}
}
$fund = new Fund(100);
//$fund->fund = 75;
$fund->addFund(20);
$fund->getTotalFund();
//$fund->deductFund(10);
//$fund->getTotalFund();
?>