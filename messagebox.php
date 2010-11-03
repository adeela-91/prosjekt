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
	<input type="submit" name="send"/>
</form>

<?php//messagebox.php
mail("thomas.kroken@gmail.com",
$_REQUEST["e-mail"],
$_REQUEST["emne"],
$_REQUEST["melding"]);
echo"Melding er sendt til thomas.kroken@gmail.com";
?>		





<?php
 $to = "thomas.kroken@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>