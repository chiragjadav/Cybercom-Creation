<?php

$time = time();
$actual_time1 = date('D M Y @ H:i:s',$time);
$actual_time2 = date('Y-m-d',$time);
echo 'The current date/time is '.$actual_time1.'<br>';
echo 'The current date is '.$actual_time2.'<br>';

?>