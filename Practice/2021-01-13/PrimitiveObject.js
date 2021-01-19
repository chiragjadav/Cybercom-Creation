// objects
var obj1 = {
	name: 'john',
	age: 26
};
var obj2 = obj1;
obj1.age= 30;
console.log(obj1.age);
console.log(obj2.age);

//functions
var age = 27;
var obj = {
	name: 'jonas',
	city:'Lisbon'
};

function change(a, b) {
	a = 30;
	b.city = 'San Fancisco';
}

change(age, obj);

console.log(age);
console.log(obj.city);