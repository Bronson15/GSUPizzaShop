<?php
include("header.php");
?>
	<script>
		function addSpecial(specialID){
			var spCO = document.getElementById("carryout");
			var spCKSM = document.getElementById("cksm");
			var spMMS = document.getElementById("mms");
			var spTG = document.getElementById("tg");
			if(specialID==1) spCO.submit();
			if(specialID==2) spCKSM.submit();
			if(specialID==3) spMMS.submit();
			if(specialID==4) spTG.submit();
		}
	</script>
	<div id="index-body-text">
		<main>
		<br><img style="width:auto;" src="img/home.png" usemap="main"><br><br>
		<form id="carryout" method="POST" style="margin: 0; padding: 0;">
			<input name="productid" type="hidden" value="4" />
			<input name="size" type="hidden" value="large" />
			<input name="quantity" type="hidden" value="1" />
			<input name="crust" type="hidden" value="hand" />
			<input name="price" type="hidden" value="8.00" />
			<input name="addspecial" type="hidden" value="true" />
		</form>
		<div id="pizza-deals">
			<table align="center">
				<caption><b>Deals<b></caption>
				<tbody>
					<tr>
					<td>
					<!--image placed here-->
					<img src="img/specials_college.png" usemap="cksm">
					<form id="cksm" method="POST" style="margin: 0; padding: 0;">
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
						<!--image placed here-->
						<img src="img/meat_specials.png" usemap="mms">
						<form id="mms" method="POST" style="margin: 0; padding: 0;">
							<input name="productid" type="hidden" value="3" />
							<input name="size" type="hidden" value="large" />
							<input name="quantity" type="hidden" value="1" />
							<input name="crust" type="hidden" value="hand" />
							<input name="price" type="hidden" value="12.99" />
							<input name="addspecial" type="hidden" value="true" />
						</form>
					</td>

					<td>
						<!--image placed here-->
						<img src="img/home2.png" usemap="tg">
						<form id="tg" method="POST" style="margin: 0; padding: 0;">
							<input name="productid" type="hidden" value="1" />
							<input name="size" type="hidden" value="large" />
							<input name="quantity" type="hidden" value="2" />
							<input name="crust" type="hidden" value="hand" />
							<input name="toppings" type="hidden" value="CPXm" />
							<input name="price" type="hidden" value="9.99" />
							<input name="addspecial" type="hidden" value="true" />
						</form>
					</td>
					</tr>
				</tbody>
			</table>
		</div>
		<map name="main">
			<area onclick="addSpecial(1);" shape="rect" coords="636,318,723,285" href="#" alt="Pizza Special">
		</map>
		<map name="cksm">
			<area onclick="addSpecial(2);" shape="rect" coords="15,215,100,190" href="#" alt="Pizza Special">
		</map>
		<map name="mms">
			<area onclick="addSpecial(3);" shape="rect" coords="15,215,100,190" href="#" alt="Pizza Special">
		</map>
		<map name="tg">
			<area onclick="addSpecial(4);" shape="rect" coords="15,215,100,190" href="#" alt="Pizza Special">
		</map>
		</main>
	</div>

<?php include("footer.php");?>
