<?php include("header.php");

	if(isset($_SESSION['username'])){
?>
		<p> Name:  <?php echo $_SESSION['name'] ?> </p>
<?php
	}
	else { ?>
	
	<p>	Must be logged in to view personal info </p>
	
	<?php }

	include("footer.php");
 ?>