<?php include("header.php");?>
	
<main>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo $item->$itemName . " x" . $item->$itemQuantity;
			}
		?>
</main>
	
<?php include("footer.php");?>