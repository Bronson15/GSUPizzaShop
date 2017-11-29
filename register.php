<?php include("header.php");

		$username = $_POST['username'];
		$name = $_POST['flname'];
		$email = $_POST['email'];
		
		$userParam = pg_query($pg_conn,"SELECT username FROM customer WHERE username ='" . $username ."'");
		$nameParam = pg_query($pg_conn,"SELECT name FROM customer WHERE name ='" . $name ."'");
		$emailParam = pg_query($pg_conn,"SELECT emailaddress FROM customer WHERE emailaddress = '" . $email ."'");
		
		if(pg_num_rows($userParam) >= 1){
			echo "<script type='text/javascript'>alert('Username taken.')</script>";
		}
		else if(pg_num_rows($nameParam) >= 1 && pg_num_rows($emailParam) >= 1){
			echo "<script type='text/javascript'>alert('Someone with those credentials already exists.')</script>";
			
		}
		//if no duplicates or empty fields, insert data into table
		else{
			$query = "INSERT INTO customer (name,age,contactnumber, emailaddress, streetaddress,username, passw) VALUES ('$_POST[flname]', '$_POST[age]', '$_POST[telephone]','$_POST[email]', '$_POST[address]','$_POST[username]', '$_POST[password]')"or die("Error in SQL: " . pg_last_error());	
			$result = pg_query($query);
		}
		
?>
	<head>
		<title>Registration</title>
		<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
	</head>
	<body>
		<div id="error"></div>
		<div id="reg-col">
			<form id="login" method="POST">
				<fieldset id="register">
					
					<label>Name(First and Last):</label>
					<br>
					<input type="text" id="flname" name="flname" placeholder="EX. John Doe" onkeyup="showHint(this.value)">
					<br>
					<br>
					<label>Email Address:</label>
					<br>
					<input type="email" id="email" name="email" placeholder="jdoe@gsu.edu">
					<br>
					<br>
					<label>Street Address:</label>
					<br>
					<input type="text" id="address" name="address" placeholder="House#, Street, City, State, Zip">
					<br>
					<br>
					<label>Age(Must be at least 14):</label>
					<br>
					<input type="number" id="age" name="age" placeholder="Age" min="14">
					<br>
					<br>
					<label>Contact Number:</label>
					<br>
					<input type="text" id="telephone" name="telephone" placeholder="xxx-xxx-xxxx">
					<br>
					<br>
					<label>Username(max 15 characters):</label>
					<br>
					<input type="text" id="username" name="username" placeholder="EX. j.doe" max="15">
					<br>
					<br>
					<label>Password(max 15 characters):</label>
					<br>
					<input type="password" id="password" name="password" max="15">
					<br>
					<br>
					<button type="submit" id="sub" name="createUser">Create User</button>
					
				</fieldset>
			</form>
		</div>
	</body>
<?php include("footer.php");?>