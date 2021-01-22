 var firstName, email, password, dateOfBirth;
var arr = JSON.parse(localStorage.getItem('formdata')) || [];

        function formdata() {
            firstName = document.getElementById('name').value;
            email = document.getElementById('email').value;
            password = document.getElementById('passowrd').value;
            dOB = document.getElementById('dob').value;


            var obj = {
                name: firstName,
                email: email,
                password: password,
                dateOfBirth: dateOfBirth
            };

            arr.push(obj);
            console.log(arr);

            localStorage.setItem('formdata',JSON.stringify(arr));
            
            /*document.getElementById('userlist').write("<table border='1'>");
            document.getElementById('userlist').write("<tr><th>Name</th><th>Age</th><th>Email</th><th>Telephone</th></tr>");
            for(var i =0; i < arr.length ; i++){
             document.write("<tr>");
                for(key in arr[0]){
                  document.write("<td>"+arr[i][key]+"</td>");
                }
                 document.write("</tr>");
            }
            document.write("</table>");
            */

        var table = document.createElement("TABLE");
        table.border = "1";
 
        //Get the count of columns.
        var columnCount = arr.length;
 
        //Add the header row.
        var row = table.insertRow(-1);
        for (var i = 0; i < columnCount; i++) {
            var headerCell = document.createElement("TH");
            headerCell.innerHTML = arr[0][i];
            row.appendChild(headerCell);
        }
 
        //Add the data rows.
        for (var i = 1; i < arr.length; i++) {
            row = table.insertRow(-1);
            for (var j = 0; j < columnCount; j++) {
                var cell = row.insertCell(-1);
                cell.innerHTML = arr[i][j];
            }
        }
 
        var dvTable = document.getElementById("userlist");
        dvTable.innerHTML = "";
        dvTable.appendChild(table);


        }
        