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
	
	<div id="database-testing">
		<?php
			$result = pg_query($pg_conn, "SELECT * FROM customer") or die("Error in SQL: " . pg_last_error());
		 	$i = 0;
			echo '<table><tr>';
			while ($i < pg_num_fields($result))
			{
				$fieldName = pg_field_name($result, $i);
				echo '<td>' . $fieldName . '</td>';
				$i = $i + 1;
			}
			echo '</tr>';
			$i = 0;

			while ($row = pg_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			pg_free_result($result);

			echo '</table>';
		?>
	</div>
	<?php include("footer.php");?>
