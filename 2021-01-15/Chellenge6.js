//Promot will open to ask number of element to be print
var number = parseInt(prompt('Enter the number of terms: '));
//Variable Declaration
var n1 = 0, n2 =1, nextTerm;
//array to store fibonacci number
var seriesArray = [];
//For loop for fibonacci number
for(var i = 1; i <= number; i++) {
	//push number in array
	seriesArray.push(n1);
	//Logic
	nextTerm = n1 + n2;
	n1 = n2;
	n2 = nextTerm;
}
//set array to display element using getElementById
document.getElementById("number").innerHTML = seriesArray;