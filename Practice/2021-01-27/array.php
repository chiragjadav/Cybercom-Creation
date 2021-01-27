<?php

//Simple array
$food_array1 = array('Pasta', 'Pizaa', 'Salad', 'Vegetable');
$food_array1[4] = 'Fruit';
//echo $food.'<br>';
print_r($food_array1);

//Associative array
echo '<br>';
$food_array2 = array('Pasta'=>300, 'Pizaa'=>1000, 'Salad'=>150, 'Vegetable'=>50);
print_r($food_array2);

echo $food_array2['Pizaa'];
?>