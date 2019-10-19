<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
//$email_from='mohit250570@gmail.com';
$email_subject='New Form Submission';

$email_body= "User Name: $name.\n".
				"User Email $email.\n".
					"User Message $message.\n";

$to='mohitrathaur6@gmail.com';
$headers = "From: $email \r\n";
$headers = "Reply-To: $email \r\n";

if(mail($to,$email_subject,$email_body,$headers))
header("Location:index.html");
else{
	echo '<h1 style="text-align:center">error 404 </h1>';
}


?>