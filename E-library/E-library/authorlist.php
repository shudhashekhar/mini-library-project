<?php
session_start();
$mail = $_SESSION['user'];
include("Comp/connect.php");

$author_name = $_SESSION['author_name'];
$q1 = "SELECT * FROM booklist WHERE author_name LIKE '%$author_name%'";
$data1 = mysqli_query($conn, $q1);
$total1 = mysqli_num_rows($data1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Author Search Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .hero-image {
            background-image: url("Images/pic14.jpg");
            background-color: green;
            height: 750px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        form {
            max-width: 800px;
            max-height: 430px;
            overflow: auto;
            background-color: rgba(0,0,0,0.6);
            margin-top: 70px;
            padding: 10px 20px 20px 20px;
            color: Orange;
            font-weight: bolder;
        }
        #tab th {
            text-align: center;
            color: #00cc66;
            border: solid #000099;
            font-size: 21px;
        }
        #tab td {
            text-align: center;
            color: #ff00bf;
            border: solid #000099;
            font-size: 17px;
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
                <li><a href="search.php"><b> BACK</b></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><b><?php print($mail); ?></b></a></li>
                <li><a href="logout.php"><b> LOGOUT</b></a></li>
            </ul>
        </div>
    </nav>

    <div class="hero-image">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form align="center">
                    <h1><b>RESULTS FOR : <?php echo strtoupper($author_name); ?></b></h1>
                    <br/>
                    <table class="table table-bordered" id="tab" width="100%" border="2">
                        <tr>
                            <th>BOOK NAME</th>
                            <th>AUTHOR NAME</th>
                            <th>DATE OF PUBLICATION</th>
                        </tr>
                        <?php
                        if($total1 > 0) {
                            while($result1 = mysqli_fetch_assoc($data1)) {
                                echo "<tr>
                                    <td>".$result1['book_name']."</td>
                                    <td>".$result1['author_name']."</td>
                                    <td>".$result1['date_of_publication']."</td>
                                </tr>";
                            }
                        } else {
                            echo '<tr><td colspan="3">No books found for this author.</td></tr>';
                        }
                        ?>
                    </table>
                    <a href="authorname.php" class="btn btn-primary">Search Again</a>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>