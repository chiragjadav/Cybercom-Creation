//Function Constructor
var john = {
	name : 'john',
	yearOfBirth : 1990,
	job : 'teacher'
};

var Person = function(name,yearOfBirth,job) {
	// body...
	this.name = name;
	this.yearOfBirth = yearOfBirth;
	this.job = job;
	//this.calculateAge = function(){
	//	console.log(2021 - this.yearOfBirth);
	//}
}

Person.prototype.calculateAge = function() {
	console.log(2021 - this.yearOfBirth);
};

Person.prototype.lastname = 'smith';

//instantiation
var john = new Person('john',1990,'teacher');
var jane = new Person('jane',1960,'designer');
var mark = new Person('mark',1948,'retired');

john.calculateAge();
jane.calculateAge();
mark.calculateAge();
console.log(john.lastname);
console.log(jane.lastname);
console.log(mark.lastname);