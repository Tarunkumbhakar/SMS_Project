<?php 
	define('PAGE','deletestudent');
	define('TITLE','Delete Student');
	include("../dbcon.php");
	include("header.php");
	
	 session_start();
    if($_SESSION['islogin']){

    }else{
    	header("location:../login.php");
    }

    //delete data

    if(isset($_GET['del'])){
    	$id = $_GET['del'];
    	$sql = "DELETE FROM student_tb WHERE id ='$id'";
    	$result = mysqli_query($conn,$sql);
    	if($result){
    		$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Deleted Successfully</div>';
    	}
    }
	
 ?>
<?php 
	$sql = "SELECT * FROM student_tb";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ ?>
    	<div class="col-md-8 bg-light ml-4 ">
    		<?php if(isset($errmsg)) {echo $errmsg ;} ?>
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
						<th>Delete</th>
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
							<a href="deletestudent.php?del=<?php echo $row['id'] ; ?>" class="btn btn-danger" onclick ="return checkdelete()"><i class="fas fa-trash"></i></a>
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
<script type="text/javascript">
	function checkdelete(){
		return confirm("Are You Want to Sure to delete this data?");
	}
		$(document).ready(function(){
			setTimeout(function(){
				$("#errmsg").fadeOut();
			},3000)
		});
</script>