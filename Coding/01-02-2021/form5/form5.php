<?php
require '../database.php';
if(isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(empty($email)) {
		echo 'empty email';
	} else {
		echo 'Email: '.$email.'<br>';
	}
	if(empty($password)) {
		echo 'empty password';
	} else {
		echo 'Password: '.$password.'<br>';
	}
	form5($conn,$email,$password);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form 5</title>
	<style type="text/css">
		.box{
			border:15px solid lightgreen;
			width: 220px;
		}
		.header{
			background-color: red;
			color: white;
			padding: 7px;
			font-weight: bold;
			width: 205px;
		}
		.content input{
			padding: 5px;
			width: 200px;
			margin: 5px;
		}
		.center input{
			text-align: center;
			width: 80px;		
			align-content: center;
			background-color: lightgreen;
			border:none;
		}
		input{
			background-color: lightgrey;
		}

	</style>
</head>
<body>
	<form action="form5.php" onsubmit="return validation()" method="POST">
		<div class="box">
		<div class="header">
			Sign In!
		</div>
		<div class="content">
			<input type="email" name="email" id="email" placeholder="Email.."><br>
			<span id="email_error"></span>
			<input type="password" name="password" id="password1" placeholder="password"><br>
			<span id="password_error"></span>
			<div class="center">
				<input type="submit" name="submit" value="Sign In">
			</div>
		</div>
	</div>
	</form>

	<script type="text/javascript">
		function validation() {
			var email = document.getElementById('email').value;
			var password = document.getElementById('password1').value;

			var email_error = document.getElementById('email_error');
			var password_error = document.getElementById('password_error');

			if(email=="") {
				//alert('Please enter name');
				email_error.innerHTML="<span style='color:red;'>*Please fill the first name</span>";
				return false;
			} else {
				//return true;
				email_error.innerHTML="";
			}
			if(password=="") {
				//alert('Please enter name');
				password_error.innerHTML="<span style='color:red;'>*Please fill the email</span>";
				return false;
			} else {
				//return true;
				password_error.innerHTML="";
			}
		}
	</script>

</body>
</html>