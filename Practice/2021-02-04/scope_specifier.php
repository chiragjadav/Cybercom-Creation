<?php

class Bank{
	public $account1 = "ac1";
	private $_account2 = "ac2";
	protected $_Taccount3 = "ac3";
	public function DisplayAccount() {
		return array($this->account1, $this->_account2, $this->_Taccount3);
	}
}
$jay = new Bank();
print_r( $jay->DisplayAccount());
echo $jay->account1;
echo $jay->account2;
echo $jay->account3;
/*function getXYZ()
{
    return array(1,2,3);
}

$array = getXYZ();

$x = $array[0];
$y = $array[1];
$z = $array[2];
*/
?>

