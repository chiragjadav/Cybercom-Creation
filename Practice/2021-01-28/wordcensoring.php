<?php

$find = array('alex','billy','dale');
$replace = array('a**x','b***y','d**e');

if(isset($_POST['user_input'])&&!empty($_POST['user_input'])) {
	$user_input = $_POST['user_input'];
	//$user_input_lc = strtolower($user_input);
	//$user_input_new = str_replace($find, $replace, $user_input_lc);
	$user_input_new = str_ireplace($find, $replace, $user_input);
	echo $user_input_new;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='wordcensoring.php' method="POST">
		<textarea name="user_input" rows="6" cols="30"><?php  echo $user_input; ?></textarea><br><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>