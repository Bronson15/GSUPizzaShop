<?php
	include("header.php");

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
					for($i = 1; $i <= 5; $i++){
						echo "basePrice[".$i."] = ".$pizzaInfo[$i]['base_price'].";";
						echo "mUpcharge[".$i."] = ".$pizzaInfo[$i]['m_upcharge'].";";
						echo "lUpcharge[".$i."] = ".$pizzaInfo[$i]['l_upcharge'].";";
						echo "pUpcharge[".$i."] = ".$pizzaInfo[$i]['p_upcharge'].";";
					}
				?>
				var priceDisplay = document.getElementById("price" + pizzaID);
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
				priceDisplay.innerHTML = "Price: $" + (price*quantity).toFixed(2);
			} catch(err){
				alert(err.message);
			}
		}

		function getToppingTotal(){
			total = 0.0;
			if(document.getElementById("A").checked) total += <?php echo $t_prices['A']; ?>;
			if(document.getElementById("B").checked) total += <?php echo $t_prices['B']; ?>;
			if(document.getElementById("C").checked) total += <?php echo $t_prices['C']; ?>;
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
			return total;
		}
</script>

<div id="pizza-table">
	<table>
		<tr>
			<td><b><?php echo $pizzaInfo[2]['product_name']; ?> Pizza</b>
				<div class="tile-class">
					<div id="tile-form">
						<form action="cart.php">
							<br>
							<div id="price2">Price: </div>
							<br>
							<select onchange="changePrice(2);" id="size2" style="width:200px">
								<option value="" disabled selected>Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium </option>
								<option value="large">Large</option>
							</select>
							<br>
							<select onchange="changePrice(2);" id="crust2" style="width: 200px">
								<option value="hand">Hand Tossed</option>
								<option value="pan">Pan</option>
							</select>
							<br>
							<select onchange="changePrice(2);" id="quantity2" >
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<button type="add" onClick="cart.php">Add to Cart</button>
						</form>
					</div>
					<br>
					<div id="tile-img"><img src="/img/pizza-cheese.png" alt="pizza-cheese"></div>
				</div>
			</td>

			<td><b><?php echo $pizzaInfo[3]['product_name']; ?> Pizza</b>
				<div class="tile-class">
					<div id="tile-form">
						<form action="cart.php">
							<br>
							<div id="price3">Price: </div>
							<br>
							<select onchange="changePrice(3);" id="size3" style="width: 200px">
								<option value="" disabled selected>Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
							<br>
							<select onchange="changePrice(3);" id="crust3" style="width: 200px">
								<option value="hand">Hand Tossed</option>
								<option value="pan">Pan</option>
							</select>
							<br>
							<select onchange="changePrice(3);" id="quantity3" >
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<button type="add" onClick="cart.php">Add to Cart</button>
						</form>
					</div>
					<br>
					<div id="tile-img"><img src="/img/pizza-pep.png" alt="pizza-pep"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td><b><?php echo $pizzaInfo[4]['product_name']; ?> Pizza</b>
				<div class="tile-class">
					<div id="tile-form">
						<form action="cart.php">
							<br>
							<div id="price4">Price: </div>
							<br>
							<select onchange="changePrice(4);" id="size4" style="width: 200px">
								<option value="" disabled selected>Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
							<br>
							<select onchange="changePrice(4);" id="crust4" style="width: 200px">
								<option value="hand">Hand Tossed</option>
								<option value="pan">Pan</option>
							</select>
							<br>
							<select onchange="changePrice(4);" id="quantity4" >
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<button type="add" onClick="cart.php">Add to Cart</button>
						</form>
					</div>
					<br>
					<div id="tile-img"><img src="/img/pizza-meat.png" alt="pizza-meat"></div>
				</div>
			</td>

			<td><b><?php echo $pizzaInfo[5]['product_name']; ?> Pizza</b>
				<div class="tile-class">
					<div id="tile-form">
						<form action="cart.php">
							<br>
							<div id="price5">Price: </div>
							<br>
							<select onchange="changePrice(5);" id="size5" style="width: 200px">
								<option value="" disabled selected>Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
							<br>
							<select onchange="changePrice(5);" id="crust5" style="width: 200px">
								<option value="hand">Hand Tossed</option>
								<option value="pan">Pan</option>
							</select>
							<br>
							<select onchange="changePrice(5);" id="quantity5">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							<button type="add" onClick="cart.php">Add to Cart</button>
						</form>
					</div>
					<br>
					<div id="tile-img"><img src="/img/pizza-sup.png" alt="pizza-sup"></div>
				</div>
			</td>


		</tr>
			<tr>
				<td colspan=2><b><?php echo $pizzaInfo[1]['product_name']; ?> Pizza</b>
				<form action = "cart.php">
				<br>
				<div id="price1">Price: </div>
				<br>
				<select onchange="changePrice(1);" id="size1" style="width: 200px">
					<option value="" disabled selected>Select Size</option>
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
				<p><select onchange="changePrice(1);" id="crust1" style="width: 200px">
					<option value="hand">Hand Tossed</option>
					<option value="pan">Pan</option>
				</select></p>
				<p><select name = "sauce" style="width:200px"</select>
					<option selected>Marinara Sauce</option>
				</select></p>
				<table>
					<tr>
						<td style="border:0;">
							<p><b>Veggies:</b></p>
							<p><input id="G" type="checkbox"><label>Green Pepper</label></p>
							<p><input id="I" type="checkbox"><label>Onion</label></p>
							<p><input id="J" type="checkbox"><label>Jalapeno</label></p>
							<p><input id="M" type="checkbox"><label>Mushroom</label></p>
							<p><input id="N" type="checkbox"><label>Pineapple</label></p>
							<p><input id="O" type="checkbox"><label>Black Olive</label></p>
							<p><input id="R" type="checkbox"><label>Banana Pepper</label></p>
							<p><input id="T" type="checkbox"><label>Tomato</label></p>
						</td>
						<td style="border:0;">
							<p><b>Meats:</b></p>
							<p><input id="A" type="checkbox"><label>Anchovy</label></p>
							<p><input id="B" type="checkbox"><label>Bacon</label></p>
							<p><input id="E" type="checkbox"><label>Beef</label></p>
							<p><input id="H" type="checkbox"><label>Ham</label></p>
							<p><input id="K" type="checkbox"><label>Chicken</label></p>
							<p><input id="P" type="checkbox"><label>Pepperoni</label></p>
							<p><input id="S" type="checkbox"><label>Sausage</label></p>
						</td>
					</tr>
				</table><br>
				<p><select onchange="changePrice(1);" id = "quantity1"</select>
					<option selected>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
				<button type = "add" onClick="cart.php">Add to Cart</button>
				</p>
			</td>
		</tr>
	</table>
</div>
<?php include("footer.php");?>
