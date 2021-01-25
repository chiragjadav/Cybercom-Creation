<?php

//simple function
function MyName() {
	echo 'Alex.';
}

echo "My name is <br>";
MyName();

//function with argument
$num1 = 5;
$num2 =10;

function multiply($argument1,$argument2) {
	echo 'sum is '.($argument1 + $argument2).'<br>';
}

multiply($num1,$num2);

function displayDate($day, $date, $year) {
	echo $day.' '.$date.' '.$year;
}

displayDate('Monday',31,2021);

 ?>
