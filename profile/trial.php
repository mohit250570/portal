
<?php
require_once("../connection.php ");
session_start();
  
	//$conn=mysqli_connect('localhost','root','','grayscale');

   if (isset($_POST['update']))
   {
$old_email=$_POST['old_email'];
   	$name=$_POST['name']; 
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	




	 $query="UPDATE `register` SET `name`='$name',`email`='$email',`password`='$password',`confirm_password`='$password',`contact`='$mobile' WHERE email='".$old_email."' ";
	 $run=mysqli_query($con,$query);

	  if ($run==true)
	 {
    session_destroy();
	    header("Location:profile.php");
	 }
      
      else
      {
      	header("Location:../error.html");
      }


   }

   else
   {
   	header("Location:../error.html");
   }


?>