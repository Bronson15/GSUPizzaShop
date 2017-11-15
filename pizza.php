<?php
	include("header.php");
	$specialsMax = 6;

	//Get topping names and prices
	$result = pg_query($pg_conn, "SELECT * FROM toppings;");
	while($row = pg_fetch_assoc($result)){
		$t_names[$row['topping_id']] = $row['topping_name'];
		$t_prices[$row['topping_id']] = $row['price'];
	}

	//Get pizza info
	$result = pg_query($pg_conn, "SELECT * FROM prices;");
	while($row = pg_fetch_assoc($result)){
		$pizzaInfo[$row['product_id']]['product_name'] = $row['product_name'];
		$pizzaInfo[$row['product_id']]['base_price'] = $row['base_price'];
		$pizzaInfo[$row['product_id']]['m_upcharge'] = $row['m_upcharge'];
		$pizzaInfo[$row['product_id']]['l_upcharge'] = $row['l_upcharge'];
		$pizzaInfo[$row['product_id']]['p_upcharge'] = $row['p_upcharge'];
		$pizzaInfo[$row['product_id']]['toppings'] = $row['toppings'];
	}

	if(isset($_POST['add'])){
		$productID = substr($_POST['add'], 6);
		$orderItem = new OrderItem();
		$orderItem->itemID = $productID;
		$orderItem->itemName = $pizzaInfo[$productID]['product_name']." Pizza";
		$orderItem->itemSize = $_POST['size'];
		$orderItem->itemQuantity = $_POST['quantity'];
		$orderItem->itemCrust = $_POST['crust'];
		$orderItem->itemToppings = $pizzaInfo[$productID]['toppings'];
		$orderItem->itemPrice = $_POST['price'];
		echo "<h3 align='center' style='color: #3B61F2;'>";
		echo $orderItem->itemQuantity . "x ";
		echo ucfirst($orderItem->itemSize) . " '"
		echo $orderItem->itemName . "' successfully added to cart!";
		echo "</h3>";
	}

?>

<main>
	<div id="pizza-text">
		<h2>Welcome to GSU pizza shop</h2>
		<b>Check out our best deals under specials</b>
	</div>	
</main>

<script>
		function changePrice(pizzaID){
			try{
				var basePrice = {};
				var mUpcharge = {};
				var lUpcharge = {};
				var pUpcharge = {};
				<?php
					for($i = 1; $i <= $specialsMax; $i++){
						echo "basePrice[".$i."] = ".$pizzaInfo[$i]['base_price'].";";
						echo "mUpcharge[".$i."] = ".$pizzaInfo[$i]['m_upcharge'].";";
						echo "lUpcharge[".$i."] = ".$pizzaInfo[$i]['l_upcharge'].";";
						echo "pUpcharge[".$i."] = ".$pizzaInfo[$i]['p_upcharge'].";";
					}
				?>
				var priceDisplay = document.getElementById("price" + pizzaID);
				var hiddenPrice = document.getElementById("hiddenPrice" + pizzaID);
				var quantity = document.getElementById("quantity" + pizzaID).value;
				var size = document.getElementById("size" + pizzaID).value;
				var crust = document.getElementById("crust" + pizzaID).value;
				var price = basePrice[pizzaID];
				if(size == "medium") price += mUpcharge[pizzaID];
				if(size == "large") price += lUpcharge[pizzaID];
				if(crust == "pan") price += pUpcharge[pizzaID];
				if(pizzaID == 1) {
					price = price+getToppingTotal();
				}
				var finalPrice = (price*quantity).toFixed(2);
				priceDisplay.innerHTML = finalPrice;
				hiddenPrice.value = finalPrice;
			} catch(err){
				alert(err.message);
			}
		}

		function getToppingTotal(){
			var total = 0.0;
			if(document.getElementById("A").checked) total += <?php echo $t_prices['A']; ?>;
			if(document.getElementById("B").checked) total += <?php echo $t_prices['B']; ?>;
			if(document.getElementById("E").checked) total += <?php echo $t_prices['E']; ?>;
			if(document.getElementById("G").checked) total += <?php echo $t_prices['G']; ?>;
			if(document.getElementById("H").checked) total += <?php echo $t_prices['H']; ?>;
			if(document.getElementById("I").checked) total += <?php echo $t_prices['I']; ?>;
			if(document.getElementById("J").checked) total += <?php echo $t_prices['J']; ?>;
			if(document.getElementById("K").checked) total += <?php echo $t_prices['K']; ?>;
			if(document.getElementById("M").checked) total += <?php echo $t_prices['M']; ?>;
			if(document.getElementById("N").checked) total += <?php echo $t_prices['N']; ?>;
			if(document.getElementById("O").checked) total += <?php echo $t_prices['O']; ?>;
			if(document.getElementById("P").checked) total += <?php echo $t_prices['P']; ?>;
			if(document.getElementById("R").checked) total += <?php echo $t_prices['R']; ?>;
			if(document.getElementById("S").checked) total += <?php echo $t_prices['S']; ?>;
			if(document.getElementById("T").checked) total += <?php echo $t_prices['T']; ?>;
			var sauce = document.getElementById("sauce").value;
			if(sauce == "Xm") total += <?php echo $t_prices['Xm']; ?>;
			if(sauce == "Xa") total += <?php echo $t_prices['Xa']; ?>;
			if(sauce == "Xb") total += <?php echo $t_prices['Xb']; ?>;
			return total;
		}
</script>

