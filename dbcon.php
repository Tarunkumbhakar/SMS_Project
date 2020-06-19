<?php
	$db_host ="localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "sms_db";

	//connection
	$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

	//checking connection
	if(!$conn){
		echo "unsuccessfull";
	}

?>