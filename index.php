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
			function pg_connection_string_from_database_url() {
			  extract(parse_url($_ENV["DATABASE_URL"]));
			  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
			}
			# Here we establish the connection. Yes, that's all.
			$pg_conn = pg_connect(pg_connection_string_from_database_url()) or die("Error in connection: " . pg_last_error());
			# Now let's use the connection for something silly just to prove it works:
			$result = pg_query($pg_conn, "SELECT * FROM customer") or die("Error in SQL: " . pg_last_error());
			while ($row = pg_fetch_row($result)) { print("- $row[0]\n");
			
 
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
