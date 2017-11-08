<div id="log-col">
	<form id="login" action="">
		<fieldset id="username">
			
			<label>USERNAME:</label>
			<input type="text" id="user" name="user" placeholder="username">
			<label>PASSWORD:</label>
			<input type="password" id="pass" name="pass" placeholder="password">
			<?php 
				$username = $_POST['user'];
				$password = $_POST['pass'];
				$username_err = "";
				$password_err = "";
				if(empty(trim($_POST['user']))){
					$username_err = 'Please enter username';
				}
				else{
					$username = trim($_POST['user']);
				}
				
				if(empty(trim($_POST['pass']))){
					$password_err = 'Please enter username';
				}
				else{
					$password_err = trim($_POST['pass']);
				}
			?>
		</fieldset>
	</form>
	<!--https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php-->
</div>

