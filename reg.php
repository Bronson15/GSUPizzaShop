<?php include("header.php");
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$address = $_REQUEST['address'];
	$age = $_REQUEST['age'];
	$phone = $_REQUEST['phone'];
	$user = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
	
	if(pg_query($pg_conn, "INSERT INTO customer (name,age,contactnumber, emailaddress, streetaddress,username, passw) VALUES ('$name','$age','$phone','$email', '$address','$user','$pass')"){
		echo "Registered Successfully"
	}
	
	include("footer.php");
?>