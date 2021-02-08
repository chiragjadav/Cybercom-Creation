<?php
require 'db/database.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) ) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$title = $_POST['title'];
//	$datetime = $_POST['datetime'];
	if(!empty($name) || !empty($email) || !empty($phone) || empty($title)) {
		$query = "INSERT INTO webapp VALUES ('','$name','$email','$phone','$title')";
		if($query_run = mysqli_query($conn,$query)) {
			header("Location:contact.php");
		} else {
			echo 'not ok';
		}
	} else {
		echo "not ok";	}
}
?>