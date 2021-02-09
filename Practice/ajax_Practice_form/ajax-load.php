<?php
$conn = @mysqli_connect("localhost","root","","cybercom") or die("connection failed");
$query = "SELECT id,firstname FROM webapp";
$result = @mysqli_query($conn,$query) or die("SQL error");
$output = "";
if(mysqli_num_rows($result) > 0) {
	$output = '<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th colspan="2">Action</th>
						</tr>';

						while($row = mysqli_fetch_assoc($result)){
							$output .='<tr><td>'. $row["id"].'</td><td> '.$row["firstname"].'</td>
								<td> 
								<button class="btn btn-danger btn-delete" data-id='.$row["id"].'>Delete</button>
								</td></tr>';
						}
						$output .='</thead></table>';

						mysqli_close($conn);
						echo $output;
} else {
	echo "No record found";
}

?>