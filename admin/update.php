<?php 
	define('PAGE','updatestudent');
	define('TITLE','Edit');
	include("../dbcon.php"); 
	include("header.php"); 
	
	session_start();
    if($_SESSION['islogin']){

    }else{
    	header("location:../login.php");
    }

    //edit student
    if(isset($_GET['upd'])){
    	$id = $_GET['upd'];
    	$sql = "SELECT * FROM student_tb WHERE id ='$id'";
    	$result = mysqli_query($conn,$sql);
    	$row = mysqli_fetch_assoc($result);
    }

    //update student
    if(isset($_POST['update'])){
    	$name = $_POST['name'];
    	$roll = $_POST['roll'];
    	$standard = $_POST['standard'];
    	$gender = $_POST['gender'];
    	$city = $_POST['city'];
    	$phone = $_POST['phone'];

    	if(($name!="" && $roll!="" && $standard!="" && $gender!="" && $city!="" && $phone!="")){
    	    $sql = "UPDATE student_tb SET `name`='$name', `roll`='$roll', `standard`='$standard', `gender`='$gender', `city`='$city', `phone`='$phone' WHERE id = '$id'";
    	   $result = mysqli_query($conn,$sql);
    	   if($result){
    	     	$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Update Successfully</div>';
    	   }else{
    	   		$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">somethng went wrong</div>';
    	   }	
    	}else{
    		$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Please Fill All the Fileds.</div>';
    	}

    }
?>
<div class="col-md-6 shadow-lg bg-light ml-4"><!-- start 1st row 2nd column -->
 		<h3 class="text-center mt-4">Update Student</h3>
 		<?php if(isset($errmsg)) {echo $errmsg ; } ?>
 		<form method="post" class="mt-3">
 			<div class="form-group">
 				<label>Name</label>
 				<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
 			</div>
 			<div class="form-group">
 				<label>Roll</label>
 				<input type="text" name="roll" class="form-control" value="<?php echo $row['roll']; ?>">
 			</div>
 			<div class="form-group">
 				<label>Standard</label>
 				<select name="standard" class="form-control">
 					<option value="">seletc standard</option>
					<option value="5"
					<?php  
						if($row['standard'] == "5"){
							echo "selected";
						}
					?>
					>5th</option>
					<option value="6"
					<?php  
						if($row['standard'] == "6"){
							echo "selected";
						}
					?>
					>6th</option>
					<option value="7"
					<?php  
						if($row['standard'] == "7"){
							echo "selected";
						}
					?>
					>7th</option>
					<option value="8"
					<?php  
						if($row['standard'] == "8"){
							echo "selected";
						}
					?>
					>8th</option>
					<option value="9"
					<?php  
						if($row['standard'] == "9"){
							echo "selected";
						}
					?>
					>9th</option>
					<option value="10"
					<?php  
						if($row['standard'] == "10"){
							echo "selected";
						}
					?>
					>10th</option>
 				</select>
 			</div>
 			<div class="form-group">
 				<label>Gender :</label>
 				<input type="radio" name="gender" value="male"
 				<?php  
					if($row['gender'] == "male"){
						echo "checked";
					}
				?>
 				>Male
 				<input type="radio" name="gender" value="female"
 				<?php  
					if($row['gender'] == "female"){
						echo "checked";
					}
					?>
 				>Female
 			</div>
 			<div class="form-group">
 				<label>City</label>
 				<select name="city" class="form-control">
 					<option value="">seletc city</option>
					<option value="bankura"
					<?php  
						if($row['city'] == "bankura"){
							echo "selected";
						}
					?>
					>Bankura</option>
					<option value="asansol"
					<?php  
						if($row['city'] == "asansol"){
							echo "selected";
						}
					?>
					>Asansol</option>
					<option value="kolkata"
					<?php  
						if($row['city'] == "kolkata"){
							echo "selected";
						}
					?>
					>Kolkata</option>
					<option value="durgapur"
					<?php  
						if($row['city'] == "durgapur"){
							echo "selected";
						}
					?>
					>Durgapur</option>
 				</select>
 			</div>
 			<div class="form-group">
 				<label>Phone</label>
 				<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>">
 			</div>
 			<div class="form-group">
 				<input type="submit" name="update" value="Update" class="btn btn-success">
 				<a href="updatestudent.php" class="btn btn-secondary ml-3">Back</a>
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