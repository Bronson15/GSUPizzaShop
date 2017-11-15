<?php include("header.php");

	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['name']);
	unset($_SESSION['address']);
	echo "Successfully logged out";
	
	header('Refresh: 2; URL = login.php');
	
	include("footer.php")
?>