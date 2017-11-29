<?php include("header.php");?>

<main>

	<table id="cart-table" cellpadding="12">
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<tr>
			<?php
			$_SESSION['total'] = 0.00;
				foreach($_SESSION['cart'] as $item){
					echo "<td> " . ucfirst($item->itemSize) . " ";
					if($item->itemCrust=="pan"){
						echo "Pan ";
					} else{
						echo "Hand-Tossed ";
					}
					echo " " .$item->itemName . "</td> ";
					echo "<td>" . $item->itemQuantity . "</td> ";
					echo "<td>$" . $item->itemPrice . "</td><br>";
					echo "</tr>";
					$_SESSION['total'] = $_SESSION['total'] + $item->itemPrice;
				}
			?>
		<td>
			<b>Total</b>
		</td>
		<td colspan=2 style="text-align: right;">
			<?php
				echo "$" . number_format($_SESSION['total'], 2);
			?>
		</td>
	</table>
	<br>
	<br>
	<div id="cart-buttons">

			<?php
					if (!empty($_SESSION['cart'])) {
						echo "<form method='POST'>";
							echo "<button type='submit' id='clearCart' name='clearCart'>Clear Cart</button>";
						echo "</form>";
						if(isset($_SESSION['username'])){
							echo "<form action='pizzatracker.php' method='POST'>";
								echo "<button type='submit' id='checkout' name='checkout'>Checkout</button>";
							echo "</form>";
						} else{
							echo "<form action='login.php'><button type='submit'>Login to checkout'></button></form>";
						}
					}
			?>

		<?php
				if(isset($_POST['clearCart'])){
					unset($_SESSION['cart']);
					header('Refresh: 0; URL = cart.php');
				}

		?>
	</div>
</main>

<?php include("footer.php");?>
