var johnAvgScore = (89+120+103)/3;
var mikeAvgScore = (116+94+123)/3;
var winner,winnerTeamscore;
if(johnAvgScore > mikeAvgScore)
{
	winner = "John's Team";
	winnerTeamscore=johnAvgScore;
}
else if(johnAvgScore < mikeAvgScore)
{
	winner = "Mike's Team";	
	winnerTeamscore=mikeAvgScore;
}
else{
	winner = "Both teams have same score";
	winnerTeamscore=mikeAvgScore;
}
console.log("Winner is "+winner+" and Average score is :"+winnerTeamscore);
