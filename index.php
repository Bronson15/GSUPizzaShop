<?php include("header.php"); ?>
	
	<div id="index-body-text">		
		<main>
			<h2>Welcome to GSU Pizza Shop!</h2>
		
		<br><img style="width:auto;" src="img/home.png" usemap="main"><br><br>
		<div id="pizza-deals">
			<table align="center">
				<caption><b>Deals<b></caption>
				<tbody>
					<tr>
					<td>
					<!--image placed here-->
					<img src="img/specials_college.png" usemap="cksm">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/meat_specials.png" usemap="mms">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/topping_specials.png" usemap="tg">
					</td>
					</tr>
				</tbody>	
			</table>
		</div>
		<map name="main">
			<area shape="rect" coords="636,318,723,285" href="/cart.php" alt="Pizza Special">
		</map>
		<map name="cksm">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		<map name="mms">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		<map name="tg">
			<area shape="rect" coords="15,215,100,190" href="/cart.php" alt="Pizza Special">
		</map>
		</main>
	</div>

<?php include("footer.php");?>
