<?php include("header.php");?>
<div id="specials">
<main>
	<p><strong><font size = "4">The Best Deals in Town: ALL DAY, EVERYDAY</font></strong></p>
	<p>***CARRY OUT ONLY***</p>
	<form action="cart.php" >
	<fieldset>
	<img src="/img/college_kid.png" alt="Pizza">
    <button type="add" onclick="cart.php">Large Combo Pizza $8.00</button>	
	</fieldset>
	</form>
	<form action="cart.php" >	
    <fieldset>	
	<img src= "/img/combo_special.png" alt="CPizza">
	<button type="add" onclick="cart.php" >Two Large Cheese Pizzas for $9.99</button>	
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<img src= "/img/customize.png" alt="MPizza">
	<button type="add" onclick="cart.php" >Large Meat Lovers Pizza for $12.99</button>
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<img src= "/img/double1.png" alt="3TPizza">
	<button type="add" onclick="cart.php" >Large 3 topping Pizza for $7.00</button>
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<img src= "/img/meatlovers.png" alt="MedPizza">
	<button type="add" onclick="cart.php" >2 Medium 1 topping Pizza for $9.99</button>
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<img src= "/img/partypeeps.png" alt="MedPizza">
	<button type="add" onclick="cart.php" >2 Medium 1 topping Pizza for $9.99</button>
	</fieldset>
	</form>
</main>
</div>
<?php include("footer.php");?>