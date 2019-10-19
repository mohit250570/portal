<?php

require_once("connection.php ");
if(isset($_POST['submit'])){
$subject="Subscribed";
$email=$_POST['email'];
$message="Hi you are successfully suscribed with GRAYSCALE.";

$query="INSERT INTO `subscribe`(`email`) VALUES ('$email')";

$run=mysqli_query($con,$query);
if($run==True){
mail($email,$subject,$message);
header("Location:index.html");

}
else{
header("Location:error.php");
}
}

?>