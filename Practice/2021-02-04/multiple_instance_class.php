<?php
class Bank {
	public $balance = 0;
	public function DisplayAmount() {
		return $this->balance;
	}
	public function Withdraw($amount) {
		$balance = $this->balance;
		if($balance<$amount) {
			echo 'Not enough money <br>';
		} else {
			return $this->balance = $balance -$amount;
		}
	}
	public function Diposite($amount) {
		$this->balance = $this->balance + $amount;
	}
}

$jay = new Bank();
$yash = new Bank();
$jay->Diposite(1000);
$yash->Diposite(500);
echo 'Jay Balance :'.$jay->DisplayAmount().'<br>';
echo 'Yash Balance :'.$yash->DisplayAmount().'<br>';
$jay->Withdraw(400);
$yash->Withdraw(600);
echo 'Jay Balance :'.$jay->DisplayAmount().'<br>';
echo 'Yash Balance :'.$yash->DisplayAmount(); 
?>