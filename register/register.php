<?php
require_once("../connection.php ");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$mobile_no=$_POST['mobile_no'];

//$conn=mysqli_connect('localhost','root','','grayscale');

$query="INSERT INTO `register`(`name`, `email`, `password`, `confirm_password`, `contact`) VALUES ('$name','$email','$password','$confirm_password','$mobile_no')";

$run=mysqli_query($con,$query);

if($run==True){
	header("location:../login/index.html");


}
else{
	header("Location:../error.html");
}

?>