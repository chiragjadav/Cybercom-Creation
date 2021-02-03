<?php
require '../database.php';

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email'])&& isset($_POST['phone']) && isset($_POST['password'])){
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	if(empty($first_name)) {
		echo 'empty last name';
	} else {
		echo 'First Name: '.$first_name.'<br>';
	}
	if(empty($last_name)) {
		echo 'empty last name';
	} else {
		echo 'Last Name: '.$last_name.'<br>';
	}
	if(empty($date) || empty($month) || empty($year)) {
		echo 'empty date of birth';
	} else {
		echo 'Date of Birth: '.$date.'-'.$month.'-'.$year.'<br>';
	}
	if(empty($gender)) {
		echo 'empty gender';
	} else {
		echo 'Gender: '.$gender.'<br>';
	}
	if(empty($country)) {
		echo 'empty country';
	} else {
		echo 'Country: '.$country.'<br>';
	}
	if(empty($email)) {
		echo 'empty email';
	} else {
		echo 'Email: '.$email.'<br>';
	}
	if(empty($phone)) {
		echo 'empty phone';
	} else {
		echo 'Phone: '.$phone.'<br>';
	}
	if(empty($password)) {
		echo 'empty password';
	} else {
		echo 'Password: '.$password.'<br>';
	}

	form2($conn,$first_name,$last_name,$gender,$country,$email,$phone,$password);
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Form 2</title>
	<link rel="stylesheet" type="text/css" href="form2_css.css">
</head>
<body>
	<script type="text/javascript" src="form2.js"></script>
	<form action="form2.php" onsubmit="return validation()" method="POST">
		<table>
			<tr>
				<th colspan="2">Sign Up</th>
			</tr>
			<tr>
				<td class="right">First Name</td>
				<td>
					<input type="text" name="fname" id="fname"><br>
					<span id="fname_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Last Name</td>
				<td>
					<input type="text" name="lname" id="lname"><br>
					<span id="lname_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Date</td>
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
				<td class="right">Gender</td>
				<td>
					<input type="radio" id="male" name="gender" value="male">
					<label for="male">Male</label>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female">Female</label><br>
					<span id="gender_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Country</td>
				<td>
					<select name="country" id="country">
						<option value="Country">Country</option>
  						<option value="India">India</option>
  						<option value="UK">UK</option>
  						<option value="Japan">Japan</option>
  						<option value="Canada">Canada</option>
					</select><br>
					<span id="country_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">E-mail</td>
				<td>
					<input type="email" name="email" id="email"><br>
					<span id="email_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Phone</td>
				<td>
					<input type="text" name="phone" id="phone"><br>
					<span id="phone_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Enter Password</td>
				<td>
					<input type="password" name="password" id="password1"><br>
					<span id="password_error"></span>
				</td>
			</tr>
			<tr>
				<td class="right">Confirm Password</td>
				<td>
					<input type="password" name="confirm_password" id="password2"><br>
					<span id="confirm_password_error"></span>
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
			<tr>
				<td class="footer"></td>
				<td class="footer">
					<span class="center button">
						<span class="submit">
					<input type="submit" name="submit" value="Submit Form"></span><span class="reset">
					<input type="reset" name="reset" value="Reset">
					</span></span>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>