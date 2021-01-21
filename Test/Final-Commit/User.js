var firstname, email, dob;
var arr = JSON.parse(localStorage.getItem('userdata')) || [];
function formdata(){
    firstname = document.getElementById('name').value;
    email = document.getElementById('email').value;
    dob = document.getElementById('dob').value;

    var obj = {
        name : firstname,
        email : email,
        dob : dob,
        calAge: function(){
                this.age = 2021 - this.dob;
                }
        }
    // var age = obj.calAge(obj.dob);
    // obj.age = age;
    // console.log(obj.age);
    arr.push(obj);
    console.log(arr);

    localStorage.setItem('userdata', JSON.stringify(arr));
   window.open("List.html");

    //window.location.href("view.html");
}

function editData(valueOfrow) {
    document.getElementById('name').innerHTML = arr[valueOfrow][name];
    document.getElementById('email').innerHTML = arr[valueOfrow][email];
    document.getElementById('dob').innerHTML = arr[valueOfrow][dob];
}