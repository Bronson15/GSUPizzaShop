<?php include(header.php);
	if(isset($_SESSION['username'])){
		echo "<h1>" . $_SESSION['name'] . "</h1>";
	}
?>

<?php include(footer.php);?>