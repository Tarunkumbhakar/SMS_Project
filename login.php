<?php  
	require("dbcon.php");
	error_reporting(0);
	session_start();
	if(!isset($_SESSION['islogin'])){
		if(isset($_POST['login'])){
			$email = $_POST['email'];
			$password = $_POST['pass'];

			if(($email!="") && ($password!="")){
				$sql = "SELECT * FROM adminlogin_tb WHERE email ='$email' AND password ='$password'";
				$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result) == 1){
					$_SESSION['islogin'] = true;
					$_SESSION['a_email'] = $email;
					header("location:admin/studentdash.php");
				}else{
					$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Invalid Login</div>';
				}
			}else{
				$errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Please Fill All the Fileds.</div>';
			}
		}
    }else{
	    header("location:admin/studentdash.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- font awesome-->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php">SMS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="mynav">
	    <ul class="navbar-nav ml-auto custom_nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="login.php">Login</a>
	      </li>
	    </ul>
	  </div>
    </nav><!-- End navbar -->

	<div class="container mt-5">
		<div class="text-center h2">
			<i class="fas fa-stethoscope"></i>
            <span>Student Management System</span>
		</div>
		<h3 class="text-center mt-4"><i class="fas fa-user-secret text-danger"></i>Admin Login</h3>
		<div class="row mt-4">
			<div class="col-md-5 m-auto p-3 bg-light text-dark shadow-lg">
				<form method="post" action="login.php">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-danger btn-block mt-5">
					</div>
				</form>
				<?php if(isset($errmsg)) {echo $errmsg ; } ?>
			</div>
		</div>
	</div>

	<!-- javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/all.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			setTimeout(function(){
				$("#errmsg").fadeOut();
			},3000)
		});
	</script>
</body>
</html>