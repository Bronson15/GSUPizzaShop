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
				foreach($_SESSION['cart'] as $item){
					echo "<td> " . ucfirst($item->itemSize) . " ";
					if($item->itemCrust=="pan"){
						echo "Pan ";
					} else{
						echo "Hand-Tossed ";
					}
					echo " " .$item->itemName . "</td> ";
					echo "<td>" . $item->itemQuantity . "</td> ";
					echo "<td>" . $item->itemPrice . "</td><br>";
					echo "</tr>";
				}
			?>
	</table>
	<div id="cart-buttons">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<button type='submit' id="clearCart" name='clearCart'>Clear Cart</button>
			<button type='submit' id="checkout" name='checkout'>Checkout</button>
		</form>
		
		<?php
				if(isset($_POST['clearCart'])){
					unset($_SESSION['cart']);
				}	
				
				if(isset($_POST['checkout'])) {
					header('Refresh: 1; URL = pizzatracker.php');
				}
		?>	
	</div>	
</main>
	
<?php include("footer.php");?>