
<?php
require_once("../connection.php ");
session_start();
$teacher=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
<center>
		<header>Files Uploaded By You</header></center><br/>
		<hr/>
		<?php
//$con=mysqli_connect('localhost','root','','grayscale');
$query="SELECT * FROM `files` where `teacher_email`= '$teacher'";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Sem</th>
	<th>Branch</th>
	<th>Section</th>
	<th>Subject</th>
	<th>Download</th>
	<th>Delete</th>
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$branch=$row['branch'];
	$section=$row['section'];
	$subject=$row['subject'];
	?>
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $semester; ?> </td>
		<td><?php echo $branch; ?> </td>
		<td><?php echo $section; ?> </td>
		<td><?php echo $subject; ?> </td>
		<td><a href="download.php?id=<?php echo $id ?>">Download </a></td>
		<td><a href="delete.php?Del=<?php echo $id ?>">Delete</a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header("Location:../error.html");
}

?>
	</body>
	</html>


