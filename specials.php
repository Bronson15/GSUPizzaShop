<?php include("header.php");?>
<div id="specials">
<main>
	<p>The Best Deals in Town: ALL DAY, EVERYDAY</p>
	<p>***CARRY OUT ONLY***</p>
	<form action="cart.php" style="background-color:#00008B">
	<fieldset>
	<p>Large pizza with any topping of your choosing</p>
	<img src="/img/pizzapizza.jpg" alt="Pizza">
    <button type="add" onclick="cart.php" style="background-color:Gold">Large Combo Pizza $8.00</button>	
	</fieldset>
	</form>
	<form action="cart.php" style ="background-color:#00008B">	
    <fieldset>	
	<p>Two large cheese pizzas for the cheese lovers</p>
	<img src= "/img/cheese.jpg" alt="CPizza">
	<button type="add" onclick="cart.php" style="background-color:Gold">Two Large Cheese Pizzas for $9.99</button>	
	</fieldset>
	</form>
	<form action="cart.php" style="background-color:#00008B">
	<fieldset>
	<p>For the carnivores a large meat lovers pizza</p>
	<img src= "/img/meat.jpg" alt="MPizza">
	<button type="add" onclick="cart.php" style="background-color:Gold">Large Meat Lovers Pizza for $12.99</button>
	</fieldset>
	</form>
</main>
</div>
<?php include("footer.php");?>