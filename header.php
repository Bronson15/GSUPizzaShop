<?php
	session_start();
	include("database.php");
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
	//Get pizza info
	$result = pg_query($pg_conn, "SELECT * FROM prices;");
	while($row = pg_fetch_assoc($result)){
		$pizzaInfo[$row['product_id']]['product_name'] = $row['product_name'];
		$pizzaInfo[$row['product_id']]['base_price'] = $row['base_price'];
		$pizzaInfo[$row['product_id']]['m_upcharge'] = $row['m_upcharge'];
		$pizzaInfo[$row['product_id']]['l_upcharge'] = $row['l_upcharge'];
		$pizzaInfo[$row['product_id']]['p_upcharge'] = $row['p_upcharge'];
		$pizzaInfo[$row['product_id']]['toppings'] = $row['toppings'];
	}
	//Handle specials
	if(isset($_POST['addspecial'])){
		$productID = $_POST['productid'];
		$orderItem = new OrderItem();
		$orderItem->itemID = $productID;
		$orderItem->itemName = $pizzaInfo[$productID]['product_name']." Pizza";
		$orderItem->itemSize = $_POST['size'];
		$orderItem->itemQuantity = $_POST['quantity'];
		$orderItem->itemCrust = $_POST['crust'];
		if($productID==1){
			$orderItem->itemToppings = $_POST['toppings'];
		} else{
			$orderItem->itemToppings = $pizzaInfo[$productID]['toppings'];
		}
		$orderItem->itemPrice = $_POST['price'];
		array_push($_SESSION['cart'], $orderItem);
		echo "<h3 align='center' style='color: #3B61F2;'>";
		echo $orderItem->itemQuantity . "x ";
		echo ucfirst($orderItem->itemSize) . " ";
		if($orderItem->itemCrust=="pan"){
			echo "Pan ";
		} else{
			echo "Hand-Tossed ";
		}
		echo $orderItem->itemName . " successfully added to cart!";
		echo "</h3>";
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
					if(isset($_POST['add'])){
						echo $_POST['quantity'];
					} else{
						echo "0";
					}
				} else{
					$items = 0;
					foreach($_SESSION['cart'] as $line){
						$items += $line->itemQuantity;
					}
					if(isset($_POST['add'])){
						echo $items + $_POST['quantity'];
					} else{
						echo $items;
					}
				}
			?>)</a>
			
			<?php if(isset($_SESSION['username'])){
				?>
					<a href="/member.php"><?php echo $_SESSION['name'];?></a>
					<a href="/logout.php">Logout</a>
			<?php 
				} 
				else{
				?>
					<a href="/login.php">Login</a>
			<?php
				}
				?>
        </b>
    </nav> 
	
</div> 