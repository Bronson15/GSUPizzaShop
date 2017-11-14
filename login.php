<?php include("header.php");
	session_start();
?>
<div id="log-col">
	<form id="login" action="/login.php" method="POST">
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
<?php 
		
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$userParam = pg_query($pg_conn,"SELECT * FROM customer WHERE username= '$username'");
	$passParam = pg_query($pg_conn, "SELECT * FROM customer WHERE passw = '$password'");
	
	if($username == $userParam && $password == $passParam){
		echo "<script type='text/javascript'>alert('Successful Login')</script>";
	}
	else if($username != $userParam && $password != $passParam){
		echo "<script type='text/javascript'>alert('Username and/or password is inccorect. Try again')</script>";
	}
?>
	<p>Not a user? Click <a href="register.php">here</a>.</p>
</div>
<?php include("footer.php") ?>

