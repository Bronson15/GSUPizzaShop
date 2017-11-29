<?php include("header.php");

	if(isset($_SESSION['username'])){
?>
		<div id="member">
		<h1>Welcome to the the Members Page</h1>
		<p> Name:  <?php echo $_SESSION['name'] ?> </p>
		<p> Address: <?php echo $_SESSION['address'] ?> </p>
		<p> Email: <?php echo $_SESSION['email'] ?> </p>
		<p> Phone: <?php echo $_SESSION['phone'] ?> </p>
<?php
	echo "Order History: ";
	$query = "SELECT * FROM orders WHERE customerid = " .$_SESSION['customerid'];
	$result = pg_query($query);
	echo $result;

	}
	else {
?>
	<p>	Must be logged in to view personal info </p>
	</div>
	<?php }

	include("footer.php");
 ?>
