<?php
	define('TITLE', 'Student Result');
	include("header.php"); 
	include("dbcon.php");


	if(isset($_POST['submit'])){
		$standard = $_POST['standard'];
		$roll = $_POST['roll'];
		$sql = "SELECT * FROM student_tb WHERE standard = '$standard' AND roll = '$roll'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_assoc($result); ?>

			<div class="container mt-5">
				<div class="row">
					<div class="col-md-7 m-auto p-3" style="background-color: rgba(0,0,0,0.7);">
						<img src='<?php echo "dataimage/".$row["image"]; ?>' class="img-fluid" width="200px" height="200px" style="border-radius: 100px; margin-left: 200px; margin-top: 5px;">
						<table class="table mt-3 text-center">
							<thead class="text-light">
								<tr>
									<th>Name</th>
									<th>Roll</th>
									<th>Standard</th>
									<th>Gender</th>
									<th>City</th>
									<th>Phone</th>
								</tr>
							</thead>
							<tbody class="text-warning font-weight-bold" style="background-color: rgba(0,0,0,0.7);">
								<tr>
									<td><?php echo $row['name'] ;?></td>
									<td><?php echo $row['roll'] ;?></td>
									<td><?php echo $row['standard'] ;?></td>
									<td><?php echo $row['gender'] ;?></td>
									<td><?php echo $row['city'] ;?></td>
									<td><?php echo $row['phone'] ;?></td>
								</tr>
							</tbody>
						</table>
						<div class="text-center">
							<a href="index.php" class="btn btn-info btn-lg">Back</a>
						</div>
					</div>
				</div>
			</div>
	<?php
		}else{
			echo '<h3 class="text-center text-light bg-info p-3">No Result Found</h3>';
		}
	}
?>




<?php include("footer.php"); ?>