<?php
//include 'loginform.php';
require 'database.php';
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
	echo 'Logged in.<br>';

	 $query = "select firstname from users where id='".$_SESSION['id']."'";
	 $query_run = mysqli_query($conn,$query);
	 $name = mysqli_fetch_assoc($query_run);
	 echo $first_name = $name['firstname'].'<br>';
	echo '<a href="logout.php">Logout</a>';
} else {
	echo 'not logged in<br>';
	echo '<a href="registrationform.php">Register</a>';
}
?>