<?php 
	define('PAGE','updatestudent');
	define('TITLE','Update Student');
	include("../dbcon.php"); 
	include("header.php"); 
	
	session_start();
    if($_SESSION['islogin']){

    }else{
    	header("location:../login.php");
    }
?>
<?php 
	$sql = "SELECT * FROM student_tb";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ ?>
    	<div class="col-md-8 bg-light ml-4 ">
			<table class="table table-striped">
				<thead class="bg-dark text-light">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Roll</th>
						<th>Standard</th>
						<th>Gender</th>
						<th>City</th>
						<th>Phone</th>
						<th>Image</th>
						<th>Edit</th>
					</tr>
				</thead>

				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['id'] ; ?></td>
						<td><?php echo $row['name'] ; ?></td>
						<td><?php echo $row['roll'] ; ?></td>
						<td><?php echo $row['standard'] ; ?></td>
						<td><?php echo $row['gender'] ; ?></td>
						<td><?php echo $row['city'] ; ?></td>
						<td><?php echo $row['phone'] ; ?></td>
						<td>
							<img src="<?php echo $row['image'] ;?>" width="100px" height="100px">
						</td>
						<td>
							<a href="update.php?upd=<?php echo $row['id'] ; ?>" class="btn btn-success"><i class="fas fa-pen"></i></a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	<?php
    }else{
    	echo "<p>0 records</p>";
    }

?>

<?php include("footer.php"); ?>