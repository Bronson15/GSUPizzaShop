<?php include("header.php");?>
<div id="specials">
<main>
	<h1>The Best Deals in Town: ALL DAY, EVERYDAY</h1>
	<p>***CARRY OUT ONLY***</p>
	<form action="cart.php" >
	<fieldset>
	<p><strong>For People who call Supreme Pizza a Combo Pizza</strong></p>
	<img src="/img/pizzapizza.jpg" alt="Pizza">
	<br>
    <button type="add" onclick="cart.php">Large Combo Pizza $8.00</button>	
	</fieldset>
		
    <fieldset>	
	<p><strong>Broke College Kid Special</strong></p>
	<img src= "/img/cheese.jpg" alt="CPizza">
	<br>
	<button type="add" onclick="cart.php" >Two Large Cheese Pizzas for $9.99</button>	
	</fieldset>
	
	<fieldset>
	<p><strong>Mighty Meat Special</strong></p>
	<img src= "/img/meat.jpg" alt="MPizza">
	<br>
	<button type="add" onclick="cart.php" >Large Meat Lovers Pizza for $12.99</button>
	</fieldset>
	
	<fieldset>
	<p><strong>Toppings Galore</strong></p>
	<img src= "/img/3Tpizza.jpg" alt="3TPizza">
	<br>
	<button type="add" onclick="cart.php" >Large 3 topping Pizza for $7.00</button>
	</fieldset>
	<br>
	<fieldset>
	<p><strong>For People Who are Ordering for Themselves but Want to Act Like They are Ordering for 2 People #SingleLife</strong></p>
	<img src= "/img/Mpizza.jpg" alt="MedPizza">
	<br>
	<button type="add" onclick="cart.php" >2 Medium 1 topping Pizza for $9.99</button>
	</fieldset>
	
	<fieldset>
	<p><strong>Party People's Special</strong></p>
	<img src= "/img/5pizzas.jfif" alt="3TPizza">
	<br>
	<button type="add" onclick="cart.php" >5 Large 1 topping Pizzas for $25.99</button>
	</fieldset>
	</form>
</main>
</div>
<?php include("footer.php");?>