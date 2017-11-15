<?php
	session_start(); 
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
			return $itemID.", ".$itemName.", ".$itemSize.", ".$itemQuantity.", ".$itemCrust.", ".$itemToppings.", ".$itemPrice;
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
			<a href="/cart.php">Cart (<?php echo count($_SESSION['cart']); ?>)</a>
			<a href="/login.php">Login</a>
        </b>
    </nav> 
	
</div> 
<?php include("database.php");?>
