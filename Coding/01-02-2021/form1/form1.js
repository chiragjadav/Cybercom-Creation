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
			var age = document.getElementById('age').value;
			var file = document.getElementById('file').value;
			//var gender = document.getElementByName('gender');
			
			var name_error = document.getElementById('name_error');
			var password_error = document.getElementById('password_error');
			var address_error = document.getElementById('address_error');
			var game_error = document.getElementById('game_error');
			var gender_error = document.getElementById('gender_error');
			var age_error = document.getElementById('age_error');
			var file_error = document.getElementById('file_error');
	
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
			if(address=="") {
				//alert('Please enter address');
				address_error.innerHTML="<span style='color:red;'>Please fill the address</span>";
				return false;
			} else {
				//return true;
				address_error.innerHTML="";
			}
			//checking atleast one game is selected or not
			if(!check_hockey.checked && !check_football.checked && !check_badminton.checked && !check_cricket.checked && !check_vollyball.checked) {
				game_error.innerHTML="<span style='color:red;'>Please select atleast one game</span>";
				return false;
			} else {
				game_error.innerHTML="";
			}
			//gender is selected or not
			if(!gender_male && !gender_female) {
				gender_error.innerHTML="<span style='color:red;'>Please select gender</span>";
				return false;
			} else {
				gender_error.innerHTML="";
			}
			//age is selected or not
			if(age == 'Please Select') {
				age_error.innerHTML="<span style='color:red;'>Please select age</span>";
				return false;
			} else {
				age_error.innerHTML="";
			}
			//file is selected or not
			if(!file) {
				file_error.innerHTML = "<span style='color:red;'>Please select file</span>";
				return false;
			} else {
				file_error.innerHTML = "";
			}
		}