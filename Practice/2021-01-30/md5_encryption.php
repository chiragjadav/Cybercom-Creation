<?php
//$string = 'password';
//echo $string_hash = md5($string);
if(isset($_POST['user_password']) && !empty($_POST['user_password'])) {
	$user_password = md5($_POST['user_password']);

	$filename = 'hash.txt';
	$handle = fopen($filename, 'r');
	$file_password = fread($handle, filesize($filename));

	if($user_password == $file_password) {
		echo 'Password ok;'
	} else {
		echo 'Inccorect password';
	}

} else {
	echo 'Please enter password';
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="md5_encryption.php" method="POST">
		Password : <input type="text" name="user_password"><br><br>
		<input type="submit" name="Submit"> 
	</form>
</body>
</html>