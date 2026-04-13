<?php
session_start(); 
include("Comp/connect.php");

if(isset($_POST['login']))
{
$admin=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM admin WHERE username = '".$admin."' AND password = '".$password."' limit 1";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1)
	{
	$_SESSION['user'] = $admin;
	echo '<script>alert("You have Succcessfully Logged In");
		window.location.replace("search.php");
		</script>';
		}
	else
		{
		echo '<script>alert("You have entered incorrect email or password. Please try again.");
		window.location.replace("adminlogin.php");
		</script>';
		}	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="Assets/bootstrap/css/datepicker.css">
		<script src="Assets/bootstrap/js/bootstrap-datepicker.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			form
				{
				width: 300px;
				height: 420px;
				background-color: rgba(0,0,0,0.5);
				margin:0,auto;
				margin-top:90px;
				margin-left:60px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:10px;
				border-radius:15px;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				color:magenta;
				font-weight:bolder;
				margin-bottom:40px;
				font-size:20px;
				}
			loginBox
				{
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				width:50px;
				height:50px;
				box-sizing:border-box;
				background:rgba(45,0,0,0.5);
				}
			user
				{
				width:100px;
				height:50px;
				border-radius:50%;
				overflow:hidden;
				position:absolute;
				top:calc(-100px/2);
				left:calc(50% - 50px);
				}
			.hero-image
				{
				background-image:url("Images/pic6.jpg");
				background-color:powderblue;
				height: 750px;
				background-position: center;
				background-repeat:no-repeat;
				background-size:cover;
				position:relative;
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
			
		</div>
	</nav>
	
	<div class="hero-image">
			<div class="col-md-4"></div>
		<div class="col-md-4">
			<form role="form" method="POST" align="center">
			
				<div class="loginBox" align="center">
				<br>
					<img src="" style="height:40% width:40%" class="user"/>
					<h1 style="color:orange;"> <strong><b> ADMIN LOGIN </b></strong> </h1>
					<br/>
				</div>
				
				<div class="form" align="left">
					<label><b> USERNAME : </b></label><input type="username" class="form-control" name="username" placeholder="Enter Your Email" aria-describedby="basic-addon1" required> <br/>
					<label><b> PASSWORD : </b></label><input type="password" class="form-control" name="password" placeholder="Enter Your Password" aria-describedby="basic-addon1" required> <br/>
				</div>
				
				<div class="form" align="center">
					<input class="btn btn-primary btn-lg" type="submit" name="login" value="login"  style=" width:50%"/><br/><br/>
				</div>
				
			</form>
		</div>
		<div class="col-md-4"></div>	
	</div>
</body>
</html>

