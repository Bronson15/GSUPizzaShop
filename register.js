$(document).ready(function(){
	$("#sub").click(function(){
		var name = $("#flname").value;
		var email = $("#email").value;
		var address = $("#address").value;
		var age = $("#age").value;
		var phone = $("#telephone").value;
		var user = $("#username").value;
		var pass = $("#password").value;
		
		if(name == '' || email == '' || address == '' || age == '' || phone == '' || user == '' || pass == ''){
			alert("There is an empty field. Please fill empty fields");
		}
		else if(pass.length < 8){
			alert("Password needs to be at least 8 characters");
		}
		else{
			$.post("register.php", {
				name1: name,
				email1: email,
				address1: address,
				age1: age,
				phone1: phone,
				user1: user,
				pass1: pass
			}, function(data){
				if (data == 'You have Successfully Registered'){
					$("#login")[0].reset();
				}
				alert(data);
			}
			});
		}
	});
});