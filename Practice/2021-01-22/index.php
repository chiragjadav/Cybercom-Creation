<?php
$name = 'Alex';
$age = 20;
if(strtolower($name) === 'alex') {
	if($age > 21) {
		echo "You\'re over 21";
		if(1 === 1) {
		echo "Yes, 1 is equal to 1";
		}
	}else {
		echo "You\'re not over 21";
	}
}else {
	echo "You\'re not Alex";
}
?>