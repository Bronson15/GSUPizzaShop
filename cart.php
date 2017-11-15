<?php include("header.php");?>
	
<main>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo $item->size . " " . $item->crust . " " .$item->itemName . " x" . $item->itemQuantity . " " . $item->itemPrice . "<br>";
			}
		?>
</main>
	
<?php include("footer.php");?>