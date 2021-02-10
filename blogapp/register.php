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
  <div class="row m-1 text-lg font-weight-bold text-center"><h3>REGISTER</h3></div><hr>
    <form action="db/database_register.php" onsubmit="return validation()" method="POST">
      <div class="form-row mt-4">
      <div class="col">
        <label for="sel1">Prefix</label>
        <select class="form-control" id="sel1">
          <option>Choose..</option>
          <option>MR.</option>
          <option>MRS.</option>
          <option>MS.</option>
          <option>MISS.</option>
          </select>
        <span id="prif_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
      <div class="form-row mt-4">
      <div class="col">
        <label>First Name</label>
        <input type="text" name="firstname" id="firstname"
        class="form-control">
        <span id="fname_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Last Name</label>
        <input type="text" name="lastname" id="lastname"
        class="form-control">
        <span id="lname_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Email</label>
        <input type="email" name="email" id="email"
        class="form-control">
        <span id="email_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
     <div class="form-row mt-3">
      <div class="col">
        <label>Mobile Number</label>
        <input type="text" name="mobile" id="mobile"
        class="form-control">
        <span id="mobile_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Password</label><br>
        <input type="password" name="password" id="password"
        class="form-control">
        <span id="password_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
      <div class="form-row mt-3">
      <div class="col">
        <label>Confirm Password</label><br>
        <input type="password" name="confirm_password" id="confirm_password"
        class="form-control">
        <span id="cpassword_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Information</label>
        <textarea name="inform" class="form-control" rows="5" id="info" ></textarea>
        <span id="info_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label class="form-check-label">
        <input type="checkbox" id="agreement"class="form-check-input" value="">  <lable class="ml-5">Hereby, I Accept Terms & Conditions.</lable>
        </label>
        <span id="term_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row">
          <div class="col-md-2 mt-4"> 
          <input type="submit" name="register" class="form-control btn btn-primary" value="SUBMIT">
          </div>
      </div>  
    </form>
  </div>


</body>
</html>