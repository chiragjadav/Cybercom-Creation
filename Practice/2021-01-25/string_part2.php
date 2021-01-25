<?php

//Shuffle the string
$string = 'abcdefghijklmnopqrstuvwxyz0123456789';
$string_shuffled = str_shuffle($string);
$half = substr($string_shuffled,0,5);
echo $half.'<br>';

//Reverse the string
$string_reversed = strrev($string);
echo $string_reversed.'<br>';

//Smilarity in text
similar_text('Hello World', 'Hello Peter',$percent);
echo $percent.'<br>';

//length of string
$string_length = strlen($string);
echo $string_length;

//trim: remove the whitespace 
$string2 = ' This is an example of string part 4 ';
$string_trimmed = trim($string2);
//rtrim and ltrim
echo $string_trimmed.'<br>';

$string3 = 'This is a <img src="image.jpg"> string';
$string_slashes = htmlentities(addslashes($string3));

echo $string_slashes;
?>

