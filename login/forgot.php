<?php
session_start();
require_once("../connection.php ");
if(isset($_POST['verify'])){
	$email=$_POST['email'];
	$query="select * from register where email='$email'";
	$subject="Reset Password";
	$rand=mt_rand(100000, 999999);
	$message=" OTP(one time password) for password reset of GRAYSCALE account is ".$rand;
	mail($email,$subject,$message);
	$_SESSION['otp']=$rand;
	$_SESSION['email']=$email;
	header("Location:resetpass.php");

}

?>