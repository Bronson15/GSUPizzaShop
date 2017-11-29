<?php
include("header.php");
if(isset($_POST['addspecial'])){
	$productID = $_POST['productid'];
	$orderItem = new OrderItem();
	$orderItem->itemID = $productID;
	$orderItem->itemName = $pizzaInfo[$productID]['product_name']." Pizza";
	$orderItem->itemSize = $_POST['size'];
	$orderItem->itemQuantity = $_POST['quantity'];
	$orderItem->itemCrust = $_POST['crust'];
	$orderItem->itemToppings = $pizzaInfo[$productID]['toppings'];
	$orderItem->itemPrice = $_POST['price'];
	array_push($_SESSION['cart'], $orderItem);
	echo "<h3 align='center' style='color: #3B61F2;'>";
	echo $orderItem->itemQuantity . "x ";
	echo ucfirst($orderItem->itemSize) . " ";
	if($orderItem->itemCrust=="pan"){
		echo "Pan ";
	} else{
		echo "Hand-Tossed ";
	}
	echo $orderItem->itemName . " successfully added to cart!";
	echo "</h3>";
}
?>
	<script>
		function addSpecial(specialID){
			var spCO = document.getElementById("carryout");
			if(specialID==1) spCO.submit();
		}
	</script>
	<div id="index-body-text">		
		<main>
		<br><img style="width:auto;" src="img/home.png" usemap="main"><br><br>
		<form id="carryout" method="POST" style="margin: 0; padding: 0;">
			<input name="productid" type="hidden" value="4" />
			<input name="size" type="hidden" value="large" />
			<input name="quantity" type="hidden" value="1" />
			<input name="crust" type="hidden" value="hand" />
			<input name="price" type="hidden" value="8.00" />
			<input name="addspecial" type="hidden" value="true" />
		</form>
		<div id="pizza-deals">
			<table align="center">
				<caption><b>Deals<b></caption>
				<tbody>
					<tr>
					<td>
					<!--image placed here-->
					<img src="img/specials_college.png" usemap="cksm">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/meat_specials.png" usemap="mms">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/topping_specials.png" usemap="tg">
					</td>
					</tr>
				</tbody>	
			</table>
		</div>
		<map name="main">
			<area onclick="addSpecial(1);" shape="rect" coords="636,318,723,285" href="#" alt="Pizza Special">
		</map>
		<map name="cksm">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		<map name="mms">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		<map name="tg">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		</main>
	</div>

<?php include("footer.php");?>
