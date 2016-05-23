function login(){

	var email = document.getElementById("email");
	var pass = document.getElementById("password");

	if(email.value==""){
		if(pass.value==""){
			window.alert("Incorrect username!");
		}else{
			window.alert("Welcome!");
		}

		window.alert("Incorrect password!");
	}else{
		window.alert("Hi!");  
	}

}