<?php
	session_start();
	$admin = $_SESSION['user'];
	include("Comp/connect.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="Assets/bootstrap/css/datepicker.css">
		<script src="Assets/bootstrap/js/bootstrap-datepicker.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="Assets/css/mystyle.css"/>
		<style type="text/css">
			.hero-image
				{
				background-image:url("Images/pic11.jpg");
				background-color:powderblue;
				height: 750px;
				background-position: center;
				background-repeat:no-repeat;
				background-size:cover;
				position:relative;
				}
			#button{
				background-color:#4CAF50;
				border:none;
				color:white;
				padding:10px;
				text-align:centre;
				display:inline-block;
				font-size:15px;
				margin:2px 1px;
				cursor:pointer;
				border-radius:12px;
				}
			#menu{
				width: 415px;
				height: 400px;
				background-color: rgba(0,0,0,0.7);
				margin:0,auto;
				margin-top:90px;
				margin-left:90px;
				padding-top:10px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:10px;
				border-radius:15px;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				color:orange;
				font-weight:bolder;
				margin-bottom:40px;
			}
		</style>
		
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		
			<!-- Logo -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php" class="navbar-brand" ><b>E-LIBRARY</b></a>
			</div>
			
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span><b> HOME</b></a></li>
			</ul>
			
			<!-- Menu on the right -->
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span><b><?php print($admin); ?></b></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b> LOGOUT </b></a></li>
			</ul>
		</div>
	</nav>
	
</body>
<div class="hero-image">
	<div class="container-fluid">
	<br/><br/>
		<div class="row">
			<div class="col-xs-4" >
			<!-- Empty Column -->
			</div>
			
			<div id="menu" class="col-xs-4" >
				<h2 style="text-align:center;font-size:30px;"><b>User Panel</b></h2><br>
				<div >
					<a style="font-size:30px;color:magenta;" href="#"><b>Search your book...</b></a><br><br>
						<button id="button" onclick="document.location='bookshow.php'">Search by Book name</button>
						<button id="button" onclick="document.location='authorname.php'">Search by Author name</button><br><br>
					<a style="font-size:30px;color:magenta;" href="#"><b>Show...</b></a><br><br>	
						<button id="button" onclick="document.location='booklistnormal.php'">Book List</button><br><br>					
				</div>
			</div>
			
			<div class="col-xs-4" >
			</div>
		</div>
	</div>
</div>
	
 </html>