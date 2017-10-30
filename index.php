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
			  extract(parse_url($_ENV["ec2-54-221-229-64.compute-1.amazonaws.com"]));
			  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
			}
			# Here we establish the connection. Yes, that's all.
			$pg_conn = pg_connect(pg_connection_string_from_database_url());
 			if (!$pg_conn) {
				die("Error in connection: " . pg_last_error());
			}
			# Now let's use the connection for something silly just to prove it works:
			$result = pg_query($pg_conn, "SELECT * FROM public.'Customer'");
 			if (!result) {
				die("Error in SQL: " . pg_last_error());
			}
			while($row = pg_fetch_array($result)) {
				echo "CustomerID: " . $row[0] . "<br />";
				echo "Name: " . $row[1] . "<br />";
				echo "Age: " . $row[2] . "<br />";
				echo "ContactNumber: " . $row[3] . "<br />";
				echo "EmailAddress: " . $row[4] . "<br />";
				echo "StreetAddress: " . $row[5] . "<br />";
				echo "username: " . $row[6] . "<br />";
				echo "passw: " . $row[7] . "<br />";
			}
 
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
