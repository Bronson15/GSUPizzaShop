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
	
	<?php include("includes/header.html");?>
	
	<main>
		<p>Welcome to GSU pizza shop<p>
		<p>Check out our best deals under specials</p>
	</main>
	
	<?php include("includes/footer.html");?>
	
</body>
</html>

<?php
}
?>