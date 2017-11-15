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
	<form>
	<?php
		if (isset($_POST['cart'])) {
			echo "<input type='submit' name='logout' method='logout' value='Empty Cart'>";
			echo "</form>";

			if(isset($_POST['logout']))) { 
				unset($_SESSION['cart']); 
			}
	}
	?>	
</main>
	
<?php include("footer.php");?>