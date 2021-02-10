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
  <nav class='navbar navbar-expand-sm navbar-dark bg-light'>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="blogcategory.php" class="btn btn-success p-2 m-1" role="button">My Category</a></li>
      <li class="nav-item"><a href="#" class="btn btn-primary p-2 m-1 " role="button">My Profile</a></li>
       <li class="nav-item"><a href="logout.php" class="btn btn-warning p-2 m-1" role="button">Log Out</a></li>
    </ul>
  </nav>
  <div class="container size">
  <div class="row m-1 text-lg font-weight-bold text-center">Add New Category</div><hr>
    <form action="database_add_category.php" onsubmit="return validation_blog_post()" method="POST" enctype="multipart/form-data">
      <div class="form-row mt-4">
      <div class="col">
        <label>Title</label>
        <input type="text" name="title" id="title"
        class="form-control">
        <span id="title_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="5" id="content" ></textarea>
        <span id="content_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>URL</label>
        <input type="text" name="url" id="url"
        class="form-control" disabled="">
        <span id="url_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Meta Title</label>
        <input type="text" name="metatitle" id="url"
        class="form-control">
        <span id="meta_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Parent Category</label>
         <select class="form-control" id="perentcategory" name="perent category">
          <option>Education</option>
          <option>Life Style</option>
          <option>Health</option>
          </select>
        <span id="pcategory_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <div class="custom-file">
        <label>Image</label>        
        <input type="file" id="imageFile" name="fileimg">    
        <span id="image_error" class="text-danger font-weight-bold"></span>
      </div>
      </div>
    </div>
    <div class="form-row">
          <div class="col-md-2 mt-4"> 
          <input type="submit" name="add_post" class=" btn btn-primary" value="SUBMIT">
          </div>
      </div>  
    </form>
  </div>
</body>
</html>