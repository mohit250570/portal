<?php
session_start();
require_once("../connection.php ");
if(isset($_POST['reset'])){
	$password=$_POST['password'];
	$email=$_SESSION['email'];
	$otp=$_SESSION['otp'];
	$otp1=$_POST['OTP'];
	
	if($otp==$otp1){
		$query="UPDATE `register` SET `password`='$password',`confirm_password`='$password' WHERE email='".$email."'";
		$run=mysqli_query($con,$query);
		echo "first";
		 if ($run==true)
	 {
    	session_destroy();
	    header("Location:index.html");
	 }
		 else{
		 	header("Location:../error.html");
		 }
	}
	else{
	 	header("Location:../error.html");
	 }
}
else{
	 	header("Location:../error.html");
	 }

	 ?>