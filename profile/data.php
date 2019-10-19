<?php
require_once("../connection.php ");
session_start();
	if(isset($_POST['upload'])){
	  $name=$_POST['name'];
	  $semester=$_POST['sem'];
	  $branch=$_POST['branch'];
	  $section=$_POST['section'];
	  $subject=$_POST['subject'];
	  $teacher_name=$_SESSION['name'];
	  $teacher_email=$_SESSION['email'];
	//$conn=mysqli_connect('localhost','root','','grayscale');
	$file_name=$_FILES['pdf']['name'];
	$file_type=$_FILES['pdf']['type'];
	$file_size=$_FILES['pdf']['size'];
	$file_temp_loc=$_FILES['pdf']['tmp_name'];
	$file_store="upload/".$file_name;
	move_uploaded_file($file_temp_loc, $file_store);
	$query="INSERT INTO `files`(`filename`, `name`, `path`, `semester`, `branch`, `section`, `subject`,`teacher_name`,`teacher_email`) VALUES ('$name','$file_name','$file_store','$semester','$branch','$section', '$subject','$teacher_name','$teacher_email')";
	
	$run=mysqli_query($con,$query);
	if($run==True){
	  header("location:profile.php");
	}
	else{
	  header("location:../error.html");
	}
	}

	?>