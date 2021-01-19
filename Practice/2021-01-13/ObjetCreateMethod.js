//Object.create
var personProto = {
	calculateAge: function () {
		// body...
		console.log(2021 - this.yearOfBirth);
	}
};

var john = Object.create(personProto);
john.name = 'john';
john.yearOfBirth = 1980;
john.job = 'teacher';

var jane = Object.create(personProto,
{
	name: { value: 'jane' },
	yearOfBirth: { value: 1969 },
	job: { value: 'designer'}
});

