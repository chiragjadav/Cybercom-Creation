<?php
require 'db/database.php';
$id=$_REQUEST['id'];
echo $id;
$query = "DELETE FROM webapp WHERE id='$id'";
$data = mysqli_query($conn,$query);
header("Location:contact.php");
?>