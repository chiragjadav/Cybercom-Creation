<?php
$id=$_POST['id'];

$conn = @mysqli_connect("localhost","root","","cybercom") or die("connection failed");
$query = "DELETE from webapp where id=$id";
 if(mysqli_query($conn,$query)) {
 	echo 1;
 } else {
 	echo 0;
 }
?>