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
				$error = "";
				include("database.php");
				
				$userParam = pg_query($pg_conn, "SELECT * FROM Customer WHERE username = $username;");
				$passParam = pg_query($pg_conn, "SELECT * FROM Customer WHERE passw = $password;");
				
				$username_err = "";
				$password_err = "";
				
				if($_SERVER["REQUEST_METHOD"] == "GET"){
					$username = "";
					$password = "";
				}
				else if($_SERVER["REQUEST_METHOD"] == "POST"){
					$username = trim($_POST["user"]);
					$password = trim($_POST["pass"]);
					
					if($userParam == $username && $passParam == $password ){
						
						setcookie("userIDforDV", $username, time()+43200);
					}
					else{
						$error = "Your username and/or password is incorrect";
					}
				}
				
				$username = $_COOKIE['userIDforDV'];
				if(isset($username) && $username !=""){
					echo "Welcome" . $username;
				}
				
				echo $error;
				
			?>
	</form>
</div>
<?php include("footer.php") ?>

