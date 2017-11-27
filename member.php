<?php include("header.php");

	if(isset($_SESSION['username'])){
		echo "<p>Name: " . $_SESSION['name'] . "</p>";
	}
	else echo "<p>Must be logged in to view personal info</p>"
 include("footer.php");?>