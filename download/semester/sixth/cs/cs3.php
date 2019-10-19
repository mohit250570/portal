
<?php
require_once("../../../../connection.php ");
//session_start();
//$teacher=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
<center>
		<header>Computer Science And Engineering (CSE-3)</header></center><br/>
		<hr/>
		<?php
//$con=mysqli_connect('localhost','root','','grayscale');
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='COMPUTER_NETWORK' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>COMPUTER NETWORK</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}

?>
<br/>
<?php
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='DATAWARE_DATAMINING' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>DATAWARE HOUSE AND DATA MINING</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}

?>
<br/>
<?php
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='SOCIOLOY' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>SOCIOLOY</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}

?>
<br/>
<?php
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='INDUSTRIAL_MANAGEMENT' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>INDUSTRIAL MANAGEMENT</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}
?>
<br/>
<?php
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='COMPUTER_GRAPHICS' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>COMPUTER GRAPHICS</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}?>
<?php
$query="SELECT * FROM `files` where semester='six' and branch='CSE' and subject='COMPILER' and section='3' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>COMPILER</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Teachername</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	$teacher=$row['teacher_name'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><?php echo $teacher; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	header('Location:../../../../error.html');
}
?>


	</body>
	</html>


