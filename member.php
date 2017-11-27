<?php include("header.php");

	if(isset($_SESSION['username'])){
		echo "Name: " . $_SESSION['name'];
	}
 include("footer.php");?>