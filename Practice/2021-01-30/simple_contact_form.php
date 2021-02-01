<?php

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];

	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {

		$to = 'asus@phpacademy.org';
		$subject = 'This is an email';
		$body = $contact_name."\n".$contact_text;
		$header = 'From : PHP'.$contact_email;

		if(mail($to, $subject, $body, $header)) {
			echo 'Email has been sent.';
		} else {
			echo 'There was an error sending the main.';
		}

	} else {
		echo 'All Fields are required';
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="simple_contact_form.php" action="POST">
		Name:<br><input type="text" name="contact_name"><br><br>
		Email:<br><input type="text" name="contact_email"><br><br>
		Messafe:<br>
		<textarea name="contact_text" rows="6" cols="30"></textarea><br><br>
		<input type="submit" value="Send">
	</form>
</body>
</html>