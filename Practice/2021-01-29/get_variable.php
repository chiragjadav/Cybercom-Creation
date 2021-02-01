<?php
/*
- Does it exist ? or Has it ben submitted?
- Is it empty? or Does value ==null
- Display back to user
*/

if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
	$day = htmlentities($_GET['day']);
	$date = htmlentities($_GET['date']);
	$year = htmlentities($_GET['year']);

	if(!empty($day)&&!empty($date)&&!empty($year)) {
		echo 'It is '.$day.' '.$date.' '.$year;
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="get_variable.php" method="GET">
		Day: <br><input type="text" name="day"><br><br>
		Date: <br><input type="text" name="date"><br><br>
		Year: <br><input type="text" name="year"><br><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>