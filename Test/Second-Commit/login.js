function register() {
	window.location.href="Register.html";
}

function login() {
	var email = document.getElementById('email').value;
	var password= document.getElementById('password').value;

	if(email == null && password == null ||) {  
        alert("fill the details"); 
    }
    else if(email === "cybercom@.com" && password === "cybercom") {
    	window.location.href="dashboard.html";
        sessionStorage.setItem('admin-loggedin',true);
    }
    else {
    	alert("Log in failed")
    }
}