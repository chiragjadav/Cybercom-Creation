var MarkMass=50,MarkHeight=1.6;
var JohnMass=55,JohnHeight=1.8;

var MarkBMI=MarkMass/(MarkHeight*MarkHeight);
var JohnBMI=JohnMass/(JohnHeight*JohnHeight);

var BMI = MarkBMI >= JohnBMI ;
console.log("Is Mark's BMI higher than John's ? true. : "+BMI);