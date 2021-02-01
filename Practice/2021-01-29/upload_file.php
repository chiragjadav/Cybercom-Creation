<?php

$name = $_FILES['file']['name'];
//echo $size = $_FILES['file']['size'];
//echo $type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

//echo $error = $_FILES['file']['error'];

if(isset($name)) {
	if(!empty($name)) {
		$location = 'uploads/';
		if(move_uploaded_file($tmp_name,$location.$name)) {
			echo 'Uploaded !';
		}
	} else {
		echo 'Please choose a file';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='upload_file.php' method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>