<?php
require 'database.php';
$id=$_REQUEST['id'];
echo $id;
$query = "DELETE FROM blog_post WHERE id='$id'";
$data = mysqli_query($conn,$query);
header("Location:../blogppost.php");
?>