<?php include("header.php")
	session_start();
	if(isset($_POST['user']) && isset($_POST['pass'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		$result = pg_query($pg_conn, "SELECT * FROM Customer WHERE username = '$username' AND passw = '$password'");
		
		if(pg_num_rows($result) > 0){
			$_SESSION['valid_user'] = $username;
		}
	}
	
	pg_close($pg_conn);

	if(isset($username)){
		echo 'Could not log in';
	}
	else{
		echo 'You' . $_SESSION['valid_user'] . ' are now logged in.';
	}
	
?>
<div id="log-col">
	<form id="login" action="login.php" method="POST">
		<fieldset id="username">
			
			<label>USERNAME:</label>
			<input type="text" id="user" name="user" placeholder="username">
			<br>
			<br>
			<label>PASSWORD:</label>
			<input type="password" id="pass" name="pass" placeholder="password">
			<br>
			<br>
			<button type="submit" id="sub" name="log">LOGIN</button>
			
		</fieldset>
	</form>
</div>
<?php include("footer.php") ?>

