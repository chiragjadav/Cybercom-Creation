<?php
require 'db/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class='navbar navbar-expand-sm navbar-dark bg-dark'>
		<a href="#" class="navbar-brand">
			WebApp
		</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="header.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Contacts</a></li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row m-3"><h4>Read Contacts</h4></div><hr>
		<div class="row m-2"><a href="register.php" class="btn btn-success" role="button">Create Contact</a></div><hr>
		<div class="col-md-9">
			<div class="table-responsive">
                <table class="table" id="dataTable">
                	<tr>
                		<td>Sr No.</td>
                		<td>Name</td>
                		<td>Email</td>
                		<td>Phone</td>
                		<td>Title</td>
                		<td>Created</td>
                		<td colspan="2" class="text-center">Action</td>
                		
                	</tr>
                    <?php 
                    $query = "SELECT * from webapp";
                    $data = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($data))
                    {
                    ?>
                	<tr>
                		<td><?php echo $row['id'] ?></td>
                		<td><?php echo $row['firstname'] ?></td>
                		<td><?php echo $row['email'] ?></td>
                		<td><?php echo $row['phone'] ?></td>
                		<td><?php echo $row['title'] ?></td>
                		<td>12345678</td>
                		<td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-xm" role="button">update</a></td>
                		<td><a href="database_delete.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-danger btn-xm">Delete</a>
                        </td>
                	</tr>
                	<?php } ?>
                </table>
		</div>	
		</div>
		

</body>
</html>