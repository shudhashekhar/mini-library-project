<?php
session_start();
include("Comp/connect.php");	
$mail = $_SESSION['user'];
$book_name = $_GET['book_name'];
$author_name = $_GET['author_name'];
$query1 = "DELETE FROM booklist WHERE book_name = '$book_name' && author_name='$author_name'";
$data1 = mysqli_query($conn,$query1);
if($data1)
{
	echo '<script>alert("Record Deleted Successfully");
					window.location.replace("booklist.php");
					</script>';
}
else{
	echo '<script>alert("Delete Process Failed");
					window.location.replace("booklist.php");
					</script>';
}
?>