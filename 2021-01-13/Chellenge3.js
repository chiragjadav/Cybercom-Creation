//bills on different restaurants stored in an array.
var billsArray = ['124','48','268'];
//Find total bill adding waiters tip stored in array 
var finalPaidAmountArray = [];

//calling calculate tip according to the bill and push in final amount array
finalPaidAmountArray.push(calculateAmount(billsArray[0]));
finalPaidAmountArray.push(calculateAmount(billsArray[1]));
finalPaidAmountArray.push(calculateAmount(billsArray[2]));

console.log(finalPaidAmountArray);

//calculate tip and add to the bill accoriding to the bill amount
function calculateAmount(bills) {
	//converting string into number
	var bill = parseInt(bills);
	//if amount is less than 50 then give 20% tip
	if(bill<50) {
		return bill + (bill*0.2);
	}
	//if amount is less than 50 then give 15% tip
	else if(50 <= bill < 200) {
	   	return bill + (bill*0.15);
	}
	//if amount is less than 50 then give 10% tip
	else{
		return bill + (bill*0.10);
	}
}