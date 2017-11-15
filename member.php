<?php include(header.php);
	if(isset($_SESSION['username'])){
		echo "<h1>" . $_SESSION['name'] . "</h1><br><p>Name: '" . $_SESSION['name'] . "'<br>
		<p>Address: '" . $_SESSION['address'] . "'<br>
		<p>Contact Number: '" . $_SESSION['number'] . "'<br>
		<p>Email: '" . $_SESSION['email'] . "'</p>";
	}
?>

<?php include(footer.php);?>