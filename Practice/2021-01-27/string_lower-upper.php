
<!DOCTYPE html>
<html>
<head>
	<title>String upper lower</title>
</head>
<body>
	<?php

if(isset($_GET['user_name']) && !empty($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	$user_name_lowercase = strtolower($user_name);

	if($user_name_lowercase == 'mehul') {
		echo 'You are the best';
	}
}
?>

	<form action='string_lower-upper.php' method="GET">
		Name : <input type="text" name="user_name"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>