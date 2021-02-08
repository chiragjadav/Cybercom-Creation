$(function() {
  			$('#datetimepicker1').datetimepicker();
			});


			function validation() {
				var firstname = document.getElementById("name").value;
				var email = document.getElementById('email').value;
				var phone = document.getElementById('phone').value;
				var title = document.getElementById('title').value;
				var time = document.getElementById('datetime').value;

				var name_error = document.getElementById('name_error');
				var email_error = document.getElementById('email_error');
				var phone_error = document.getElementById('phone_error');
				var title_error = document.getElementById('title_error');
				var date_error = document.getElementById('date_error');

				if(firstname=="") {
					name_error.innerHTML = "*Please fill the first name";
					return false;	
				} else if(firstname.length <=2 || firstname.leght >20) {
					name_error.innerHTML = "*First name length must be between 2 to 20";
					return false;	
				} else if (!isNaN(firstname)) {
					name_error.innerHTML = "*Only characters are allowed";
					return false;	
				} else if (firstname != "") {
					name_error.innerHTML = "";
				}

				if(email=="") {
					email_error.innerHTML = "*Please the Email";
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

				if(phone=="") {
					phone_error.innerHTML = "*Please fill the Phone No.";
					return false;
				} else if (isNaN(phone)) {
					phone_error.innerHTML = "*Enter number only"; 
					return false;
				} else if(phone.length !=10 ) {
					phone_error.innerHTML = "*Enter 10 digit phone no.";
					return false;
				} else if (phone != ""){
					phone_error.innerHTML = "";
				}

				if(title=="") {
					title_error.innerHTML = "*Please fill the title."
					return false;
				} else if(!isNaN(title)) {
					title_error.innerHTML = "*Enter numbers only."
					return false;
				} else if(title!="") {
					title_error.innerHTML = "";
				}

				if(time=="") {
					date_error.innerHTML = "*Please enter Date Time";
					return false;
				} else if (time!="") {
					date_error.innerHTML = "";
				}
			}

