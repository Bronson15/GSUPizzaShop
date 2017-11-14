<?php include("header.php");

	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	echo "Successfully logged out";
	
	header('Refresh: 2; URL = login.php');
	
	include("footer.php")
?>