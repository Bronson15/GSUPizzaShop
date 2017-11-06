<?php 
	include("header.php");
	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 7;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$smallCheese = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$medCheese = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 9;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$largeCheese = $row['price']; 
	
	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 7;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$smallPep = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$medPep = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 9;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$largePep = $row['price'];
	
	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 7;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$smallMeat = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$medMeat = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 9;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$largeMeat = $row['price'];
	
	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 7;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$smallSup = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$medSup = $row['price']; 

	$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 9;") or die("Error in SQL: " . pg_last_error());
	$row = pg_fetch_assoc($result);
	$largeSup = $row['price'];
?>

<main>
	<p>Welcome to GSU pizza shop<p>
	<p>Check out our best deals under specials</p>
</main>
<div id="pizza-table">
	<table>
			<tr>
				<td><b>Cheese Pizza</b>
				<form action="cart.php">
				<p>
				<div id="cheesePrice">Price: </div>
				
				<script>
					function changePrice(object){
						var price = document.getElementById("price");
						var quantity;
						if(object.id == "cheeseSize") {
							quantity = document.getElementById("cheeseQuantity").value;
							if(object.value == "small") price = <?php echo $smallCheese; ?>;
							if(object.value == "medium") price = <?php echo $medCheese; ?>;
							if(object.value == "large") price = <?php echo $largeCheese; ?>;
							price = "Price: $" + (price*quantity).toFixed(2);
							document.getElementById("cheesePrice").innerHTML = price;
						}
						
						if(object.id == "pepSize") {
							quantity = document.getElementById("pepQuantity").value;
							if(object.value == "small") price = <?php echo $smallPep; ?>;
							if(object.value == "medium") price = <?php echo $medPep; ?>;
							if(object.value == "large") price = <?php echo $largePep; ?>;
							price = "Price: $" + (price*quantity).toFixed(2);
							document.getElementById("pepPrice").innerHTML = price;
						}
						
						if(object.id == "meatSize") {
							quantity = document.getElementById("meatQuantity").value;
							if(object.value == "small") price = <?php echo $smallMeat; ?>;
							if(object.value == "medium") price = <?php echo $medMeat; ?>;
							if(object.value == "large") price = <?php echo $largeMeat; ?>;
							price = "Price: $" + (price*quantity).toFixed(2);
							document.getElementById("meatPrice").innerHTML = price;
						}
						
						if(object.id == "supSize") {
							quantity = document.getElementById("supQuantity").value;
							if(object.value == "small") price = <?php echo $smallSup; ?>;
							if(object.value == "medium") price = <?php echo $medSup; ?>;
							if(object.value == "large") price = <?php echo $largeSup; ?>;
							price = "Price: $" + (price*quantity).toFixed(2);
							document.getElementById("supPrice").innerHTML = price;
						}
						
						
						
					}
				</script>
					
				<select onchange="changePrice(this);" id="cheeseSize" style="width:200px">
					<option value="" disabled selected>Select Size</option>
					<option value="small">Small</option>
					<option value="medium">Medium </option>
					<option value="large">Large</option>
				</select>
					
				<p>
				<select id="style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select onchange="changePrice(document.getElementById('cheeseSize'));" id="cheeseQuantity" >
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
				</p>
				</td>
		
				<td><b>Pepperoni</b>
				<form action="cart.php">
				<p>
				<div id="pepPrice">Price: </div>
				</p>
				<select onchange="changePrice(this);" id="pepSize" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
				<p>
				<select id="style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select onchange="changePrice(document.getElementById('pepSize'));" id="pepQuantity" >
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
				</p>
				
				
				
				</td>
			</tr>
			<tr>
				<td><b>Meat Lovers</b>
				<form action="cart.php">
				<p>
				<div id="meatPrice">Price: </div>
				</p>
				<select onchange="changePrice(this);" id="meatSize" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
				<p>
				<select id="style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select onchange="changePrice(document.getElementById('meatSize'));" id="meatQuantity" >
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
				</p>

				</td>
				<td><b>Supreme</b>
				<form action="cart.php">
				<p>
				<div id="supPrice">Price: </div>
				</p>
				<select onchange="changePrice(this);" id="supSize" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
				<p>
				<select id="Style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select onchange="changePrice(document.getElementById('supSize'));" id="supQuantity">
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
				</p>
				</td> 
				
				
			</tr>
				<td><b>Create your own</b>
				<form action = "cart.php">
				<p>Price: $
				</p>
				<select name="Size" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
			<p><select name = "crust" style="width:200px">
				<option selected>Pan</option>
				<option>Handtossed</option>
			</select></p>
			<p><select name = "sauce" style="width:200px"</select>
				<option selected>Marinara</option>
			</select></p>
			<p>Toppings:</p>
			<p><label>Cheese
				<input type = "checkbox" name = "top" value = "che"
			</label>
			<label>Pepperoni(.25)
				<input type = "checkbox" name = "top" value = "pep"
			</label></p>
			<p><label>Chicken(.3)
				<input type = "checkbox" name = "top" value = "chi"
			</label>
			<label>Pineapple(.25)
				<input type = "checkbox" name = "top" value = "pin"
			</label></p>
			<p><label>Jalapeno(.15)
				<input type = "checkbox" name = "top" value = "jal"
			</label>
			<label>Black Olives(.15)
				<input type = "checkbox" name = "top" value = "bla"
			</label></p>
			<label>Bacon(.25)
				<input type = "checkbox" name = "top" value = "bac"
			</label>
			<label>Banana Pepper(.15)
				<input type = "checkbox" name = "top" value = "ban"
			</label>
			
			<p><label>Mushrooms(.15)
				<input type = "checkbox" name = "top" value = "mus"
			</label></p>
			<p><select name = "quantity"</select>
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
	</table>
</div>		
<?php include("footer.php");?>