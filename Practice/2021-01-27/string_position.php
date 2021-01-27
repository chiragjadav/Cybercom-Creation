<?php

$offset = 0;

$string = 'I love pizza, I love pizza too!';
$find = 'love';
$find_length = strlen('$find');
//echo strpos($string,$find);

while($string_position = strpos($string,$find,$offset)) {
	echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
	$offset = $string_position + $find_length;
}
?>