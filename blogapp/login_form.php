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
      <style type="text/css">
      	.size{
      		width: 500px;
      	}
      </style>
</head>
<body>
	<script type="text/javascript" src="js/validation.js"></script>	
	<div class="container size">
	<div class="row m-1 text-lg font-weight-bold text-center"><h3>LOGIN</h3></div><hr>
	<form action="db/database_login.php" onsubmit="return val()" method="POST">
		  <div class="form-row">
     <div class="col">
        <label>Email</label><br>
        <input type="email" name="email" id="email"
        class="form-control">
        <span id="email_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
		<div class="form-row">
			<div class="col">
				<label>Password</label><br>
				<input type="password" name="password" id="password"
				class="form-control">
				<span id="password_error" class="text-danger font-weight-bold"></span>
			</div>
		</div>
		<div class="form-row">
					<div class="col-md-2 mt-4">		
						<input type="submit" name="login" class="form-control btn btn-primary" value="LOGIN">
					</div>
					<div class="col-md-2 mt-4">	
					<a href="register.php" class="btn btn-primary btn-xm" role="button">REGISTER</a>
					</div>
				</div>	
		</form>
	</div>


</body>
</html>