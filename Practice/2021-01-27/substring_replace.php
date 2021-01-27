<?php

//substring replacement
$string1 = 'This part don\'t search. This part search.';
$new_string1 = substr_replace($string1,'section',29,4);
echo $new_string1.'<br>';

//string replacement
$find = array('is','string');
$replace = array('IS','STRING');
$string2 = 'This is a string, and is a example.';

$new_string2 = str_replace($find,$replace,$string2);

echo $new_string2;
?>