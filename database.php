<?php
$servername = "aa17n6gzzuklrjm.ceko05wsajde.us-east-2.rds.amazonaws.com,1433";
$username = "admin";
$password = "password";
$database = "GSUPizzaShop";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected";

?>