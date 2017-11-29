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
	$query = "SELECT * FROM orders WHERE customerid = '" .$_SESSION['customerid']."'";
	$result = pg_query($query);
	$i = 0;
	echo '<table><tr>';
	while ($i < pg_num_fields($result)){
		$fieldName = pg_field_name($result, $i);
		echo '<td>' . $fieldName . '</td>';
		$i = $i + 1;
	}
	echo '</tr>';
	$i = 0;

	while ($row = pg_fetch_row($result)) {
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count){
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;
	}
	pg_free_result($result);

	echo '</table>';
	
	}
	else {
?>
	<p>	Must be logged in to view personal info </p>
	</div>
	<?php }

	include("footer.php");
 ?>
