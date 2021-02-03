function validation() {
			
			var first_name = document.getElementById('fname').value;
			var last_name = document.getElementById('lname').value;
			var date = document.getElementById('date').value;
			var month = document.getElementById('month').value;
			var year = document.getElementById('year').value;
			var gender_male = document.getElementById('male').checked;
			var gender_female = document.getElementById('female').checked;
			var country = document.getElementById('country').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('phone').value;
			var password = document.getElementById('password1').value;
			var confirm_password = document.getElementById('password2').value;
			var agreement = document.getElementById('agreement').checked;
			
			//var gender = document.getElementByName('gender');
			
			var fname_error = document.getElementById('fname_error');
			var lname_error = document.getElementById('lname_error');
			var date_error = document.getElementById('date_error');
			var gender_error = document.getElementById('gender_error');
			var country_error = document.getElementById('country_error');
			var email_error = document.getElementById('email_error');
			var phone_error = document.getElementById('phone_error');
			var password_error = document.getElementById('password_error');
			var confirm_password_error = document.getElementById('confirm_password_error');
			var agree_error = document.getElementById('agree_error');
			if(first_name=="") {
				//alert('Please enter name');
				fname_error.innerHTML="<span style='color:red;'>*Please fill the first name</span>";
				return false;
			} else {
				//return true;
				fname_error.innerHTML="";
			}
			if(last_name=="") {
				lname_error.innerHTML="<span style='color:red;'>*Please fill the last name</span>";
				return false;
			} else {
				//return true;
				lname_error.innerHTML="";
			}
			//Check the date of Birth
			if(date=="Date" || month=="Month" || year=="Year") {
				date_error.innerHTML="<span style='color:red;'>*Please select date of birth</span>";
				return false;
			} else {
				//return true;
				date_error.innerHTML="";
			}
			//gender is selected or not
			if(!gender_male && !gender_female) {
				gender_error.innerHTML="<span style='color:red;'>Please select gender</span>";
				return false;
			} else {
				gender_error.innerHTML="";
			}
			//check country is selected or not
			if(country=="Country") {
				country_error.innerHTML="<span style='color:red;'>Please select country</span>";
				return false;
			} else {
				//return true;
				country_error.innerHTML="";
			}
			if(email=="") {
				email_error.innerHTML="<span style='color:red;'>Please fill the email</span>";
				return false;
			} else {
				//return true;
				email_error.innerHTML="";
			}
			if(phone=="") {
				phone_error.innerHTML="<span style='color:red;'>Please enter phone</span>";
				return false;
			} else {
				//return true;
				phone_error.innerHTML="";
			}
			if(password=="") {
				password_error.innerHTML="<span style='color:red;'>Please fill the password</span>";
				return false;
			} else {
				//return true;
				password_error.innerHTML="";
			}
			if(confirm_password=="") {
				confirm_password_error.innerHTML="<span style='color:red;'>Please fill the confirm password</span>";
				return false;
			} else {
				//return true;
				confirm_password_error.innerHTML="";
			}
			if(!(password==confirm_password)) {
				confirm_password_error.innerHTML="<span style='color:red;'>Password don not matched</span>";
				return false;
			} else {
				//return true;
				confirm_password_error.innerHTML="";
			}
			if(!agreement) {
				agree_error.innerHTML="<span style='color:red;'>Please tick on agreement</span>";
				return false;
			} else {
				//return true;
				agree_error.innerHTML="";
			}
		}