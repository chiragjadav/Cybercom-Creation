<?php
$server = 'localhost';
$user = "root";
$password = "";
$dbname = "cybercom";

$conn = mysqli_connect($server,$user,$password,$dbname);

if($conn) {
	//echo 'connect';
} else {
	die("failed to connect");
}

function form1($conn,$name,$password,$address,$gender,$age,$file) {
	$query = "INSERT INTO form1 VALUES ('$name','$password','$address','$gender','$age','file')";
	if($result = mysqli_query($conn,$query)) {
		echo '<script>alert("Data Insertion Success")</script>';
	} else {
		echo '<script>alert("Data Insertion failed")</script>';
	}	
}

function form2($conn,$first_name,$last_name,$gender,$country,$email,$phone,$password) {
	$query = "INSERT INTO form2 VALUES ('$first_name','$last_name','$gender','$country','$email','$phone','$password')";
	if($result = mysqli_query($conn,$query)) {
		echo '<script>alert("Data Insertion Success")</script>';
	} else {
		echo '<script>alert("Data Insertion failed")</script>';
	}	
}

function form3($conn,$name,$password,$gender,$address,$status) {
	$query = "INSERT INTO form3 VALUES ('$name','$password','$gender','$address','$status')";
	if($result = mysqli_query($conn,$query)) {
		echo '<script>alert("Data Insertion Success")</script>';
	} else {
		echo '<script>alert("Data Insertion failed")</script>';
	}	
}

function form4($conn,$name,$email,$subject,$message) {
	$query = "INSERT INTO form4 VALUES ('$name','$email','$subject','$message')";
	if($result = mysqli_query($conn,$query)) {
		echo '<script>alert("Data Insertion Success")</script>';
	} else {
		echo '<script>alert("Data Insertion failed")</script>';
	}	
}

function form5($conn,$email,$password) {
	$query = "INSERT INTO form5 VALUES ('$email','$password')";
	if($result = mysqli_query($conn,$query)) {
		echo '<script>alert("Data Insertion Success")</script>';
	} else {
		echo '<script>alert("Data Insertion failed")</script>';
	}	
}
?>