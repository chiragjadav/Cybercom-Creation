<?php
session_start();
require 'database.php';
if(isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobile']) && isset($_POST['password']) ) {
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$info = $_POST['inform'];
	if(empty($first_name) || empty($last_name) || empty($mobile) || empty($password) || empty($info)){

	} else {
		if(!empty($email)) {
			$query = "select * from user where email='$email'";
			$result = @mysqli_query($conn,$query) or die("SQL error");
			if(mysqli_num_rows($result) > 0) {
				echo "already user";
			} else {
				$query2 = "INSERT INTO user VALUES ('','$first_name','$last_name','$email','$mobile','$password','$info')";
				$result = @mysqli_query($conn,$query2) or die("SQL error");
				if($result) {
					'<script>alert("User Registration Success.")</script>';
					header("Location:../login_form.php");
				} else {
					echo "insertion failed";
				}
			}
		}
		
	}
}
?>