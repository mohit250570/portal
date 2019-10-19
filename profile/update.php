<?php
require_once("../connection.php ");
session_start();
$email=$_SESSION['email'];
  //$conn=mysqli_connect('localhost','root','','grayscale');
  $old_email=$_GET['id'];
  $query="select * from register where email='".$old_email."'";
   $run=mysqli_query($con,$query);
   while ($data=mysqli_fetch_assoc($run))
   {

        
         $name=$data['name'];
        $email=$data['email'];
        $password=$data['password'];
        $mobile=$data['contact'];
        
   } 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Details</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="trial.php">
                        <h2 class="form-title">Update Details</h2>
                         <div class="form-group">
                            <input type="hidden" class="form-input" name="old_email"  value="<?php echo $old_email; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" value="<?php echo $name; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" value="<?php echo $email; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" value="<?php echo $password; ?>"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         <div class="form-group">
                            <input type="Mobile" class="form-input" name="mobile" id="password" value="<?php echo $mobile; ?>"/>
                            <span></span>
                        </div>
                        

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="update" id="update" class="form-submit" value="UPDATE"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../register/vendor/jquery/jquery.min.js"></script>
    <script src="../register/js/main.js"></script>

<!-- This templates was made by Colorlib (https://colorlib.com) -->


</body>
</html>