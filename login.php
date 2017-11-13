<?php include("header.php")?>
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
	<p>Not a user? Click <a href="register.php">here</a>.</p>
</div>
<?php include("footer.php") ?>

