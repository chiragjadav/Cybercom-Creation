<?php
require 'database.php';
session_start();
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($password);

		if(!empty($username) && !empty($password)) {
			$query = "select id from users where username='".mysqli_real_escape_string($conn,$username)."' and password='".mysqli_real_escape_string($conn,$password_hash)."'";

			if($query_run = mysqli_query($conn,$query)) {
				$query_num_rows = mysqli_num_rows($query_run);

				if($query_num_rows==0) {
					echo 'Invalid username/password';
					header('Location:logininfo.php');
				} else {
					//echo "OK";
					$user_id = mysqli_fetch_assoc($query_run);
					$id = $user_id['id'];
					$_SESSION['id'] = $id;
					header('Location:logininfo.php');
				}
			}
		} else {
			echo "Please fill the details";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="loginform.php" method="POST">
		Username: <input type="text" name="username">
		Password: <input type="password" name="password">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>