<div id="pizza-table">
	<table>
		<?php
			$generated = -1;
			for($i = 2; $i <= $specialsMax; $i++){
				if($generated < 0){
					echo "<tr>";
					$generated = 0;
				} else{
					if($generated == 0){
						echo "</tr><tr>";
					}
				}
				echo "<td>";
					echo "<b>".$pizzaInfo[$i]['product_name']." Pizza</b>";
					echo "<div class='tile-class'>";
						echo "<div id='tile-form'>";
							echo "<form method='POST'>";
								echo "<input name='price' id='hiddenPrice".$i."' value='".number_format($pizzaInfo[$i]['base_price']+$pizzaInfo[$i]['l_upcharge'],2)."' type='text' hidden>";
								echo "<br>Price: $<span id='price".$i."'>".number_format($pizzaInfo[$i]['base_price']+$pizzaInfo[$i]['l_upcharge'],2)."</span><br>";
								echo "<select name='size' onchange='changePrice(".$i.");' id='size".$i."' style='width: 200px;'>";
									echo "<option value='small'>Small</option>";
									echo "<option value='medium'>Medium</option>";
									echo "<option value='large' selected>Large</option>";
								echo "</select><br>";
								echo "<select name='crust' onchange='changePrice(".$i.");' id='crust".$i."' style='width: 200px;'>";
									echo "<option value='hand'>Hand-Tossed</option>";
									echo "<option value='pan'>Pan</option>";
								echo "</select><br>";
								echo "<select name='quantity' onchange='changePrice(".$i.")' id='quantity".$i."'>";
									for($j = 1; $j <= 10; $j++) echo "<option>".$j."</option>";
								echo "</select>";
							echo "<button value='btnAdd".$i."' name='add' type='add'>Add to Cart</button>";
							echo "</form>";
						echo "</div>";
						echo "<br><div id='tile-img'><img src='/img/pizzaicon".$i.".png' alt='".$pizzaInfo[$i]['product_name']."'></div>";
					echo "</div>";
				echo "</td>";
				$generated++;
				$generated = $generated % 2;
			}
			echo "</tr>";
		?>

		<tr>
			<td colspan=2>
				<div id="custom-pizza-selector">
					<b><?php echo $pizzaInfo[1]['product_name']; ?> Pizza</b>
					<form action = "cart.php"><br>	
							<input name='price' id='hiddenPrice1' type='text' value='<?php echo number_format($pizzaInfo[1]['base_price']+$pizzaInfo[1]['l_upcharge'],2); ?>' hidden>
							Price: $<span id="price1"><?php echo number_format($pizzaInfo[1]['base_price']+$pizzaInfo[1]['l_upcharge'],2); ?></span>
							<br>
							<select name='size' onchange="changePrice(1);" id="size1" style="width: 200px">
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large" selected>Large</option>
							</select><br>
							<select name='crust' onchange="changePrice(1);" id="crust1" style="width: 200px">
								<option value="hand">Hand Tossed</option>
								<option value="pan">Pan</option>
							</select><br>
							<select name='sauce' onchange="changePrice(1);" id="sauce" style="width:200px"</select>
								<option value="Xm" selected>Marinara Sauce ($<?php echo number_format($t_prices['Xm'], 2); ?>)</option>
								<option value="Xa">Alfredo Sauce ($<?php echo number_format($t_prices['Xa'], 2); ?>)</option>
								<option value="Xb">BBQ Sauce ($<?php echo number_format($t_prices['Xb'], 2); ?>)</option>
							</select>
				</div>	
					
						<table id="custom-table">
							<tr>
								<td style="border:0;">
									<p><b>Veggies:</b></p>
									<p><input onchange="changePrice(1);" id="G" type="checkbox"><label>Green Pepper ($<?php echo number_format($t_prices['G'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="I" type="checkbox"><label>Onion ($<?php echo number_format($t_prices['I'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="J" type="checkbox"><label>Jalapeno ($<?php echo number_format($t_prices['J'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="M" type="checkbox"><label>Mushroom ($<?php echo number_format($t_prices['M'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="N" type="checkbox"><label>Pineapple ($<?php echo number_format($t_prices['N'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="O" type="checkbox"><label>Black Olive ($<?php echo number_format($t_prices['O'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="R" type="checkbox"><label>Banana Pepper ($<?php echo number_format($t_prices['R'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="T" type="checkbox"><label>Tomato ($<?php echo number_format($t_prices['T'], 2); ?>)</label></p>
								</td>
								<td style="border:0;">
									<p><b>Meats:</b></p>
									<p><input onchange="changePrice(1);" id="A" type="checkbox"><label>Anchovy ($<?php echo number_format($t_prices['A'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="B" type="checkbox"><label>Bacon ($<?php echo number_format($t_prices['B'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="E" type="checkbox"><label>Beef ($<?php echo number_format($t_prices['E'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="H" type="checkbox"><label>Ham ($<?php echo number_format($t_prices['H'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="K" type="checkbox"><label>Chicken ($<?php echo number_format($t_prices['K'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="P" type="checkbox"><label>Pepperoni ($<?php echo number_format($t_prices['P'], 2); ?>)</label></p>
									<p><input onchange="changePrice(1);" id="S" type="checkbox"><label>Sausage ($<?php echo number_format($t_prices['S'], 2); ?>)</label></p>
								</td>
							</tr>
						</table><br>
						<div id="custom-pizza-button">	
							<p><select onchange="changePrice(1);" id = "quantity1"</select>
								<?php for($i = 1; $i <= 10; $i++) echo "<option>".$i."</option>"; ?>
							</select>
							<button type = "add" onClick="cart.php">Add to Cart</button>
							</p>
						</div>	
					</form>
			</td>
		</tr>
	</table>
</div>
<?php include("footer.php");?>
