
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" href="banan.css" type="text/css" title="stil1">

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>MacGyver</title>
	</head>
	<body>



<div id= "side1">
<img id="logo" src="background.png" alt="macgyver"/>
<div id="tabel">

			<a href="mindex.html">Hovedside</a>
			<a href="mserie.html">Info</a>
			<a href="mkarakterer.html">Karakterer</a>
			<a href="msesonger.html">Episoder</a>
			<a href="quiz.php">Quiz</a>
			<a href="mmedia.html">Media</a>
			<a href="mkontakt.php">Kontakt</a>
			<a href="mlenker2.html">Lenker</a>
		</div>
<div id= "center">

	<div id="index3">
<div id="messagebox">
<form action="" method="POST">
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



<?php


mail("s171690@stud.hio.no",
"Macgyver fra ".$_REQUEST["navn"]. ": ".$_REQUEST["emne"],
"Navn: ".$_REQUEST["navn"]."\n".
"E-post: ".$_REQUEST["e-mail"]."\n".
"Emne: ".$_REQUEST["emne"]."\n\n".
"Melding: ".$_REQUEST["melding"]);

if (isset($_POST['submit']))
{
echo"Hei ".$_REQUEST["navn"]. ". Takk for din hendvennelse.";
}



?>



	</div>
	
	<div id="info">
	<h4><b>i: </b>Du er nå på Kontakt siden</h4>
	</div>


	</div>
	<div id="validator">

			<p>
    			<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.stud.hio.no%2F~s169968%2Fm%2Fmindex.html">
        		<img style="border:0;width:88px;height:31px"
        	    src="http://jigsaw.w3.org/css-validator/images/vcss"
        	    alt="Valid CSS!" />
    		</a>
		</p>
		</div>
	</div>
</body>
</html>