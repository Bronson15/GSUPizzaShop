<?php 

include("header.php");
include("database.php");
?>
	
	<div id="index-body-text">		
		<main>
			<p>Welcome to GSU pizza shop<p>
			<p>Check out our best deals under specials</p>
		</main>
	</div>
	
	<div id="database-testing>
		<?php
			$result = pg_query($pg_conn, "SELECT * FROM customer") or die("Error in SQL: " . pg_last_error());
		?>
	</div>
	<?php include("footer.php");?>

<?php
}
?>
