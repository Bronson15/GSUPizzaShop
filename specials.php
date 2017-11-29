<?php include("header.php");?>
<div id="specials">
<main>
	<h1>The Best Deals in Town: ALL DAY, EVERYDAY</h1>

	<div id="deals">
	<table align="center">
	<tbody>
		<tr>
			<td>
			<img src="img/college_kid.png" usemap="#ckss">
			<form id="ckss" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>

			<td>
			<img src="img/combo_special.png" usemap="#cp">
			<form id="cp" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>
		</tr>

		<tr>
			<td>
			<img src="img/hawaiianspecial.png" usemap="#tp">
			<form id="tp" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>

			<td>
			<img src="img/doublepep.png" usemap="#dpd">
			<form id="dpd" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>
		</tr>

		<tr>
			<td>
			<img src="img/meatlovers.png" usemap="#aym">
			<form id="aym" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>

			<td>
			<img src="img/party.png" usemap="#pps">
			<form id="pps" method="POST" style="margin: 0; padding: 0;">
				<input name="productid" type="hidden" value="1" />
				<input name="size" type="hidden" value="large" />
				<input name="quantity" type="hidden" value="2" />
				<input name="crust" type="hidden" value="hand" />
				<input name="toppings" type="hidden" value="CXm" />
				<input name="price" type="hidden" value="9.99" />
				<input name="addspecial" type="hidden" value="true" />
			</form>
			</td>
		</tr>
	</tbody>
	</table>
	<map name="ckss">
		<area onclick="addSpecial(10)" class="CKS" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
	<map name="cp">
		<area onclick="addSpecial(5)" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
	<map name="tp">
		<area onclick="addSpecial(6)" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
	<map name="dpd">
		<area onclick="addSpecial(7)" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
	<map name="aym">
		<area onclick="addSpecial(8)" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
	<map name="pps">
		<area onclick="addSpecial(9)" shape="rect" coords="17,236,212,203"  href="/cart.php" alt="Pizza Special">
	</map>
</div>
</main>
</div>
<?php include("footer.php");?>
