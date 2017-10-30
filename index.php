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
$data_source='aa17n6gzzuklrjm.ceko05wsajde.us-east-2.rds.amazonaws.com:1433';
$user='admin';
$password='password';
			$conn=odbc_connect($data_source,$user,$password);
if (!$conn){
    if (phpversion() < '4.0'){
      exit("Connection Failed: . $php_errormsg" );
    }
    else{
      exit("Connection Failed:" . odbc_errormsg() );
    }
}

// This query generates a result set with one record in it.
$sql="SELECT 1 AS test_col";

# Execute the statement.
$rs=odbc_exec($conn,$sql);

// Fetch and display the result set value.
if (!$rs){
    exit("Error in SQL");
}
while (odbc_fetch_row($rs)){
    $col1=odbc_result($rs, "test_col");
    echo "$col1\n";
}

// Disconnect the database from the database handle.
odbc_close($conn);


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
