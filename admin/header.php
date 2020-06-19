<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE ; ?></title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!-- font awesome-->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="../css/custom.css">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #c1bebe;
		}
	</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="studentdash.php">SMS</a>
	</nav><!--end nav-->
    <div class="container-fluid"><!--start container-->
    	<div class="row"><!--start 1st row-->
    		<nav class="col-md-2 bg-light py-4 nav-pills"><!--start 1st row 1st column-->
    			<div class="sidebar-sticky">
    				<ul class="nav flex-column">
				      <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "studentdash") { echo 'active' ;}  ?>" href="studentdash.php">Dashboard</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "addstudent") { echo 'active' ;}  ?>" href="addstudent.php">Add Student</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "updatestudent") { echo 'active' ;}  ?>" href="updatestudent.php">Update Student</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "deletestudent") { echo 'active' ;}  ?>" href="deletestudent.php">Delete Student</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "addadmin") { echo 'active' ;}  ?>" href="addadmin.php">Add Admin</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php if(PAGE == "changepass") { echo 'active' ;}  ?>" href="changepass.php">Change Password</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="../logout.php">Logout</a>
				      </li>
				    </ul>
    			</div>
    		</nav><!--end 1st row 1st column-->

