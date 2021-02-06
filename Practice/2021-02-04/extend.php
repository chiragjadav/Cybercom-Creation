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

class Saving extends Bank {

}

$jay = new Bank();
$jay->Diposite(100);
$yash = new Saving();
$yash->Diposite(200);
echo 'Jay Balance :'.$jay->DisplayAmount().'<br>';
echo 'Yash Balance :'.$yash->DisplayAmount().'<br>';
?>