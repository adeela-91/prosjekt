<?php
session_start();


echo"<b>Navn:</b> ".$_SESSION["navn"]." (<i>".$_SESSION["kunde"].")</i><br/>";
echo"<b>Telefonnummer:</b> ".$_SESSION["telefonnummer"]."<br/>";
echo"<b>E-post:</b> ".$_SESSION["e-post"]."<br/><br/>";

echo"<b>Hendvennelse:</b> ".$_SESSION["hva"]."<br/><br/>";

echo"<b>Din melding:</b><br/>".$_SESSION["fortell"];

echo"<br/><br/>";

mail("s171690@stud.hio.no",
"Hendvennelse fra ".$_SESSION["navn"]. ": ".$_SESSION["hva"],
"Navn: ".$_SESSION["navn"]." (".$_SESSION["kunde"].").\n".
"E-post: ".$_SESSION["e-post"]."\n".
"Tema: ".$_SESSION["hva"]."\n\n".
"Melding: ".$_SESSION["fortell"]);


$filref=fopen("4oblig4.txt","w");
fwrite($filref,
"Navn: ".$_SESSION["navn"]."\n
Kunde: ".$_SESSION["kunde"]."\n
Telefonnummer: ".$_SESSION["telefonnummer"]."\n
E-post: ".$_SESSION["e-post"]."\n
Hendvennelse: ".$_SESSION["hva"]."\n
Din melding: ".$_SESSION["fortell"]."\n
");

fclose($filref);
$filref=fopen("4oblig4.txt","r");
$filstring=fgets($filref);
fclose($filref)

?>

Takk for din registrering. For å gjøre endringer på det du har lagret, trykk på <b>Endre</b>

<form action="4oblig4.php" method="post">
<input type="submit" name="Endre din Registrering" value="Endre"/>
<input type="submit" name="Gå videre" value="Neste"/>
</form>
