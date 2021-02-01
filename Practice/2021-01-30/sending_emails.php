<?php

$to = 'asus@phpacademy.org';
$subject = 'This is an email';
$body = 'This is a test email'."\n\n".' Hope you got it.';
$header = 'From : PHP <someone@phpacademy.org>';

if(mail($to, $subject, $body, $header)) {
	echo 'Email has been sent.';
} else {
	echo 'There was an error sending the main.';
}
?>