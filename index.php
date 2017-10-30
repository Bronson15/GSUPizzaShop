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
			# Now let's use the connection for something silly just to prove it works:
			$result = pg_query($pg_conn, "SELECT * FROM Customer WHERE schemaname='public'");
			print "<pre>\n";
			if (!pg_num_rows($result)) {
			  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
			} else {
			  print "Tables in your database:\n";
			  while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
			}
			print "\n";
 
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
