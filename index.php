<?php include("header.php"); ?>
	
	<div id="index-body-text">		
		<main>
			<h2>Welcome to GSU Pizza Shop!</h2>
		
		<br><img style="width:auto;" src="img/home.png"><br><br>
		<div id="pizza-deals">
			<table align="center">
				<caption><b>Deals<b></caption>
				<tbody>
					<tr>
					<td>
					<!--image placed here-->
					<img src="img/specials_college.png" usemap="ordernow">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/meat_specials.png" usemap="ordernow">
					</td>
					
					<td>
						<!--image placed here-->
						<img src="img/topping_specials.png" usemap="ordernow">
					</td>
					</tr>
				</tbody>	
			</table>
		</div>
		<map name="ordernow">
			<area shape="rect" coords="10,207,207,20" href="/cart.php" alt="Pizza Special">
		</map>
		</main>
	</div>

<?php include("footer.php");?>
