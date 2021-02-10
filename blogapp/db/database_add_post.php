<?php
session_start();
require 'database.php';

if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['time']) && isset($_POST['category']) ) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$url = $_POST['url'];
	$time = $_POST['time'];
	$category = $_POST['category'];
	//$imageFile = $_POST['fileimg'];
	 
	if(empty($title) || empty($content) || empty($url) || empty($time) || empty($category)) {

	} else {
		$name = $_FILES['fileimg']['name'];
		$tmp_name = $_FILES['fileimg']['tmp_name'];
	 	$url = 'uploads/'.$name;
		move_uploaded_file($tmp_name, $url);
		$parentid= 'parent'.$_SESSION['id'];
		$query = "INSERT INTO blog_post VALUES ('','$parentid','$url','$title','$content','$name','$time','$time','$time')";
		if(mysqli_query($conn,$query)) {
			header("Location:../blogpost.php");
		} else {
			echo "error";
		}

	}
}
?>