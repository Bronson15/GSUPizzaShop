<?php include("header.php")?>
<div id="log-col">
	<form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
		<?php 
				session_start();
				$error = "";
				include("database.php");
				
				//$userParam = pg_query($pg_conn, "SELECT * FROM Customer WHERE username = $username;");
				//$passParam = pg_query($pg_conn, "SELECT * FROM Customer WHERE passw = $password;");
				
				$username = "";
				$password = "";
				
				$username_err = "";
				$password_err = "";
				
				//check if username is empty
				if(empty(trim($_POST["user"]))){
					$username_err = "Please enter username";
				}
				else{
					$username = trim($_POST["user"]);
				}
				//check if password is empty
				if(empty(trim($_POST["pass"]))){
					$password_err = "Please enter password";
				}
				else{
					$password = trim($_POST["pass"]);
				}
				
				//validate credentials 
				if(isset($_POST['user']) && isset($_POST['pass'])){
					$username = $_POST['user'];
					$password = $_POST['pass'];
					
					$query = "SELECT * FROM Customer WHERE username = $username AND passw = $password ";
					
					$result = pg_query($query);
					
					if(pg_num_rows($result) > 0){
						$_SESSION['username'] = $username;
					}
				}
				
				
			?>
	</form>
</div>
<?php include("footer.php") ?>

