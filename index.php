<?php
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
	
	<?php include("header.php");?>
	
	<main>
		
		<?php

			$dbhost = $_SERVER['aa17n6gzzuklrjm.ceko05wsajde.us-east-2.rds.amazonaws.com'];
			$dbport = $_SERVER['1433'];
			$dbname = $_SERVER['GSUPizzShop'];
			$charset = 'utf8' ;

			$dsn = "sqlsrv:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
			$username = $_SERVER['admin'];
			$password = $_SERVER['password'];

			$pdo = new PDO($dsn, $username, $password);

		?>
		<p>Welcome to GSU pizza shop<p>
		<p>Check out our best deals under specials</p>
	</main>
	
	<?php include("footer.php");?>
	
</body>
</html>

<?php
}
?>
