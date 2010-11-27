<html>
<head>
<style type=" text/css">
#wrapper { 
width:950px;
	height:auto;
	padding:13px;
	margin-right:auto;
	margin-left:auto;
	background-color:#cccccc
}
</style>
</head>	

<body bgcolor ="#e1e1e1">

<div id="wrapper">
<center>
<a href="http://www.w3schools.com">Hjem</a> | 
<a href="http://www.w3schools.com">Ta quiz om igjen W3Schools</a>
<br/> fiks linkene når vi har adresse
</center>
<br/>
<center>Din score:</center>

<?php
	$answer1= $_REQUEST["answerOne"];
	$answer2= $_REQUEST["answerTwo"];
	$answer3= $_REQUEST["answerThree"];
	$answer4= $_REQUEST["answerFour"];
	$answer5= $_REQUEST["answerFive"];
	$answer6= $_REQUEST["answerSix"];
	$answer7= $_REQUEST["answerSeven"];
	$answer8= $_REQUEST["answerEight"];
	$answer9= $_REQUEST["answerNine"];
	$answer10= $_REQUEST["answerTen"];
	$score= 0;

	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "B"){$score++;}
	if ($answer5 == "B"){$score++;}
	if ($answer6 == "A"){$score++;}
	if ($answer7 == "A"){$score++;}
	if ($answer8 == "C"){$score++;}
	if ($answer9 == "B"){$score++;}
	if ($answer10 == "C"){$score++;}
	echo "<center>$score av 10 mulige</center>";
?>

