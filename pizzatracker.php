<!--pizzatracker.php -->
<!-- https://www.w3schools.com/jsref/met_win_settimeout.asp   information on the setTimeout function.-->

<?php include("header.php"); ?>

<main>
	<div id="tracker">
		<h1>Your order has been processed!</h1>
		<!--Start with pizza tracker image 1 -->
		<img id= "pt" src="img/pizzatrack1.png" alt="Pizza Tracker Phase 1: Prep">
	</div>
 
	<script type="text/javascript">
		setTimeout(changePizzaTracker12, 3000);  //3000 = 3 seconds
		setTimeout(changePizzaTracker23, 6000);  //6000 = 6 seconds

		function changePizzaTracker12() {
			//Change pt1 to pt2
			document.getElementById('pt').src = 'img/pizzatrack2.png';
			document.getElementById('pt').alt = 'Pizza Tracker Phase 2: Cooking';
		}
		function changePizzaTracker23() {
			//Change pt2 to pt3
			document.getElementById('pt').src = 'img/pizzatrack3.png';
			document.getElementById('pt').alt = 'Pizza Tracker Phase 3: Finished';
		}
	</script>
</main>

<?php include("footer.php");?>

