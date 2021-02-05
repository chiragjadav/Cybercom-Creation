<?php
require '../2021-02-01/database_mysql.php';
	
	if(isset($_POST['search_name'])) {
		$search_name = $_POST['search_name'];
		if(!empty($search_name)) { 
			$query = "select name from employee_detail where name like '%$search_name%'";

			$query_run = mysqli_query($conn,$query);

			if(mysqli_num_rows($query_run)>=1) {
				echo 'Found.';
				while($row = mysqli_fetch_assoc($query_run) ) {
					echo $row['name'].'<br>';	
				}
			} else {
				echo 'Not Found.';
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LIKE PRACTICE</title>
</head>
<body>
	<form action="like.php" method="POST">
		NAME : <input type="text" name="search_name">
			   <input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>