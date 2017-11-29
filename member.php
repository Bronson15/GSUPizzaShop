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
		echo "<div id='order-history'><table><tr>";
			echo "<td>Order ID</td><td>Price</td><td>Date</td></tr>";
			while($row = pg_fetch_assoc($result)){
				echo"<tr><td>";
				$orderid = $row['orderid'];
				echo $orderid."</td><td>";
				$price = $row['price'];
				echo "$".number_format($price, 2)."</td><td>";
				$date = $row['date'];
				echo $date."</td></tr>";
			}
		echo '</table></div>';
		}
		else {
	?>
	<p>	Must be logged in to view personal info </p>
	</div>
	<?php }

	include("footer.php");
 ?>
