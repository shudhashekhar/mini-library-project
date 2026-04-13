<?php
session_start();
session_destroy();
unset($_SESSION['user']);
echo '<script>
	alert("You Have been Successfully Logged Out.");
	window.location.replace("index.php");</script>';
?>