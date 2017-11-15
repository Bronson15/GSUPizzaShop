<?php include(header.php);
	if(isset($_SESSION['username'])){
		$memberInfo = pg_query($pg_conn,"SELECT * FROM customer WHERE username = '");
	}
?>

<?php include(footer.php);?>