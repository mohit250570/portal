<?php 
error_reporting(0);
session_start();
session_destroy();
header("location:../login/index.html");
//header["location:../login/index.html"];
?>