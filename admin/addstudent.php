<?php
	define('PAGE','addstudent');
	define('TITLE','Add Student');
	include("../dbcon.php");
	include("header.php");
	error_reporting(0);

	session_start();
    if($_SESSION['islogin']){

    }else{
    	header("location:../login.php");
    }

    //insert student
    if(isset($_POST['submit'])){
    	$name = $_POST['name'];
    	$roll = $_POST['roll'];
    	$standard = $_POST['standard'];
    	$gender = $_POST['gender'];
    	$city = $_POST['city'];
    	$phone = $_POST['phone'];
    	$filename = $_FILES['myfile']['name'];
    	$tempname = $_FILES['myfile']['tmp_name'];
    	$folder = "../dataimage/".$filename;
    	move_uploaded_file($tempname, $folder);

    	if(($name!="" && $roll!="" && $standard!="" && $gender!="" && $city!="" && $phone!="" && $filename!="")){
  
    	    $sql = "INSERT INTO student_tb(name, roll, standard, gender, city, phone, image)VALUES('$name','$roll','$standard','$gender','$city','$phone', '$folder')";
    	   $result = mysqli_query($conn,$sql);
    	   if($result){
    	     	$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Data Insert Successfully</div>';
    	   }else{
    	   		$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">somethng went wrong</div>';
    	   }	
    	}else{
    		$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Please Fill All the Fileds.</div>';
    	}
    }
 ?>
 	<div class="col-md-6 shadow-lg bg-light ml-4"><!-- start 1st row 2nd column -->
 		<h3 class="text-center mt-4">Add Student</h3>
 		<?php if(isset($errmsg)) {echo $errmsg ; } ?>
 		<form method="post" action="addstudent.php" class="mt-3" enctype="multipart/form-data">
 			<div class="form-group">
 				<label>Name</label>
 				<input type="text" name="name" class="form-control">
 			</div>
 			<div class="form-group">
 				<label>Roll</label>
 				<input type="text" name="roll" class="form-control">
 			</div>
 			<div class="form-group">
 				<label>Standard</label>
 				<select name="standard" class="form-control">
 					<option value="">seletc standard</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
 				</select>
 			</div>
 			<div class="form-group">
 				<label>Gender :</label>
 				<input type="radio" name="gender" value="male">Male
 				<input type="radio" name="gender" value="female">Female
 			</div>
 			<div class="form-group">
 				<label>City</label>
 				<select name="city" class="form-control">
 					<option value="">seletc city</option>
					<option value="bankura">Bankura</option>
					<option value="asansol">Asansol</option>
					<option value="kolkata">Kolkata</option>
					<option value="durgapur">Durgapur</option>
 				</select>
 			</div>
 			<div class="form-group">
 				<label>Phone</label>
 				<input type="text" name="phone" class="form-control">
 			</div>
 			<div class="form-group">
 				<label>Upload Image</label>
 				<input type="file" name="myfile" class="form-control">
 			</div>
 			<div class="form-group">
 				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
 			</div>
 		</form>
 	</div>

<?php include("footer.php"); ?>
<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){
				$("#errmsg").fadeOut();
			},3000)
		});
</script>