<?php

if(isset($_POST['password'])) {
	$password = $_POST['password'];
	if(!empty($password)) {
		if($password == 'pass123') {
			echo "That it Correct!";
		} else {
			echo "That is incorrect";
		}
	} else {
		echo "Please enter a password";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="post_variable.php" method="POST">
		Password:<br><input type="password" name="password"><br><br>
		<input type="submit" name="Submit">
		
	</form>
</body>
</html>