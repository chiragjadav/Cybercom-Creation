<?php
$server = 'localhost';
$use = 'root';
$pass = '';
$database = 'cybercom';
class serverException extends Exception {

}
class databaseException extends Exception {

}
//$conn = mysqli_connect($server,$use,$pass);
try {
	if(@$conn = mysqli_connect($server,$use,$pass)) {
		echo 'Server connted<br>';
	} else {
		throw new Exception('Server Connection Failed.');
	}
	if(mysqli_select_db($conn,$database)) {
		echo 'Database Connected<br>';
	} else {
		throw new Exception('Database selection Failed.');
	}
} catch (Exception $ex) {
	echo 'ERROR.: '.$ex->getMessage();
}
?>