<?php

//Multidimentional Array
$food = array('Healthy'=>
						array('Salad','Vegetables','Pasta'),
			  'Unhealthy'=>
			  			array('Pizza','Ice cream'));

print_r($food['Healthy']);
echo $food['Healthy'][2];
echo $food['Unhealthy'][1];

?>