<?php
require '../database.php';
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$subject = $_POST['subject'];
 	$message = $_POST['message'];

 	if(empty($name)) {
		echo 'empty name';
	} else {
		echo 'Name: '.$name.'<br>';
	}
	if(empty($email)) {
		echo 'empty email';
	} else {
		echo 'Email: '.$email.'<br>';
	}
	if(empty($subject)) {
		echo 'empty subject';
	} else {
		echo 'Subject: '.$subject.'<br>';
	}
	if(empty($message)) {
		echo 'empty message';
	} else {
		echo 'Message: '.$message.'<br>';
	}
	form4($conn,$name,$email,$subject,$message);
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form 4</title>
	<style type="text/css">
		.box{
			width: 290px;
		}
		.header{
			background-color: orange;
			padding: 10px;
			color: white;
			text-align: center;
			font-weight: bold;
		}
		.content{
			padding: 5px;
			background-color: khaki;
		}
		input,textarea{
			margin: 5px;
			padding: 5px;
			width: 250px;
		}
		.footer input{
			margin: 0;
			margin-top: none;
			background-color:yellow; 	
			text-align: center;
			font-weight: bold;
			width: 290px;
			border:none;
			padding: 10px;
		}
		
	</style>
</head>
<body>
	<form action="form4.php" onsubmit="return validation()" method="POST">
		<div class="box">
		<div class="header">
			CONTACT US!
		</div>
		<div class="content">
			<input type="text" name="name" id="name" placeholder="Name..">
			<span id="name_error"></span><br>
			<input type="email" name="email" id="email" placeholder="Email..">
			<span id="email_error"></span><br>
			<input type="text" name="subject" id="subject" placeholder="Subject..">
			<span id="subject_error"></span><br>
			<textarea name="message" rows="4" cols="20" id="message" placeholder="Message.."></textarea><br>
			<span id="message_error"></span>
		</div>
		<div class="footer">
			<input type="submit" name="submit" value="SEND MESSAGE">
		</div>
		</div>
	</form>

	<script type="text/javascript">
		function validation() {
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var subject = document.getElementById('subject').value;
			var message = document.getElementById('message').value;

			var name_error = document.getElementById('name_error');
			var email_error = document.getElementById('email_error');
			var subject_error = document.getElementById('subject_error');
			var message_error = document.getElementById('message_error');

			if(name=="") {
				//alert('Please enter name');
				name_error.innerHTML="<span style='color:red;'>*Please fill the first name</span>";
				return false;
			} else {
				//return true;
				name_error.innerHTML="";
			}
			if(email=="") {
				//alert('Please enter name');
				email_error.innerHTML="<span style='color:red;'>*Please fill the email</span>";
				return false;
			} else {
				//return true;
				email_error.innerHTML="";
			}
			if(subject=="") {
				//alert('Please enter name');
				subject_error.innerHTML="<span style='color:red;'>*Please fill the subject</span>";
				return false;
			} else {
				//return true;
				subject_error.innerHTML="";
			}
			if(message=="") {
				//alert('Please enter name');
				message_error.innerHTML="<span style='color:red;'>*Please fill the message</span>";
				return false;
			} else {
				//return true;
				message_error.innerHTML="";
			}
		}		
	</script>
</body>
</html>