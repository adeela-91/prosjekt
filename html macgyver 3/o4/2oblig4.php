<?php
session_start();

setlocale(LC_TIME,"no_NO"); 
echo strftime("Date: %A %d %B %Y")."<br/><br/>";
echo"Hei <b>".$_REQUEST["navn"]."</b>. Takk for din hendvennelse. Sjekk informasjonen om deg under og trykk <b>Bekreft</b>:<br/><br/>";

echo"<b>Navn:</b> ".$_REQUEST["navn"]." (<i>".$_REQUEST["kunde"].")</i><br/>";
echo"<b>Telefonnummer:</b> ".$_REQUEST["telefonnummer"]."<br/>";
echo"<b>E-post:</b> ".$_REQUEST["e-post"]."<br/><br/>";

echo"<b>Hendevennelse:</b> ".$_REQUEST["hva"]."<br/><br/>";

echo"<b>Din melding:</b><br/>".$_REQUEST["fortell"];



$_SESSION["navn"] = $_REQUEST["navn"];
$_SESSION["kunde"] = $_REQUEST["kunde"];
$_SESSION["telefonnummer"] = $_REQUEST["telefonnummer"];
$_SESSION["e-post"] = $_REQUEST["e-post"];
$_SESSION["hva"] = $_REQUEST["hva"];
$_SESSION["fortell"] = $_REQUEST["fortell"];





?>
<form action="3oblig4.php" method="post">
<input type="submit" name="Gå til side 3" value="Bekreft"/>
</form>