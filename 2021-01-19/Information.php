<!DOCTYPE>
<html>
<head>
	<title>From Data</title>
</head>
<body>
	<?php
		$first_nam = $_GET['firstName'];
		$last_name = $_GET['lastName'];
		$dateOfBirth = $_GET['dateOFBirth'];
		$gender = $_GET['gender'];
		$email = $_GET['email'];
		$password = $_GET['password'];
		$address = $_GET['address'];
		$state = $_GET['state'];
		$city = $_GET['city'];
		$phone = $_GET['phone'];
	?>
	<table>
		<tr>
			<td>First Name : </td>
			<td><?php echo $first_nam; ?></td>
		</tr>
		<tr>
			<td>Last Name : </td>
			<td><?php echo $last_name; ?></td>
		</tr>
		<tr>
			<td>Date of Birth : </td>
			<td><?php echo $dateOfBirth; ?></td>
		</tr>
		<tr>
			<td>Gender : </td>
			<td><?php echo $gender; ?></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><?php echo $password; ?></td>
		</tr>
		<tr>
			<td>address : </td>
			<td><?php echo $address; ?></td>
		</tr>
		<tr>
			<td>State : </td>
			<td><?php echo $state; ?></td>
		</tr>
		<tr>
			<td>City : </td>
			<td><?php echo $city; ?></td>
		</tr>
		<tr>
			<td>Phone : </td>
			<td><?php echo $phone; ?></td>
		</tr>
	</table>

</body>
</html>