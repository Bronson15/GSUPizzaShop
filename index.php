<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
    <title>Home | GSU Pizza Shop</title>
</head>
<body>
	<div id="wrapper">
        <header>
			<h1><img src="logo.jpg" alt="GSU Logo"></h1>
        </header>
	<nav>
		<b>
			<a href="index.html">Home</a>
			<a href="pizza.html">Pizza</a>
			<a href="specials.html">Specials</a>
			<a href="contact.html">Contact Us</a>
			<a href="cart.html">Cart</a>
        </b>
    </nav> 
	
	</div>
	<main>
		<p>Welcome to GSU pizza shop<p>
		<p>Check out our best deals under specials</p>
	</main>
	
	<div id="footer"></div>
		<footer>
		<div class="contact">
			<a href="contact.html">Contact Us</a> | <a href="contact.html">About Us</a><br>
				Email:gsupizza@gsu.com<br>
				Phone:(912)-555-5555<br>
				Address:123 Chandler Rd<br>
				Statesboro, GA 30458<br><br>
		</div>
		<div class="copy">
			Copyright &copy; 2017 GSU Pizza Shop
		</div>
	</footer>
</body>
</html>

<?
}
?>