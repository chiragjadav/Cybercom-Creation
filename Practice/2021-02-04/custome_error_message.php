<?php
$server = 'localhost';
$use = 'root';
$pass = '';
$database = 'cybercom';
class serverException extends Exception {
	public function showException() {
		return 'Error trown on line '.$this->getLine().' in '.$this->getFile();
	}
}
class databaseException extends Exception {
	public function showException() {
		return 'Error trown on line '.$this->getLine().' in '.$this->getFile();
	}
}
//$conn = mysqli_connect($server,$use,$pass);
try {
	if(@$conn = mysqli_connect($server,$use,$pass)) {
		echo 'Server connted<br>';
	} else {
		throw new serverException();
	}
	if(mysqli_select_db($conn,$database)) {
		echo 'Database Connected<br>';
	} else {
		throw new databaseException();
	}
} catch (serverException $ex) {
	echo $ex->showException();
} catch (databaseException $ex) {
	echo $ex->showException();
}

?>