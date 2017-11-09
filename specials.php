<?php include("header.php");?>
<div id="specials">
	<main>
		<p><strong><font size = "4">The Best Deals in Town: ALL DAY, EVERYDAY</font></strong></p>
		<p>***CARRY OUT ONLY***</p>
		
		<form action="cart.php" id="specials-form">
		<div id="specials-1">
				<fieldset>
				<legend>Large Combo Pizza $8.00</legend>
					<img src="/img/pizzapizza.jpg" alt="Pizza" width="640" height="400" align="right">
					<br>
					<button type="add" onclick="cart.php">Large Combo Pizza $8.00</button>	
				</fieldset>
				<fieldset>	
					<legend>Two Large Pizzas for $9.99</legend>
					<img src= "/img/cheese.jpg" alt="CPizza">
					<br>
					<button type="add" onclick="cart.php" >Two Large Cheese Pizzas for $9.99</button>	
				</fieldset>
		</div>	
		
		<div id="specials-2">
			<fieldset>
				<legend>Large Meat Lovers $12.99</legend>
				<img src= "/img/meat.jpg" alt="MPizza">
				<br>
				<button type="add" onclick="cart.php" >Large Meat Lovers Pizza for $12.99</button>
			</fieldset>
			
			<fieldset>
				<legend>Large 3 Topping Pizza for $7.00</legend>
				<img src= "/img/3Tpizza.jpg" alt="3TPizza">
				<br>
				<button type="add" onclick="cart.php" >Large 3 topping Pizza for $7.00</button>
			</fieldset>
		
		</div>
		
			<fieldset>
				<legend>2 Medium 1 Topping Pizza</legend>
				<img src= "/img/Mpizza.jpg" alt="MedPizza">
				<button type="add" onclick="cart.php" >2 Medium 1 topping Pizza for $9.99</button>
			</fieldset>
		</form>
	</main>
</div>
<?php include("footer.php");?>