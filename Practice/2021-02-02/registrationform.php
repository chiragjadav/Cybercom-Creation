<?php
require 'database.php';

if(!isset($_SESSION['id']) && empty($_SESSION['id'])) {

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$password_hash = md5($password);

	if(!empty($username) && !empty($password) && !empty($confirm_password) && !empty($firstname) && !empty($surname)) {
		
		$query = "select username from users where username = '$username'";
		$query_run = mysqli_query($conn,$query);

		if(mysqli_num_rows($query_run)==1) {
			echo 'Username already exixts';
		} else {
			$query = "insert into users values ('','$username','$password_hash','$firstname','$surname')";
			if($query_run = mysqli_query($conn,$query)) {
				echo '<script>alert("Data Insertion Success")</script>';
				header('Location:loginform.php');
			} else {
				echo '<script>alert("Data Insertion failed")</script>';
				 
			}
		}
	} else {
		echo 'All fields are required.';
	}
}

?>
<form action="registrationform.php" method="POST">
	Username :<br><input type="text" name="username" value="<?php echo $username; ?>"><br><br>
	Password :<br><input type="password" name="password"><br><br>
	Password again :<br><input type="password" name="confirm_password"><br><br>
	Firstname :<br><input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>
	Surname :<br><input type="text" name="surname" value="<?php echo $surname; ?>"><br><br>
	<input type="submit" name="submit" value="Register">  
</form>

<?php	
}
?>