<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-3.5.1.js"></script>
</head>
<body>
	<div class="container">
		<div class="row bg-warning p-4 ">
			<div class="col font-weight-bold text-center text-danger" > <span>PHP WITH AJAX </span>
			</div>
		</div>
		
		<div class="row bg-primary p-2 ">
			
				<div class="col font-weight-bold text-center text-white" > </div>
			<div class="col font-weight-bold text-center text-white" > 
				<label>Name</label>
				<input type="text" name="name" id="name" class="form control">
			</div>
			<div class="col font-weight-bold text-center text-white" > 
				<label>Title</label>
				<input type="text" name="title" id="title" class="form control">
			</div>

			<div class="col font-weight-bold text-center text-white" >
				<button class="btn btn-success" id="save">Save</button>
			</div>
		
			<div class="col font-weight-bold text-center text-white" > </div>
			<div class="col font-weight-bold text-center text-white" > 
				<button class="btn btn-danger" id="load-button">Load data</button>
			</div>
		</div>
		
		<div class="row mt-1">
			<div class="col">
				<table class="table table-striped" id="table-data">
					<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Name</th>
					</tr>
					
					</thead>
				</table>
			</div>
		</div>

		
	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#load-button").on("click",function loadtable(e){
				$.ajax({
					url:"ajax-load.php",
					type:"POST",
					success:function(data){
						$("#table-data").html(data);
					}
				})
			});
				

		$("#save").on("click",function(e){
			var fname = $("#name").val();
			var title = $("#title").val();
			var element = this;
			if(fname=="") {

			} else {
			
				$.ajax({
					url:"ajax-insert.php",
					type:"POST",
					data:{firstname:fname,title:title},
					success : function(data){
						$(element).closest("tr").fadeIn();
						
					}
				});
			  }
			});
		});
			$(document).on("click",".btn-delete",function(){
				if(confirm("Do you realy want to delete this record ?")){
					var studentID = $(this).data("id");
					var element = this;
					$.ajax({
					url:"ajax-delete.php",
					type:"POST",
					data:{id:studentID},
					success:function(data){
							$(element).closest("tr").fadeOut();
						}
						})
			}
		});
		
		
	</script>
</body>
</html>