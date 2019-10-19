	<?php
	session_start();

	 ?>
	<!doctype html>
	<html lang="en">
	  <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../../../favicon.ico">
	    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

	    <!-- Bootstrap core CSS -->
	    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="carousel.css" rel="stylesheet">
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


	    <title>Upload files</title>
	    <script type="text/javascript" src="cond.js"></script>
	
	<style>
		#logout{
			margin-top: 20px;
		}
		#form{
			text-decoration-style: none;

		margin-left: 50px;
		margin-right: 50px;
		margin-top: 20px;
		}  
	
    #select1 {
        float:left;
        margin-left: 220px;
    }
    #select2 {
        float:left;
        margin-left: 50px;
    }
     #select3 {
        float:left;
        margin-left: 50px;
    }
     
  </style>

	  </head>
	  <body>
	  	
	  	<div class="container" id="logout">
	  		<a href="logout.php" style="float: right;"><button type="button" class="btn btn-outline-danger">LogOut</button></a>
	  		

	  	</div>
	  	<br/>
	  	<div class="form" id="form">
	    <form method="POST" action="index.php" enctype="multipart/form-data"> 
	    <center><h3 style="text-transform: uppercase;"><header>WELCOME <?php if(isset($_SESSION['name'])){

	    echo($_SESSION['name']); }
	    else{
	    	header("location:../login/index.html");
	    }  ?> </header></h3></center>


<center><h3 style="text-transform: uppercase;"><header>YOUR EMAIL <?php if(isset($_SESSION['email'])){

	    echo($_SESSION['email']); }
	    else{
	    	header("location:../login/index.html");
	    }  ?> </header></h3></center>

	    <hr/>	
	    </form>
	    <div style="margin-top: 50px;">
	    <div class="card" id="select1" style="width: 18rem;">
	    	<div class="card-body">
    <h5 class="card-title">Upload Documents</h5>
    <p class="card-text">Here you can upload new documents.</p>
    <a href="index.php" class="btn btn-secondary btn-lg btn-block">Upload Document</a>
  </div>
</div>
   <div class="card" id="select2" style="width: 18rem;">
	    	<div class="card-body">
    <h5 class="card-title">Display Document</h5>
    <p class="card-text">Here all the documents are display which is uploaded by you.</p>
    <a href="display.php" class="btn btn-secondary btn-lg btn-block">Display Document</a>
  </div>
</div>
   <div class="card" id="select3" style="width: 18rem;">
	    	<div class="card-body">
    <h5 class="card-title">Update Details</h5>
    <p class="card-text">Here you can update your personal details.</p>
    <a href="update.php?id=<?php echo $_SESSION['email'] ;?>" class="btn btn-secondary btn-lg btn-block">Update Details</a>
  </div>
  
</div>
</div>
<footer class="bg-black small text-center text-white-50" style="margin-top: 500px">
    <div class="container">
      Copyright &copy; GRAYSCALE 2019
    </div>
  </footer>
</body>
</html>