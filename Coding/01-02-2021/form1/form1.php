<?php
require '../database.php';

if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['file'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$file = $_POST['file'];
	if(empty($name)) {
		echo 'empty name';
	} else {
		echo 'Name: '.$name.'<br>';
	}
	if(empty($password)) {
		echo 'empty password';
	} else {
		echo 'Password: '.$password.'<br>';
	}
	if(empty($address)) {
		echo 'empty address';
	} else {
		echo 'Password: '.$address.'<br>';
	}
	if(empty($gender)) {
		echo 'empty gender';
	} else {
		echo 'Gender: '.$gender.'<br>';
	}
	if(empty($age)) {
		echo 'empty age';
	} else {
		echo 'Age: '.$age.'<br>';
	}
	if(empty($file)) {
		echo 'empty file';
	} else {
		echo 'File: '.$file.'<br>';
	}
	form1($conn,$name,$password,$address,$gender,$age,$file);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Form 1</title>
	<link rel="stylesheet" type="text/css" href="form1_css.css">
</head>
<body>
	<script type="text/javascript" src="form1.js"></script>
	<form action="form1.php" onsubmit="return validation()" method="POST">
		<table>
			<tr>
				<th colspan="2">User Form</th>
			</tr>
			<tr>
				<td>Enter name</td>
				<td>
					<input type="text" name="name" id="name"><br>
					<span id="name_error"></span>
				</td>
			</tr>
			<tr>
				<td>Enter Password</td>
				<td>
					<input type="password" name="password" id="password1"><br>
					<span id="password_error"></span>
				</td>
			</tr>
			<tr>
				<td>Enter Address</td>
				<td>
					<textarea name="address" rows="4" cols="20" id="address"></textarea><br>
					<span id="address_error"></span>
				</td>
			</tr>
			<tr>
				<td>Select game</td>
				<td>
					 <input type="checkbox" id="hockey" name="hockey" value="hockey">
  					<label for="hockey"> Hockey</label><br>
  					<input type="checkbox" id="football" name="football" value="football">
  					<label for="football"> Football</label><br>
  					<input type="checkbox" id="badminton" name="badminton" value="badminton">
  					<label for="badminton"> Badminton<br>
  					<input type="checkbox" id="cricket" name="cricket" value="cricket">
  					<label for="cricket"> Cricket<br>
  					<input type="checkbox" id="vollyball" name="vollyball" value="vollyball">
  					<label for="badminton"> Vollyball<br>
  					<span id="game_error"></span>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" id="male" name="gender" value="male">
					<label for="male">Male</label>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Female</label><br>
					<span id="gender_error"></span>
				</td>
			</tr>
			<tr>
				<td>Select you age</td>
				<td>
					<select name="age" id="age">
						<option value="Please Select">Please Select</option>
  						<option value="15">15</option>
  						<option value="16">16</option>
  						<option value="17">17</option>
  						<option value="18">18</option>
  						<option value="19">19</option>
  						<option value="20">20</option>
  						<option value="21">21</option>
  						<option value="22">22</option>
  						<option value="23">23</option>
					</select><br>
					<span id="age_error"></span>
				</td>
			</tr>
			<tr>
				
				<td colspan="2">
					<div class="center">
					<input type="file" name="file" id="file"><br>
					<span id="file_error"></span>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="center button">
					<input type="reset" name="reset" value="Reset">
					<input type="submit" name="submit" value="Submit Form">
					</div>
				</td>

			</tr>
		</table>
	</form>

	
</body>
</html>