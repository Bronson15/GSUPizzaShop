<?php include("header.php");?>	
<html>
	<head>
		<title>Registration</title>
		<script src = "register.js" rel="javascript"></script>
	</head>
		<div id="error"></div>
		<div id="reg-col">
			<form id="login" method="post" action="#">
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
</html>
<?php include("footer.php"); ?>