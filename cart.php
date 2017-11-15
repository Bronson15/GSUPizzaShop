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
	<? php
		if (isset($_POST['cart'])) {

			$_SESSION['cart'] = $_POST["cart"];
			
			echo "<form><input type='submit' name='empty' method='empty' value='Empty Cart'></form>";
			
			if(isset($_POST['empty']) && ($_POST['empty'] == "Empty Cart")) { 
				unset($_SESSION['cart']); 
			}
		
	?>	
</main>
	
<?php include("footer.php");?>