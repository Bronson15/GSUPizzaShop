<?php include("header.php");?>
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
				<div id="price"></div>
				
				
					
				<select id="size" style="width:200px">
					<option value="small">Small</option>
					<option value="medium">Medium <?php $result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
								$row = pg_fetch_assoc($result);
								$price = $row['price']; ?></option>
					<option value="Large">Large</option>
				</select>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
				<script>
					function makeAjaxRequest(opts){
						$.ajax({
						  type: "POST",
						  data: { price: price },
						  url: "process_ajax.php",
						  success: function(json) {
							insertResults(json);
						  }
						});
					}
					function insertResults(json){
						$("#price").val(json["price"]);
					}
					function clearForm(){
						$("#price").val("");
					}
					$("#size").on("change", function() {
						var selected = $(this).val();
						if (selected == "0"){
							clearForm();
						} else {
							makeAjaxRequest(selected);
						}
					});
				</script>
					
				<p>
				<select name="Style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select name="Quantity" >
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
				Price: $<?php $result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 1;") or die("Error in SQL: " . pg_last_error());
								$row = pg_fetch_assoc($result);
								$price = $row['price']; 
								echo $price ?>
				</p>
				<select name="Size" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="Large">Large</option>
				</select>
				<p>
				<select name="Style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select name="Quantity" >
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
				Price: $<?php $result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 13;") or die("Error in SQL: " . pg_last_error());
								$row = pg_fetch_assoc($result);
								$price = $row['price']; 
								echo $price ?>
				</p>
				<select name="Size" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="Large">Large</option>
				</select>
				<p>
				<select name="Style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select name="Quantity" >
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
				<td><b>Combo</b>
				<form action="cart.php">
				<p>
				Price: this pizza doesn't exist in the DB
				</p>
				<select name="Size" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="Large">Large</option>
				</select>
				<p>
				<select name="Style" style="width: 200px">
					<option value="pan">Pan Pizza</option>
					<option value="hand">Hand Tossed</option>
				</select>
				</p>
				<p>
				<select name="Quantity">
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
				<p>Price: $<?php $result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 22;") or die("Error in SQL: " . pg_last_error());
								$row = pg_fetch_assoc($result);
								$price = $row['price']; 
								echo $price ?></p>
				<select name="Size" style="width: 200px">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="Large">Large</option>
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