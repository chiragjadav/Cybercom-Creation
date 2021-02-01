<?php

$name = $_FILES['file']['name'];
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];
$extension = strtolower(substr($name, strpos($name,'.') + 1));
$max_size = 10000;

if(isset($name)) {
	if(!empty($name)) {
		if(($extension =='jpg' || $extension == 'jpeg') && $type == 'image/jpeg' && $type='image/jpg' && $size <= $max_size) {
			
			$location = 'uploads/';
			if(move_uploaded_file($tmp_name,$location.$name)) {
				echo 'Uploaded !';
			} else {
				echo 'There was an error';
			}			
		} else {
			echo 'File Must be jpeg or jpg and under the size of 2 KB';
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
	<form action='restricting_file_extension.php' method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>