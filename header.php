<?php
	session_start();
	$temp_items;
	if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
	class OrderItem {
		public $itemID;
		public $itemName;
		public $itemSize;
		public $itemQuantity;
		public $itemCrust;
		public $itemToppings;
		public $itemPrice;

		public function toString(){
			return $this->itemID.", ".$this->itemName.", ".$this->itemSize.", ".$this->itemQuantity.", ".$this->itemCrust.", ".$this->itemToppings.", ".$this->itemPrice;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
    <title>Home | GSU Pizza Shop</title>
</head>
<body>
<div id="wrapper">
        <header>
		<h1><a href="/"><img src="/img/logo.jpg" alt="GSU Logo"></a></h1>
        </header>
	<nav>
		<b>
			<a href="/">Home</a>
			<a href="/pizza.php">Pizza</a>
			<a href="/specials.php">Specials</a>
			<a href="/cart.php">Cart (<?php
				if(count($_SESSION['cart'])==0){
					if(isset($temp_items)){
						echo $temp_items;
						unset($temp_items);
					} else{
						echo "0";
					}
				} else{
					$items = 0;
					foreach($_SESSION['cart'] as $line){
						$items += $line->itemQuantity;
					}
					if(isset($temp_items)){
						echo $items + $temp_items;
						unset($temp_items);
					} else{
						echo $items;
					}
				}
			?>)</a>
			<a href="/login.php">Login</a>
        </b>
    </nav> 
	
</div> 
<?php include("database.php");?>
