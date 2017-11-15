<?php include("header.php");

	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['name']);
	unset($_SESSION['address']);
	echo "<script type='text/javascript'>alert('Successfully logged out')</script>";
	session_destroy();
	header('Refresh: 2; URL = login.php');
	
	include("footer.php")
?>