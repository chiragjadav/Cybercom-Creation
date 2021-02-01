<?php

$filename = 'names.txt';
$handle = fopen($filename,'r');

$input = fread($handle,filesize($filename));

$names_array = explode(',',$input);

foreach ($names_array as $name) {
	echo $name.'<br>';
}
?>