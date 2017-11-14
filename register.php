<?php include("header.php");
	$query = "INSERT INTO customer (name,age,contactnumber, emailaddress, streetaddress,username, passw) VALUES ('$_POST[flname]', '$_POST[age]', '$_POST[telephone]','$_POST[email]', '$_POST[address]','$_POST[username]', '$_POST[password]')"or die("Error in SQL: " . pg_last_error());
	
	$result = pg_query($query);
?>
<div id="log-col">
	<form id="login" action="/index.php" method="POST">
		<fieldset id="username">
			
			<label>Name(First and Last):</label>
			<input type="text" id="flname" name="flname" placeholder="EX. John Doe">
			<br>
			<br>
			<label>Email Address:</label>
			<input type="email" id="email" name="email" placeholder="jdoe@gsu.edu">
			<br>
			<br>
			<label>Street Address:</label>
			<input type="text" id="address" name="address" placeholder="House#, Street, City, State, Zip">
			<br>
			<br>
			<label>Age(Must be at least 14):</label>
			<input type="number" id="age" name="age" placeholder="Age" min="14">
			<br>
			<br>
			<label>Contact Number</label>
			<input type="text" id="telephone" name="telephone" placeholder="xxx-xxx-xxxx">
			<br>
			<br>
			<label>Username(max 15 characters):</label>
			<input type="text" id="username" name="username" placeholder="EX. j.doe" max="15">
			<br>
			<br>
			<label>Password(max 15 characters):</label>
			<input type="password" id="password" name="password" max="15">
			<br>
			<br>
			<button type="submit" id="sub" name="createUser">Create User</button>
			
		</fieldset>
	</form>
</div>
<?php include("footer.php") ?>