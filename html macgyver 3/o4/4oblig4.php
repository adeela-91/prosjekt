<?php
session_start();
echo"Line 1:         <b>Navn:</b> ".$_SESSION["navn"]."<br/>"; 
echo"Line 2:         <b>Kunde:</b> ".$_SESSION["kunde"]."<br/>";
echo"Line 3:         <b>Telefonnummer:</b> ".$_SESSION["telefonnummer"]."<br/>";
echo"Line 4:         <b>E-post:</b> ".$_SESSION["e-post"]."<br/>";
echo"Line 5:         <b>Hendvennelse:</b> ".$_SESSION["hva"]."<br/>";
echo"Line 6:         <b>Din melding:</b> ".$_SESSION["fortell"]."<br/><br/>";
echo"For Œ endre din informasjon du har registrert, velg hvilke linje du vil redigere og trykk endre!"
?>

<form action="" method="post">
<select size="1" name="linje">
<option>Linje 1</option>
<option>Linje 2</option>
<option>Linje 3</option>
<option>Linje 4</option>
<option>Linje 5</option>
<option>Linje 6</option>
</select>

<input type="submit" name="endre innhold" value="Endre"

</form>

<?php

?>