<?php
	session_start();
	include("Comp/connect.php");
	if(isset($_POST['submit']))
	{
		 $name = strtoupper($_POST['name']);
	   	 $clgname = strtoupper($_POST['clgname']);
		 $branch = strtoupper($_POST['branch']);
		 $phn = strtoupper($_POST['mobile']);
		 $mail = $_POST['email'];
		 $pass = $_POST['pass'];
		 $cpass = $_POST['cpass'];
		 
		 if($pass == $cpass){
			 $sql = "SELECT  `email` FROM `student` WHERE email='$mail'";
			 $res = mysqli_query($conn,$sql);
			 $count = mysqli_num_rows($res);
			 if($count > 0)
				{
				 echo '<script>alert("User Already Exist.");</script>'; 
				}
				 else{
				$sql = "INSERT INTO student(name,clgname,branchname,contact_no,email,password) VALUES ('$name','$clgname','$branch','$phn','$mail','$pass')";
				$res = mysqli_query($conn,$sql);
				if($res){
					echo '<script>alert("Registration Successfull");
						window.location.replace("login.php");
					</script>';
				}else{
					echo '<script>alert("Erorr Try after sometime");</script>';
				}
			 }
				
		 }else{
			 echo '<script>alert("PASSWORD and CONFRIM PASSWORD is not same");</script>';
		 }
	}
	if(isset($_POST['reset']))
	{
		echo '<script>window.location.replace("signup.php");
					</script>';
	}
	
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Sign Up</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="Assets/bootstrap/js/bootstrap-datepicker.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			form
				{
				max-width: 400px;
				max-height: 490px;
				overflow:auto;
				float:center;
				background-color: rgba(0,0,0,0.5);
				margin:0,auto;
				margin-top:80px;
				padding-top:10px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:20px;
				color:magenta;
				font-weight:bolder;
				border-radius:15px;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				font-size:20px;
				}
			.hero-image
				{
				background-image:url("Images/pic5.jpg");
				background-color:#cccccc;
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
			
			<!-- Menu on the right -->
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> SIGN UP </b></a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN </b></a></li>
			</ul>
			
		</div>
	</nav>
	
	<div class="hero-image">
   
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="form" align="center">
			<br/>
			<form role="form" method="POST" align="center">
				<div class="form" align="center">
					<h1 style="color:orange;"> <strong><b> SIGN-UP </b></strong> </h1>
					<br/>
				</div>
				
				<div class="form" align="left">
					<label><b> NAME: </b></label><input type="text" class="form-control" name="name" value="" placeholder="Enter your Name" aria-describedby="basic-addon1" required ><br/>
					<label><b> COLLEGE NAME: </b></label><input type="text" class="form-control" name="clgname" value="" placeholder="Enter Your College name" aria-describedby="basic-addon1" required > <br/>	
					<label><b> BRANCH NAME: </b></label><input type="text" class="form-control" name="branch" value="" placeholder="Enter branch name" aria-describedby="basic-addon1" required > <br/>
					<label><b> CONTACT NO.: </b></label><input type="text" class="form-control" name="mobile" value="" placeholder="Enter Mobile Number" aria-describedby="basic-addon1" required > <br/>
					<label><b> EMAIL ID : </b></label><input type="email" class="form-control" name="email" value="" placeholder="Enter Your Email Address" aria-describedby="basic-addon1" required > <br/>			
					<label><b> PASSWORD: </b></label><input type="password" class="form-control" name="pass" value="" placeholder="Enter Password" aria-describedby="basic-addon1" required > <br/>
					<label><b> CONFRIM PASSWORD : </b></label><input type="password" class="form-control" name="cpass" value="" placeholder=" Confirm Password" aria-describedby="basic-addon1"  required > <br/>
					
				</div>
				
				<div class="form" align="center">
					</br><input class="btn btn-primary btn-lg" type="submit" name="reset" value="Reset"  style=" width:auto"/>
					<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Register"  style=" width:auto"/><br/>
						
				</div>
				
			</form>
	
		</div>
		
		</div>
		<div class="col-md-4"></div>
    </div>
	
	</body>
</html>