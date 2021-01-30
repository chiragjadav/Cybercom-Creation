<?php
$browser = get_browser(null,true);
//print_r($browser);

$browser = strtolower($browser['browser']);

if($browser!='default browser') {
	echo 'You\'re not using Google Chrome. Please do!';
}
?>