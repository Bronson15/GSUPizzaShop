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
	try{
		function changePrice(pizzaID){
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
		}

		function getToppingTotal(){
			total = 0.0;
			if(document.getElementById("pep").checked) total += .25;
			if(document.getElementById("chi").checked) total += .30;
			if(document.getElementById("pin").checked) total += .25;
			if(document.getElementById("jal").checked) total += .15;
			if(document.getElementById("bla").checked) total += .15;
			if(document.getElementById("bac").checked) total += .25;
			if(document.getElementById("ban").checked) total += .15;
			if(document.getElementById("mus").checked) total += .15;
			return total;
		}
	}
	catch(err){
			alert(err.message);
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
				<p>Toppings:</p>
				<p><label>Cheese
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "che"
				</label>
				<label>Pepperoni(.25)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "pep"
				</label></p>
				<p><label>Chicken(.3)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "chi"
				</label>
				<label>Pineapple(.25)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "pin"
				</label></p>
				<p><label>Jalapeno(.15)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "jal"
				</label>
				<label>Black Olives(.15)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "bla"
				</label></p>
				<label>Bacon(.25)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "bac"
				</label>
				<label>Banana Pepper(.15)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "ban"
				</label>

				<p><label>Mushrooms(.15)
					<input onchange="changePrice(1);" type = "checkbox" name = "top" id = "mus"
				</label></p>
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
