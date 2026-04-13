<?php
session_start();
$mail = $_SESSION['user'];
include("Comp/connect.php");	

		$q1 = "SELECT * FROM booklist";
		$data1 = mysqli_query($conn, $q1);
		$total1 = mysqli_num_rows($data1);
				
?>



<!DOCTYPE html>
<html>
	
<head>
		<title>Book list</title>
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
				color:Orange;
				font-weight:bolder;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:15px;
				}
			.hero-image
				{
				background-image:url("Images/pic14.jpg");
				background-color:green;
				height:750px;
				background-position: center;
				background-repeat:no-repeat;
				background-size:cover;
				position:relative;
				}
			#tab th{
				text-align: center;
				color:#00cc66;
				border:solid #000099;
				font-size:21px;
			}
			#tab td{
				text-align: center;
				color:#ff00bf;
				border:solid #000099;
				font-size:17px;
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
				<li><a href="#"><span class="glyphicon glyphicon-user"></span><b><?php print($mail); ?></b></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b> LOGOUT </b></a></li>
			</ul>
		</div>
	</nav>
 
	<div class="hero-image">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form role="form" method="post" align="center">
				<div class="form" align="center"><br/>
						<h1> <strong><b> BOOK LIST </b></strong> </h1>
						<br/><br/>
					
					<div class="table_responsive" align="left">
					
					<table class = "table table-bordered" id = "tab" width="100%" border="2">
		<tr>
			<th><strong>BOOK NAME</strong></th>
			<th><strong>AUTHOR NAME</strong></th>
			<th><strong>DATE OF PUBLICATION</strong></th>
		</tr>
		<?php
			if($total1>0)
			{
					for($i=0;$i<$total1;$i++)
						{
						$result1 = mysqli_fetch_assoc($data1);
						echo "<tr>
							<td>".$result1['book_name']."</td>
							<td>".$result1['author_name']."</td>
							<td>".$result1['date_of_publication']."</td>
						</tr>";
						}
			}else{
				echo '<script>alert("NO Data Found");
						window.location.replace("booklistnormal.php");
					</script>';
			}
		?>
	</table>
			</form>
		</div>
		<div class="col-md-3"></div>
		</div>
		
    </div>
	</body>
</html>