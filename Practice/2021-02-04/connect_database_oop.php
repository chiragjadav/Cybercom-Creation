<?php
class DatabaseConnect {
	public function __construct($host,$user,$password) {
		//echo 'Connected to '.$host;
		if(!@$this->Connect($host,$user,$password)) {
			echo 'Connection Failed';
		} elseif ($this->Connect($host,$user,$password)) {
			echo 'Connected to '.$host;
		}
	}

	public function Connect($host,$user,$password) {
		//echo 'Connect';
		if($conn = mysqli_connect($host,$user,$password)) {
			return true;
		} else {
			return false;
		}
	}
}

$connection = new DatabaseConnect('localhost','root','');
?>