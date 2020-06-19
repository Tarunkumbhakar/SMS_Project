<?php
	define('PAGE','studentdash');
	define('TITLE','Dashboard');
    include("header.php");
    include("../dbcon.php");
     
    session_start();
    if($_SESSION['islogin']){
    	
    }else{
    	header("location:../login.php");
    }

    //total student
    $sql = "SELECT * FROM student_tb";
    $result = mysqli_query($conn,$sql);
    $countstudent = mysqli_num_rows($result);

    //total admin
    $sql = "SELECT * FROM adminlogin_tb";
    $result = mysqli_query($conn,$sql);
    $countadmin = mysqli_num_rows($result);
?>
	<div class="col-md-10 m-auto">
		<div class="row">
			<div class="col-md-3 ml-5 mt-4">
			    <div class="card text-center text-light">
					<div class="card-header bg-info">Total Student</div>
					<div class="card-body bg-secondary">
						<h3><?php echo $countstudent; ?></h3>
					</div>
					<div class="card-footer bg-info">
						<a href="updatestudent.php" class="btn btn-outline-light">Show</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 ml-5 mt-4">
				<div class="card text-center text-light">
					<div class="card-header bg-secondary">Add Student</div>
					<div class="card-body bg-info"><h3><?php echo $countstudent; ?></h3></div>
					<div class="card-footer bg-secondary">
						<a href="addstudent.php" class="btn btn-outline-light">Add</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 ml-5 mt-4">
				<div class="card text-center text-light">
					<div class="card-header bg-info">Update Student</div>
					<div class="card-body bg-secondary"><h3><?php echo $countstudent; ?></h3></div>
					<div class="card-footer bg-info">
						<a href="updatestudent.php" class="btn btn-outline-light">Update</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 ml-5 mt-4">
				<div class="card text-center text-light">
					<div class="card-header bg-info">No of Admin</div>
					<div class="card-body bg-secondary"><h3><?php echo $countadmin; ?></h3></div>
					<div class="card-footer bg-info">
						<a href="addadmin.php" class="btn btn-outline-light">Add Admin</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	


<?php include("footer.php"); ?>