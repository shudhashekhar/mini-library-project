<?php
session_start();
include("Comp/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-LIBRARY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.hero-image
		{
		height: 750px;
		background-position: center;
		background-size:cover;
		position:relative;
		background-repeat:no-repeat;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><b>E-LIBRARY</b></a>
			</div>
			
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span><b> HOME</b></a></li>
				<li><a href="adminlogin.php"><b>ADMIN</b></a></li>
			</ul>
	
	 <!-- Menu on the right -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> SIGN UP </b></a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN </b></a></li>
			</ul>
	
		</div>
	</nav>
	
<div class="hero-image"> 
	<div class="row">
	<div class="col-xs-12" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
	
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/R.jfif" style="width:100%;">
      </div>
	  
	   <div class="item">
        <img src="Images/pic15.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/pic7.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/pic8.jpg" style="width:100%;">
      </div>
	  
	  <div class="item">
        <img src="Images/pic9.jpg" style="width:100%;">
      </div>
	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
</div>
</body>
</html>
