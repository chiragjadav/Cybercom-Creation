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
      <li class="nav-item"><a href="blogpost.php" class="btn btn-success p-2 m-1" role="button">My Blog Post</a></li>
      <li class="nav-item"><a href="#" class="btn btn-primary p-2 m-1 " role="button">My Profile</a></li>
       <li class="nav-item"><a href="logout.php" class="btn btn-warning p-2 m-1" role="button">Log Out</a></li>
    </ul>
  </nav>
  <div class="container size">
  <div class="row m-1 text-lg font-weight-bold text-center">Add New Blog Post</div><hr>
    <form action="db/database_add_post.php" onsubmit="return validation_blog_post()" method="POST" enctype="multipart/form-data">
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
        <label>Published At</label>
        <input type="datetime-local" name="time" id="time"
        class="form-control">
        <span id="time_error" class="text-danger font-weight-bold"></span>
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="col">
        <label>Category</label>
        <textarea name="category" class="form-control" rows="5" id="category" ></textarea>
        <span id="category_error" class="text-danger font-weight-bold"></span>
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