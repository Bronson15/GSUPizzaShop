<?php include(header.php);
	
	if(!$user->is_logged_in()){
		echo "Welcome" . $_SESSION['name'];
	}
	
	include(footer.php);
?>