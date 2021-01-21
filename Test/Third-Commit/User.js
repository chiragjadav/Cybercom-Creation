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
    }

    arr.push(obj);
    console.log(arr);

    localStorage.setItem('userdata', JSON.stringify(arr));
   window.open("List.html");
    //window.location.href("view.html");
}