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
</head>
<body>
  <nav class='navbar navbar-expand-sm navbar-dark bg-light'>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="blogcategory.php" class="btn btn-success p-2 m-1" role="button">My Category</a></li>
      <li class="nav-item"><a href="#" class="btn btn-primary p-2 m-1 " role="button">My Profile</a></li>
       <li class="nav-item"><a href="logout.php" class="btn btn-warning p-2 m-1" role="button">Log Out</a></li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col"><h3>Blog Posts</h3></div>
    </div><hr>
    <div class="row">
      <div class="col">
        <a href="add_blog_post.php" class="btn btn-success p-2 m-1" role="button">Add Blog Post</a></li>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <table class="table" id="tabledata">
          <thead class="thead-dark">
            <tr>
              <th>Post ID</th>
              <th>Category Name</th>
              <th>Title</th>
              <th>Published Date</th>
              <th colspan="2">Action</th>
          </tr>
          <tr><?php 
                    require 'db/database.php';
                    $query = "SELECT * from blog_post";
                    $data = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($data))
                    {
                    ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['content'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['published'] ?></td>
                    <td><a href="db/database_update.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-xm" role="button">update</a></td>
                    <td><a href="db/database_delete_post.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-danger btn-xm">Delete</a>
                        </td>
                  </tr>
                  <?php } ?>
          </thead>
        </table>
      </div>
    </div>
  </div>
</body>
</html>