<?php include("header.php");
	//runs if the login button is pressed
	if(isset($_POST['log'])){
		$username  = $_POST['user'];
		$password = $_POST['pass'];
		$name = pg_query($pg_conn,"SELECT * FROM customer WHERE username = '" . $username . "' AND passw = '" . $password . "'");
		$row = pg_fetch_assoc($name);

		//check if the log in form has any blank elements
		if($_POST['user'] == "" || $_POST['pass'] == ""){
			echo '<script type="text/javascript">alert("Username or Password blank")</script>';
			header("Refresh:0");
		}
		//checks if the username and password match, send them to homepage as successful login
		else if(pg_num_rows($name) == 1){
			$_SESSION['customerid'] = $row['customerid'];
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $row['name'];
			$_SESSION['address'] = $row['streetaddress'];
			$_SESSION['email'] = $row['emailaddress'];
			$_SESSION['phone'] = $row['contactnumber'];
 			header("Location: index.php");
		}
		//if not redirect them to login page
		else{
			echo '<script type="text/javascript">alert("Username or password is not valid. Try again or register")</script>';
			header("Refresh:1; Location: login.php");
		}
	}
?>
<div id="log-col">
	<form id="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
<?php
include("footer.php"); ?>
