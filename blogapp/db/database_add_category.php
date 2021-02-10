<?php
session_start();
require 'database.php';

if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['metatitle']) && isset($_POST['parentcategory']) ) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$url = $_POST['url'];
	$mtitle = $_POST['metatitle'];
	$category = $_POST['parentcategory'];
	 
	if(empty($title) || empty($content) || empty($url) || empty($metatitle) || empty($parentcategory)) {

	} else {
		$name = $_FILES['fileimg']['name'];
		$tmp_name = $_FILES['fileimg']['tmp_name'];
	 	$url = 'uploads/'.$name;
		move_uploaded_file($tmp_name, $url);
		$categoryid= 'category'.$_SESSION['id'];
		$query = "INSERT INTO blog_category VALUES ('','$categoryid','$mtitle','$content','$time','$time')";
		if(mysqli_query($conn,$query)) {
			header("Location:../blogcategory.php");
		} else {
			echo "error";
		}

	}
}
?>