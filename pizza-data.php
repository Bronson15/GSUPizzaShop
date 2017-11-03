<?php 
include ("database.php");

$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 7;") or die("Error in SQL: " . pg_last_error());
$row = pg_fetch_assoc($result);
$smallCheese = $row['price']; 

$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 8;") or die("Error in SQL: " . pg_last_error());
$row = pg_fetch_assoc($result);
$medCheese = $row['price']; 

$result = pg_query($pg_conn, "SELECT price FROM pizzas WHERE productid = 9;") or die("Error in SQL: " . pg_last_error());
$row = pg_fetch_assoc($result);
$largeCheese = $row['price']; 
								
?>