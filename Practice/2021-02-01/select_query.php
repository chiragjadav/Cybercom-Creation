<?php
require 'database_mysql.php';

if(isset($_GET['age']) && !empty($_GET['age'])) {
	$age = $_GET['age'];

$query = "select name,age from employee_detail where age=$age";

	if($query_run = mysqli_query($conn,$query)) {
		//echo 'Query run';
		if(mysqli_num_rows($query_run)==NULL) {
			echo "Result not found";
		} else {
			while($row = mysqli_fetch_assoc($query_run) ) {
			$name = $row['name'];
			$age = $row['age'];

			echo $name.' '.$age.'<br.';
			}	
		}
	} else {
		echo 'Query Failed';
		//echo mysqli_error();
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="select_query.php" method="GET">
		CHOOSE AGE:
		<select name="age">
			<option value="19">19</option>
			<option value="11">11</option>
		</select>
		<input type="submit" name="submit">
	</form>
</body>
</html>