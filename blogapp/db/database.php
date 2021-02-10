<?php
$conn = @mysqli_connect("localhost","root","","blogdb") or die("connection failed");
if($conn) {
	echo "";
} else {
	echo "connection failed";
}

?>
