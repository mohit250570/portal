<?php
session_start();

if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST["password"];

$conn=mysqli_connect('localhost','root','','grayscale');
//$query="CALL 'selectuser'($email,$pass) LIMIT 1";
$query="SELECT * FROM `register` where email='".$email."'and password='".$pass."' LIMIT 1";

$run=mysqli_query($conn,$query);

$data=mysqli_fetch_array($run);
//if(mysqli_num_rows($run)==1){
if($data[2]==$email && $data[3]==$pass){
	$_SESSION['name']=$data[1];
	$_SESSION['email']=$data[2];
	

	header("location:../profile/profile.php");


}
else{
	header("location:../error.html");
}
}
?>