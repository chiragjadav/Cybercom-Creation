<?php
// writing in file
$handle = fopen('file.txt', 'w');
fwrite($handle, 'Football'."\n");
fwrite($handle, 'Cricket'."\n");

fclose($handle);
echo 'Written<br><br>';

//Appending in file
$handle = fopen('file.txt', 'a');
fwrite($handle, 'Chess'."\n");

fclose($handle);
?>

