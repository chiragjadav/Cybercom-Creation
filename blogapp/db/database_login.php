<?php
session_start();
require 'database.php';

if(isset($_POST['email'])) {

	$email = $_POST['email'];
	if(!empty($email)) {
		$query = "select * from user where email='$email'";

		$result = @mysqli_query($conn,$query) or die("SQL error");
		if(mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['id'];

			header("Location:../blogpost.php");
		} else {
		}

	}
}
?>