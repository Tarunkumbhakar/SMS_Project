<?php
	define('PAGE','addadmin');
	define('TITLE','Add Admin');
    include("header.php");
    include("../dbcon.php");
     
    session_start();
    if($_SESSION['islogin']){
    	
    }else{
    	header("location:../login.php");
    }

    //add admin
     if(isset($_POST['addadmin'])){
       $email = $_POST['email'];
       $password = $_POST['pass'];
        if(($email!="" && $password!="")){
            $sql = "INSERT INTO adminlogin_tb(email,password)VALUES('$email','$password')";
           $result = mysqli_query($conn,$sql);
           if($result){
                $errmsg = '<div class="alert alert-success" role="alert" id="errmsg">admin Inserted successdully</div>';
           }else{
                $errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">somethng went wrong</div>';
           }    
        }else{
            $errmsg = '<div class="alert alert-danger" role="alert" id="errmsg">Please Fill All the Fileds.</div>';
        }
    }



?>
    <div class="col-md-5 ml-4 mt-3 p-3 bg-light text-dark shadow-lg">
        <form method="post" action="addadmin.php">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="addadmin" value="Submit" class="btn btn-danger btn-block mt-5">
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