<?php include("header.php");?>
<div id="specials">
<main>
	<p><strong><font size = "4">The Best Deals in Town: ALL DAY, EVERYDAY</font></strong></p>
	<p>***CARRY OUT ONLY***</p>
	<form action="cart.php" >
	<fieldset>
	<img src="/img/pizzapizza.jpg" alt="Pizza">
    <button type="add" onclick="cart.php">Large Combo Pizza $8.00</button>	
	</fieldset>
	</form>
	<form action="cart.php" >	
    <fieldset>	
	<p>Broke College Kid Special</p>
	<img src= "/img/cheese.jpg" alt="CPizza">
	<button type="add" onclick="cart.php" >Two Large Cheese Pizzas for $9.99</button>	
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<p>Mighty Meat Special</p>
	<img src= "/img/meat.jpg" alt="MPizza">
	<button type="add" onclick="cart.php" >Large Meat Lovers Pizza for $12.99</button>
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<p>Toppings Galore</p>
	<img src= "/img/3Tpizza.jpg" alt="3TPizza">
	<button type="add" onclick="cart.php" >Large 3 topping Pizza for $7.00</button>
	</fieldset>
	</form>
	<form action="cart.php" >
	<fieldset>
	<img src= "/img/Mpizza.jpg" alt="MedPizza">
	<button type="add" onclick="cart.php" >2 Medium 1 topping Pizza for $9.99</button>
	</fieldset>
	</form>
</main>
</div>
<?php include("footer.php");?>