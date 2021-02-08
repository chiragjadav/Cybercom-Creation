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
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
      
     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class='navbar navbar-expand-sm navbar-dark bg-dark'>
		<a href="#" class="navbar-brand">
			WebApp
		</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="header.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="contact.php" class="nav-link">Contacts</a></li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row m-1 text-lg font-weight-bold">Create Contact</div><hr>
		<div class="row">
		<div class="col-md-8">
			<form action="database_register.php" onsubmit="return validation()" method="POST">
				<div class="form-row mt-2">
					<div class="col-md-4 mr-4">
						<label>First Name</label>
						<input type="text" name="name" id="name" class="form-control">
						<span id="name_error" class="text-danger font-weight-bold"></span>
					</div>
					<div class="col-md-4">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control">
						<span id="email_error" class="text-danger font-weight-bold"></span>
					</div>
				</div>
				<div class="form-row mt-2">
					<div class="col-md-4 mr-4">
						<label>Phone</label>
						<input type="text" name="phone" id="phone" class="form-control">
						<span id="phone_error" class="text-danger font-weight-bold"></span>
					</div>
					<div class="col-md-4">
						<label>Title</label>
						<input type="text" name="title" id="title" class="form-control">
						<span id="title_error" class="text-danger font-weight-bold"></span>
					</div>
				</div>
				<div class="form-row mt-2">
					<div class="col-md-4">
						<label>Created</label>
						<div class="form-group">
        				<div class='input-group date' id='datetimepicker1'>
          				<input type='text' name="datetime" class="form-control" id="datetime" />
          				<span class="input-group-addon">
            			<span class="glyphicon glyphicon-calendar"></span>
          				</span>
        				</div>
        				<span id="date_error" class="text-danger font-weight-bold"></span>
      					</div>
					</div>
					
				</div>
				<div class="form-row">
					<div class="col-md-2 mt-4">		
						<input type="submit" name="submit" class="form-control btn btn-success" value="Create">
					</div>
				</div>	
			</form>
			</div>
		</div>
		</div><hr>
		<script type="text/javascript" src="js/validation.js">
		
				
		</script>
	
</body>