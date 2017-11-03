<?php include("header.php");?>
<div id="specials">
<main>
	<p><font color ="Gold">The Best Deals in Town: ALL DAY, EVERYDAY</font></p>
	<p><font color ="Gold">***CARRY OUT ONLY***</font></p>
	<form action="cart.php" style="background-color:#041e42">
	<fieldset>
	<img src="/img/pizzapizza.jpg" alt="Pizza">
    <button type="add" onclick="cart.php" style="background-color:Gold"><font color ="#041e42">Large Combo Pizza $8.00</font></button>	
	</fieldset>
	</form>
	<form action="cart.php" style ="background-color:#041e42">	
    <fieldset>	
	<img src= "/img/cheese.jpg" alt="CPizza">
	<button type="add" onclick="cart.php" style="background-color:Gold"><font color ="#041e42">Two Large Cheese Pizzas for $9.99</font></button>	
	</fieldset>
	</form>
	<form action="cart.php" style="background-color:#041e42">
	<fieldset>
	<img src= "/img/meat.jpg" alt="MPizza">
	<button type="add" onclick="cart.php" style="background-color:Gold"><font color ="#041e42">Large Meat Lovers Pizza for $12.99</font></button>
	</fieldset>
	</form>
</main>
</div>
<?php include("footer.php");?>