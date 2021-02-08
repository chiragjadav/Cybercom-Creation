<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'cybercom';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn) {
	//echo 'Connect';
 } else {
 	echo 'Error'.mysqli_error_no();
 }
?>