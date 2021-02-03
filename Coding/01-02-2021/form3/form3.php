<?php
require '../database.php';
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['status']) && isset($_POST['agreement'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$status = $_POST['status'];
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
	if(empty($gender)) {
		echo 'empty gender';
	} else {
		echo 'Gender: '.$gender.'<br>';
	}
	if(empty($address)) {
		echo 'empty address';
	} else {
		echo 'Password: '.$address.'<br>';
	}
	if(empty($date) || empty($month) || empty($year)) {
		echo 'empty date of birth';
	} else {
		echo 'Date of Birth: '.$date.'-'.$month.'-'.$year.'<br>';
	}
	if(empty($status)) {
		echo 'empty status';
	} else {
		echo 'Status: '.$status.'<br>';
	}
	form3($conn,$name,$password,$gender,$address,$status);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="form3_css.css">
</head>
<body>
	<script type="text/javascript" src="form3.js"></script>
	<div>
	<form action="form3.php" onsubmit="return validation()" method="POST">
	<fieldset>
    	<legend>USER FORM</legend>
		<table>
			<tr>
				<td>FIRST NAME</td>
				<td>
					<input type="text" name="name" id="name"><br>
					<span id="name_error"></span>
				</td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td>
					<input type="password" name="password" id="password1"><br>
					<span id="password_error"></span>
				</td>
			</tr>
			<tr>
				<td>GENDER</td>
				<td>
					<input type="radio" id="male" name="gender" value="male">
					<label for="male">Male</label>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Female</label><br>
					<span id="gender_error"></span>
				</td>
			</tr>
			<tr>
				<td>ADDRESS</td>
				<td>
					<textarea name="address" rows="4" cols="20" id="address"></textarea><br>
					<span id="address_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">D.O.B.</td>
				<td>
					<select name="date" id="date">
						<option value="Date">Date</option>
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
  						<option value="5">5</option>
  						<option value="6">6</option>
  						<option value="7">7</option>
  						<option value="8">8</option>
  						<option value="9">9</option>
  						<option value="9">10</option>
  						<option value="9">11</option>
  						<option value="9">12</option>
  						<option value="9">13</option>
  						<option value="9">14</option>
  						<option value="9">15</option>
  						<option value="9">16</option>
  						<option value="9">17</option>
  						<option value="9">18</option>
  						<option value="9">19</option>
  						<option value="9">20</option>
  						<option value="9">21</option>
  						<option value="9">22</option>
  						<option value="9">23</option>
  						<option value="9">24</option>
  						<option value="9">25</option>
  						<option value="9">26</option>
  						<option value="9">27</option>
  						<option value="9">28</option>
  						<option value="9">29</option>
  						<option value="9">30</option>
  						<option value="9">31</option>
					</select>
					<select name="month" id="month">
						<option value="Month">Month</option>
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						<option value="4">4</option>
  						<option value="5">5</option>
  						<option value="6">6</option>
  						<option value="7">7</option>
  						<option value="8">8</option>
  						<option value="9">9</option>
  						<option value="9">10</option>
  						<option value="9">11</option>
  						<option value="9">12</option>
  					</select>
  					<select name="year" id="year">
						<option value="Year">Year</option>
  						<option value="1990">1990</option>
  						<option value="1991">1991</option>
  						<option value="1992">1992</option>
  						<option value="1993">1993</option>
  						<option value="1994">1994</option>
  						<option value="1995">1995</option>
  						<option value="1996">1996</option>
  						<option value="1997">1997</option>
  						<option value="1998">1998</option>
  						<option value="1999">1999</option>
  						<option value="2000">2000</option>
  						<option value="2001">2001</option>
  						<option value="2002">2002</option>
  						<option value="2003">2003</option>
  						<option value="2004">2004</option>
  						<option value="2005">2005</option>
  						<option value="2006">2006</option>
  						<option value="2007">2007</option>
  						<option value="2008">2008</option>
  						<option value="2009">2009</option>
  						<option value="2010">2010</option>
  						<option value="2011">2011</option>
  						<option value="2012">2012</option>
  						<option value="2013">2013</option>
  						<option value="2014">2014</option>
  						<option value="2015">2015</option>
  						<option value="2016">2016</option>
  						<option value="2017">2017</option>
  						<option value="2018">2018</option>
  						<option value="2019">2019</option>
  						<option value="2020">2020</option>
  						<option value="2021">2021</option>
  					</select>
					<br>
					<span id="date_error"></span>
				</td>
			</tr>
			<tr>
				<td>SELECT GAME</td>
				<td>
					 <input type="checkbox" id="hockey" name="hockey" value="hockey">
  					<label for="hockey"> Hockey</label>
  					<input type="checkbox" id="football" name="football" value="football">
  					<label for="football"> Football</label>
  					<input type="checkbox" id="badminton" name="badminton" value="badminton">
  					<label for="badminton"> Badminton</label>
  					<input type="checkbox" id="cricket" name="cricket" value="cricket">
  					<label for="cricket"> Cricket</label>
  					<input type="checkbox" id="vollyball" name="vollyball" value="vollyball">
  					<label for="badminton"> Vollyball</label>
  					<span id="game_error"></span>
				</td>
			</tr>
			<tr>
				<td>MARITAL STATUS</td>
				<td>
					<input type="radio" id="married" name="status" value="married">
					<label for="married">Married</label>
					<input type="radio" id="unmarried" name="status" value="unmarried">
					<label for="unmarried">Unmarried</label><br>
					<span id="status_error"></span>
				</td>
			</tr>
			<tr>
				<td ></td>
				<td >
					<input type="submit" name="submit" value="Submit Form">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					 <input type="checkbox" id="agreement" name="agreement" value="agreement">
  					<label for="agreement">I Agree to the Terms of use</label><br>
  					<span id="agree_error"></span>
				</td>
			</tr>
		</table>
	</fieldset>
	</form>
</div>
</body>
</html>