function val(){
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;

	var email_error = document.getElementById('email_error');
	var password_error = document.getElementById('password_error');

	if(email=="") {
		email_error.innerHTML = "*Please Enter the Email";
		return false;
	} else if(email.indexOf('@') <= 0) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if ((email.charAt(email.length-4)!=".") &&(email.charAt(email.length-3)!=".")) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if(email != "") {
		email_error.innerHTML = "";
	}

	if(password=="") {
		password_error.innerHTML = "*Please Enter the Password";
		return false;
	} else if(password != "") {
		password_error.innerHTML = "";
	}

}

function validation() {
	var prif = document.getElementById('sel1').value;
	var first_name = document.getElementById('firstname').value;
	var last_name = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var mobile = document.getElementById('mobile').value;
	var password = document.getElementById('password').value;
	var cpassword = document.getElementById('confirm_password').value;
	var information = document.getElementById('info').value;
	var agreement = document.getElementById('agreement').checked;

	var prif_error = document.getElementById('prif_error');
	var fname_error = document.getElementById('fname_error');
	var lname_error = document.getElementById('lname_error');
	var email_error = document.getElementById('email_error');
	var mobile_error = document.getElementById('mobile_error');
	var password_error = document.getElementById('password_error');
	var cpassword_error = document.getElementById('cpassword_error');
	var info_error = document.getElementById('info_error');
	var term_error = document.getElementById('term_error');


	if(prif=="Choose..") {
		prif_error.innerHTML="*Please Select";
		return false;
	} else if(prif != ""){
		prif_error.innerHTML="";
	}
	
	if(first_name=="") {
		fname_error.innerHTML="*Please fill the first name";
		return false;
	} else if(first_name != ""){
		fname_error.innerHTML="";
	}
	
	if(last_name=="") {
		lname_error.innerHTML="*Please fill the last name";
		return false;
	} else if(last_name !=""){
		lname_error.innerHTML="";
	}
	
	if(email=="") {
		email_error.innerHTML = "*Please Enter the Email";
		return false;
	} else if(email.indexOf('@') <= 0) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if ((email.charAt(email.length-4)!=".") &&(email.charAt(email.length-3)!=".")) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if(email != "") {
		email_error.innerHTML = "";
	}

	if(mobile =="") {
		mobile_error.innerHTML="Please Enter Mobile."
		return false;
	}else if(mobile !="") {
		mobile_error.innerHTML=""
	}
	if(password=="") {
		password_error.innerHTML = "*Please Enter the Password";
		return false;
	} else if(password != "") {
		password_error.innerHTML = "";
	}
	if(cpassword=="") {
		cpassword_error.innerHTML = "*Please Enter the Password";
		return false;
	} else if(cpassword != "") {
		cpassword_error.innerHTML = "";
	}
	if(password!=cpassword) {
		cpassword_error.innerHTML = "*Password Does not matched";
		return false;
	} else {
		cpassword_error.innerHTML = "";
	}

	if(!agreement) {
		term_error.innerHTML="*Please tick on agreement";
		return false;
	} else {
		term_error.innerHTML="";
	}
}

function validation_blog_post() {
	var title = document.getElementById('title').value;
	var content = document.getElementById('content').value;
	var url = document.getElementById('url').value;
	var time = document.getElementById('time').value;
	var category = document.getElementById('category').value;
	var image = document.getElementById('imageFile').value;

	var title_error = document.getElementById('title_error');
	var content_error = document.getElementById('content_error');
	var url_error = document.getElementById('url_error');
	var time_error = document.getElementById('time_error');
	var category_error = document.getElementById('category_error');
	var image_error = document.getElementById('image_error');

	if(title=="") {
		title_error.innerHTML="*Please Enter Title";
		return false;
	} else if( title != "") {
		title_error.innerHTML="";
	}
	if(content == "") {
		content_error.innerHTML="*Please Enter Content";
		return false;
	} else if( title != "") {
		title_error.innerHTML="";
	}
	if(url == "") {
		url_error.innerHTML="*Please Enter URL";
		return false;
	} else if( title != "") {
		url_error.innerHTML="";
	}
	if(time == "") {
		time_error.innerHTML="*Please Enter Time";
		return false;
	} else if( title != "") {
		time_error.innerHTML="";
	}
	if(category == "") {
		category_error.innerHTML="*Please Enter Category";
		return false;
	} else if( title != "") {
		category_error.innerHTML="";
	}
	if(!image) {
		image_error.innerHTML="*Please Choose File";
		return false;
	} else if( image != "") {
		image_error.innerHTML="";
	}
}

