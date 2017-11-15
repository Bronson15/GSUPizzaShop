<?php include("header.php");?>
	
<main>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo ucfirst($item->itemSize) . " ";
				if($orderItem->itemCrust=="pan"){
					echo "Pan ";
				} else{
					echo "Hand-Tossed ";
				}
				echo " " .$item->itemName . " x" . $item->itemQuantity . " " . $item->itemPrice . "<br>";
			}
		?>
</main>
	
<?php include("footer.php");?>