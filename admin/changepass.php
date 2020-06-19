<?php
	define('PAGE','changepass');
	define('TITLE','Change Password');
	include("../dbcon.php");
	include("header.php");
	
	 session_start();
    if($_SESSION['islogin']){
    	$email = $_SESSION['a_email'];	
    }else{
    	header("location:../login.php");
    }


    //change passsword
	$sql = "SELECT * FROM adminlogin_tb WHERE email ='$email'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	//update password

	if(isset($_POST['changepass'])){
		$id = $_POST['id'];
		$email = $_POST['email'];
		$password = $_POST['pass'];

		if($email!="" && $password!=""){
			$sql = "UPDATE adminlogin_tb SET password ='$password' WHERE id = '$id'";
			$result = mysqli_query($conn,$sql);
			if($result){
				$errmsg = '<div class="alert alert-success" role="alert" id="errmsg">Updated Successfully</div>';
			}
		}else{
			$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Please Fill All the Fileds.</div>';
		}
	}

?>
	<div class="col-md-5 ml-4 p-3 bg-light text-dark shadow-lg">
		<form method="post" action="changepass.php">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $row['email'] ;?>" readonly>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="changepass" value="Change Password" class="btn btn-danger btn-block mt-5">
			</div>
		</form>
		<?php if(isset($errmsg)) {echo $errmsg ; } ?>
	</div>

<?php include("footer.php"); ?>
<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){
				$("#errmsg").fadeOut();
			},3000)
		});
</script>