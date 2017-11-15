<?php include("header.php");?>
	
<main>
		<?php
			foreach($_SESSION['cart'] as $item){
				echo $item->toString()."<br>";
			}
		?>
</main>
	
<?php include("footer.php");?>