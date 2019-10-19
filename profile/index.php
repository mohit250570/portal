	<?php
	session_start();
	$teacher_name=$_SESSION['name'];
	$teacher_email=$_SESSION['email'];
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
	    <script type="text/javascript" src="cond.js">
	</script>
	
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
		
	</style>

	  </head>
	  <body>
	  	
	  	<div class="container" id="logout">
	  		<a href="logout.php" style="float: right;"><button type="button" class="btn btn-outline-danger">LogOut</button></a>
	  		

	  	</div>
	  	<br/><br/>
	  	<div class="form" id="form">
	    <form method="POST" action="data.php" enctype="multipart/form-data"> 
	    <center><h3><header>UPLOAD DOCUMENTS</header></h3></center>
	    <hr/>	
	    <label><span style="font-size:20px">UserName: <?php if(isset($_SESSION['name'])){

	    echo($_SESSION['name']); }
	    else{
	    	header("location:../login/index.html");
	    }   ?></label>
	    <br/>
	     <label for="file" >Select file:</label>

	     <input type="file" class="form-control" name="pdf" required="required">
	    
	     <label for="name">Name</label>
	     <input type="text" class="form-control" name="name">
	     
	    
	     <div id="main">
	     Select Semester:
	     <select id="sem" name="sem" class="form-control" onchange="populate('sem','slct1')">
	  	<option value=""></option>
		  <option value="one">1</option>
		  <option value="two">2</option>
		  <option value="three">3</option>
		  <option value="four">4</option>
		   <option value="five">5</option>
		  <option value="six">6</option>
		  <option value="seven">7</option>
		  <option value="eight">8</option>

		</select>
	Choose Branch:
	<select id="slct1" name="branch" class="form-control" onchange="populate1('slct1','slct2')">
	</select>
	Choose Section:
	<select id="section" name="section" class="form-control">
		 <option value=""></option>
		 <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
	</select>
	Choose Subject:
	<select id="slct2" class="form-control" name="subject"></select>
	<hr />
	</div>
	     <input type="submit" id="upload" name="upload" class="btn btn-secondary btn-lg btn-block" value="upload" onclick="upload()">
	 </form>
	</div>

	     
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  </body>

	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		document.getElementById('upload').onclick = function upload(){
	alert("Document Uploaded Successfully");
	//document.write("fuck!!!");
	//window.location.href="https://www.google.com";
	//document.write("yes");
};
	</script>

	</html>

