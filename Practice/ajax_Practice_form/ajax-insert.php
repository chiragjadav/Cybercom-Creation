<?php
$name = $_POST['firstname'];
$title = $_POST['title'];

$conn = @mysqli_connect("localhost","root","","cybercom") or die("connection failed");
$query = "INSERT INTO webapp VALUES ('','$name','domey@gmail.com','1234567890','$title')";
 if(mysqli_query($conn,$query)) {
 	echo 1;
 } else {
 	echo 0;
 }

?>