function saveData(){
	if(window.XMLHttpRequest){
		xml = new XMLHttpRequest();
	}
	else{
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xml.onreadystatechange = function(){
		if(xml.readyState == 4 && xml.status == 200){
			document.getElementById("error").innerHTML = xml.responseText;
			alert(xml.responseText);
		}
	}
	
	var name = document.getElementById("flname").value;
	var email = document.getElementById("email").value;
	var address = document.getElementById("address").value;
	var age = document.getElementById("age").value;
	var phone = document.getElementById("telephone").value;
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	
	var url = "reg.php";
	var par = "name=" + name + "&email=" + email + "&address=" + address + "&age=" + age + "&phone=" + phone + "&username=" + user + "&password=" + pass;
	
	xml.open("POST, url, true);
	
	xml.setRequestHeader("content-type","application/x-www-form-urlencoded");
	xml.setRequestHeader("content-length", par.length);
	xml.setRequestHeader("connection","close");
	
	xml.send(par);
}
