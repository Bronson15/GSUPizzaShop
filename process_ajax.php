<?php 
	$price = $_POST['price'];
	$result = pg_query($pg_conn, "SELECT price FROM pizzas;") or die("Error in SQL: " . pg_last_error());
	while ($row = pg_fetch_assoc($result)) {
		if ($price == $row['price']) {
			echo json_encode($row);
	}
?>