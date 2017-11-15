<?php include("header.php");?>
	
<main>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo $item->itemSize . " " . $item->itemCrust . " " .$item->itemName . " x" . $item->itemQuantity . " " . $item->itemPrice . "<br>";
			}
		?>
</main>
	
<?php include("footer.php");?>