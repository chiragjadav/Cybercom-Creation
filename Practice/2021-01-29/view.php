<?php
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['age'])) {
	echo 'Welcome, '.$_SESSION['username'].' And you are '.$_SESSION['age'];
} else {
	echo 'Please log in';
}

?>