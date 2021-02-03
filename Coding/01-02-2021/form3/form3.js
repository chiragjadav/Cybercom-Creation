function validation() {
			
			var name = document.getElementById('name').value;
			var password = document.getElementById('password1').value;
			var address = document.getElementById('address').value;
			var check_hockey = document.getElementById('hockey');
			var check_football = document.getElementById('football');
			var check_badminton = document.getElementById('badminton');
			var check_cricket = document.getElementById('cricket');
			var check_vollyball = document.getElementById('vollyball');
			var gender_male = document.getElementById('male').checked;
			var gender_female = document.getElementById('female').checked;
			var date = document.getElementById('date').value;
			var month = document.getElementById('month').value;
			var year = document.getElementById('year').value;
			var status_married = document.getElementById('married').checked;
			var status_unmarried = document.getElementById('unmarried').checked;
			var agreement = document.getElementById('agreement').checked;

			var name_error = document.getElementById('name_error');
			var password_error = document.getElementById('password_error');
			var address_error = document.getElementById('address_error');
			var game_error = document.getElementById('game_error');
			var gender_error = document.getElementById('gender_error');
			var date_error = document.getElementById('date_error');
			var status_error = document.getElementById('status_error');
			var agree_error = document.getElementById('agree_error');

			if(name=="") {
				//alert('Please enter name');
				name_error.innerHTML="<span style='color:red;'>*Please fill the first name</span>";
				return false;
			} else {
				//return true;
				name_error.innerHTML="";

			}
			if(password=="") {
				//alert('Please enter password');
				password_error.innerHTML="<span style='color:red;'>Please fill the password</span>";
				return false;
			} else {
				//return true;
				password_error.innerHTML="";
			}
			if(!gender_male && !gender_female) {
				gender_error.innerHTML="<span style='color:red;'>Please select gender</span>";
				return false;
			} else {
				gender_error.innerHTML="";
			}
			if(address=="") {
				//alert('Please enter address');
				address_error.innerHTML="<span style='color:red;'>Please fill the address</span>";
				return false;
			} else {
				//return true;
				address_error.innerHTML="";
			}
			if(date=="Date" || month=="Month" || year=="Year") {
				date_error.innerHTML="<span style='color:red;'>*Please select date of birth</span>";
				return false;
			} else {
				//return true;
				date_error.innerHTML="";
			}
			if(!check_hockey.checked && !check_football.checked && !check_badminton.checked && !check_cricket.checked && !check_vollyball.checked) {
				game_error.innerHTML="<span style='color:red;'>Please select atleast one game</span>";
				return false;
			} else {
				game_error.innerHTML="";
			}
			if(!status_married && !status_unmarried) {
				status_error.innerHTML="<span style='color:red;'>Please select gender</span>";
				return false;
			} else {
				status_error.innerHTML="";
			}
			if(!agreement) {
				agree_error.innerHTML="<span style='color:red;'>Please tick on agreement</span>";
				return false;
			} else {
				//return true;
				agree_error.innerHTML="";
			}
		}