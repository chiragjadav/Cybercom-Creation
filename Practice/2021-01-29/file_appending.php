<?php

if(isset($_POST['name'])) {
	$name = $_POST['name'];
	if(!empty($name)) {
		$file = fopen('file.txt', 'a');
		fwrite($file, $name."\n");
		fclose($file);
	} else {
		echo 'Please type a name';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="file_appending.php" method="POST">
		Name :<br><input type="text" name="name"><br><br>
		<input type="submit" name="Submit">
		
	</form>
</body>
</html>