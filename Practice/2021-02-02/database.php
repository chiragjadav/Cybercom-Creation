<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybercom";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn) {
	//echo "connect<br>";
} else {
	die("connection failed because ".mysqli_connect_error());
}
?>



