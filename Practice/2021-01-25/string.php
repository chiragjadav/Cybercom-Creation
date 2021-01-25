<?php 
$string = 'This is an example string .';

//Count number of word
$string_word_count = str_word_count($string);
echo $string_word_count.'<br>';

//Array
$string_word_count = str_word_count($string,1);
print_r($string_word_count);
echo "<br>";

//Associative Array
$string_word_count = str_word_count($string,2);
print_r($string_word_count);
echo "<br>";

//Include '.'
$string_word_count = str_word_count($string,1,'.');
print_r($string_word_count).'<br>';
echo "<br>";

$string = 'This is an example string & this is a tutorial .';
$string_word_count = str_word_count($string,1,'&.');
print_r($string_word_count);

?>