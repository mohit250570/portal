<?php
require_once("../connection.php ");
//$conn=mysqli_connect('localhost','root','','grayscale');
$id=$_GET['id'];

$query="SELECT * FROM `files` WHERE id='".$id."'";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){
$path=$row['path'];
header('content-Disposition: attachment; filename='.$path.'');
header('content-type:application/octent-strem');
header('content-length='.filesize($path));
readfile($path);
}
?>