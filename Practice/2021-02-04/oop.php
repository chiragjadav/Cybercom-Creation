<?php

class BankAccount {
	public $balance = 1000;

	public function DisplayBalance() {
		return 'Balance : '.$this->balance;
	}
	public function Withdraw($amount) {
		$balance = $this->balance;
		if(($balance)<$amount){
			echo "Not enough money.";
		} else {
			$balance = $this->balance-$amount;
		}
	}
}
//New instance of class
$jay = new BankAccount();
$jay->Withdraw(1100);
echo $jay->DisplayBalance();
?>