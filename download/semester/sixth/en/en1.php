
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
		<header>Electrical And Electronics (EN-1)</header></center><br/>
		<hr/>
		<?php
//$con=mysqli_connect('localhost','root','','grayscale');
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='INDUSTRIAL_MANAGEMENT' and section='1' ";
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
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='CYBER_SECURITY' and section='1' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>CYBER SECURITY</h3>
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
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='POWER_SYSTEM_ANALYSIS' and section='1' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>POWER SYSTEM ANALYSIS</h3>
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
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='SPECIAL_ELECTRICAL_MACHINE' and section='1' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>SPECIAL ELECTRICAL MACHINE</h3>
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
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='MICRO_PROCESSOR' and section='1' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>MICRO PROCESSOR</h3>
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
$query="SELECT * FROM `files` where semester='six' and branch='EN' and subject='POWER_ELECTRONICS' and section='1' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>POWER ELECTRONICS</h3>
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


