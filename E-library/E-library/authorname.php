<?php
	session_start();
	$admin = $_SESSION['user'];
	include("Comp/connect.php");
	if(isset($_POST['submit']))
	{	
		$_SESSION['author_name'] = $_POST['author_name'];
		echo '<script>window.location.replace("authorlist.php");</script>';
	}
?>


<!DOCTYPE html>
<html>	
<head>
		<title>Book show</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="Assets/bootstrap/css/datepicker.css">
		<script src="Assets/bootstrap/js/bootstrap-datepicker.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript"></script>
		<link href="w3.css" rel="stylesheet"/>
		<script src="Assets/jquery/jquery.min.js"></script>
		<script src="Assets/jquery/printThis.js"></script>
		<style type="text/css">
			form
				{
				max-width: 800px;
				max-height: 430px;
				overflow:auto;
				float:center;
				background-color: rgba(0,0,0,0.7);
				margin:0,auto;
				margin-top:150px;
				padding-top:10px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:20px;
				color:Orange;
				font-size:20px;
				font-weight:bolder;
				border-radius:15px;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				}
			.hero-image
				{
				background-image:url("Images/pic13.jpg");
				background-color:#cccccc;
				height: 750px;
				background-position: center;
				background-repeat:no-repeat;
				background-size:cover;
				position:relative;
				}
			#tab th, #tab td{
				text-align: center;
				color:Violet;
				border:solid black;
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
				<li><a href="#"><span class="glyphicon glyphicon-user"></span><b><?php print($admin); ?></b></a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span><b> LOGOUT </b></a></li>
			</ul>
		</div>
	</nav>
 
	<div class="hero-image">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="form" align="center">
			<br/>
			<form role="form" method="POST" align="center">
				<div class="form" align="left">
					<label><b>AUTHOR NAME : </b></label><input type="text" class="form-control" name="author_name" placeholder="Enter author name" aria-describedby="basic-addon1" ><br/>
				</div>
				<div class="form" align="center">
					</br><input class="btn btn-primary btn-lg" type="submit" name="submit" value="Search"  style=" width:auto"/>			
				</div>	
			</form>
		</div>
		</div>
		<div class="col-md-4"></div>
</div>
	</body>
</html>