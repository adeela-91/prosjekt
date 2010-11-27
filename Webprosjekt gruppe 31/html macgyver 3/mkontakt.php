<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" href="mdesign.css" type="text/css" title="stil1">

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>MacGyver</title>
	</head>
	<body>



	<div id= "meny">

		<table>
			<tr>
			<td><a href="mindex.html">Hovedside</a></td>
			<td><a href="mserie.html">Serie-info</a></td>
			<td><a href="mkarakterer.html">Karakterer</a></td>
			<td><a href="msesonger.html">Episoder</a></td>
			<td><a href="quiz.php">Quiz</a></td>
			<td><a href="mmedia.html">Media</a></td>
			<td><a href="mkontakt.html">Kontakt</a></td>
			<td><a href="mlenker2.html">Lenker</a></td>
			</tr>
		</table>
	</div>
	
	



<div id="messagebox">
<form action="" method="GET">
	<table>
		<tr>
			<td>Navn</td>
			<td><input type="text" name="navn"/></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="e-mail"/></td>
		</tr>
		<tr>
			<td>Emne</td>
			<td><input type="text" name="emne"/></td>
		</tr>
		<tr>
			<td>Melding</td>
			<td><textarea wrap="OFF" name="melding"></textarea></td>
		</tr>
	</table>
	<input type="submit" name="send" value="Send melding"/>
</form>
</div>


<?php


mail("s171690@stud.hio.no",
"Macgyver fra ".$_REQUEST["navn"]. ": ".$_REQUEST["emne"],
"Navn: ".$_REQUEST["navn"]."\n".
"E-post: ".$_REQUEST["e-mail"]."\n".
"Emne: ".$_REQUEST["emne"]."\n\n".
"Melding: ".$_REQUEST["melding"]);

if(isset)=submit;
echo"Hei ".$_REQUEST["navn"]. ". Takk for din hendvennelse."


?>






<div id="karakterinfo"
<p><b>i: </b>For å sende oss en melding. Fyll ut tekstboksen, og trykk på "Send melding".</p>

</div>



</body>
</html>