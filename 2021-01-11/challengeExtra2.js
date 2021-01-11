var johnAvgScore = (89+120+103)/3;
var mikeAvgScore = (116+94+123)/3;
var maryAvgScore = (97+134+105)/3;
var winner,winnerTeamscore;
if(johnAvgScore > mikeAvgScore && johnAvgScore>maryAvgScore)
{
	winner = "John's Team";
	winnerTeamscore=johnAvgScore;
}
else if(mikeAvgScore > johnAvgScore && mikeAvgScore > maryAvgScore)
{
	winner = "Mike's Team";	
	winnerTeamscore=mikeAvgScore;
}
else if(maryAvgScore > johnAvgScore && maryAvgScore > mikeAvgScore)
{
	winner = "Mary's Team";	
	winnerTeamscore=maryAvgScore;
}
else{
	winner = "Both teams have same score";
	winnerTeamscore=mikeAvgScore;
}
console.log("Winner is "+winner+" and Average score is :"+winnerTeamscore);
