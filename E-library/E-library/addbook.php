<?php
session_start();
include("Comp/connect.php");
$admin = $_SESSION['user'];	
if(isset($_POST['submit']))
	{
		 $book_name = strtoupper($_POST['book_name']);
	   	 $author_name = strtoupper($_POST['author_name']);
		 $date = $_POST['date'];
		 $sql = "INSERT INTO booklist(book_name,author_name,date_of_publication) VALUES ('$book_name','$author_name','$date')";
		 $res = mysqli_query($conn,$sql);
			if($res){
				echo '<script>alert("Entry Successfull");
						window.location.replace("search.php");
					</script>';
				}else{
					echo '<script>alert("Erorr Try after sometime");</script>';
				}
	 }
	if(isset($_POST['reset']))
	{
		echo '<script>window.location.replace("search.php");
					</script>';
	}
?>


<!DOCTYPE html>
<html>
	
<head>
		<title>Add book</title>
		
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
				background-color: rgba(0,0,0,0.6);
				margin:0,auto;
				margin-top:70px;
				padding-top:10px;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-top:20px;
				color:Orange;
				font-weight:bolder;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				}
			.hero-image
				{
				background-image:url("Images/pic16.jpg");
				background-color:powderblue;
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
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span><b>HOME</b></a></li>
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
					<label style="font-size:20px;"><b> BOOK NAME : </b></label><input type="text" class="form-control" name="book_name" Placeholder="Enter Book Name" aria-describedby="basic-addon1" ><br/>
					<label style="font-size:20px;"><b> AUTHOR NAME : </b></label><input type="text" class="form-control" name="author_name" Placeholder="Enter author Name" aria-describedby="basic-addon1" ><br/>
					<label style="font-size:20px;"><b> DATE OF PUBLICATION : </b></label><input type="date" class="form-control" name="date" Placeholder="Enter Date Of Publication" aria-describedby="basic-addon1" ><br/>
				</div>
				<div class="form" align="center">
					</br><input class="btn btn-primary btn-lg" type="submit" name="submit" value="Save"  style=" width:auto"/>			
				</div>	
			</form>
		</div>
		</div>
		<div class="col-md-4"></div>
</div>
	</body>
</html>