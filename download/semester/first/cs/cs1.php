
<?php
//session_start();
//$teacher=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	</head>
	<body>
<center>
		<header>Computer Science And Engineering (CSE-1)</header></center><br/>
		<hr/>
		<?php
$con=mysqli_connect('localhost','root','','grayscale');
$query="SELECT * FROM `files` where semester='one' and branch='CSE' and subject='PC' and section='2' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>PC</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	echo "error";
}

?>
<br/>
<?php
$query="SELECT * FROM `files` where semester='one' and branch='CSE' and subject='MATH' and section='2' ";
$run=mysqli_query($con,$query);
if($run==True){

	?>
	<br/>
	<h3>MATHS</h3>
	<table border="1px" width="100%">
	<tr>
	<th>Discription</th>
	<th>Filename</th>
	<th>Download</th>
	
</tr>
<?php
while($row=mysqli_fetch_array($run)){
	//$path=$row['path'];
	$id=$row['id'];
	$discription=$row['filename'];
	$filename=$row['name'];
	$semester=$row['semester'];
	?>
	
	<tr>
		<td><?php echo $discription;?> </td>
		<td><?php echo $filename; ?> </td>
		<td><a href="../../../../profile/download.php?id=<?php echo $id ?>">Download </a></td>
	</tr>
	<?php

}
?>
</table>

<?php

}
else{
	echo "error";
}

?>
	</body>
	</html>


