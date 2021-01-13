var Mark = {
	fullName : 'Mark',
	mass : 50,
	height : 1.6,
	calculateBMI : function(){
		return this.mass/(this.height*this.height);
	}
};
console.log('Marks BMI ' + (Mark.BMI = Mark.calculateBMI()));

var John = {
	fullName : 'John',
	mass : 55,
	height : 1.8,
}

John.calculateBMI = Mark.calculateBMI;
console.log('Johns BMI ' + (John.BMI = John.calculateBMI()));

if(Mark.BMI>John.BMI) {
	console.log('Marks BMI is higher then Johns BMI');
}
else if(Mark.BMI<John.BMI) {
	console.log('Johns BMI is higher then Marks BMI');	
}else {
	console.log('Mark and John have same BMI');	
}