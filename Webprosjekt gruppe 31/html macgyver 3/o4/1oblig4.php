<p><b>Fyll ut informasjonen under, og trykk på send!</b></p>

<form action="2oblig4.php" method="post">
	
	Navn:<br/>
	<input type="text" name="navn"/><br/><br/>
	
	Telfonnummer:<br/>
	<input type="text" name="telefonnummer"/><br/><br/>
	
	E-post:<br/>
	<input type="text" name="e-post"/><br/><br/>
	
	Hva gjelder hendvennelsen?<br/>
	<select size="1" name="hva">
		<option>Frakt</option>
		<option>Produkt</option>
		<option>Pris</option>
		<option>Reklamasjon</option>
		<option>Annet</option>
	</select><br/><br/>
	
	Fortell oss mer:<br/>
	<textarea type="text" name="fortell" cols=20 rows=6></textarea><br/><br/>
	
	
	Er du kunde hos oss?<br/><br/>

	<input type="radio" name="kunde" value="kunde"/>
	Ja, jeg er kunde hos dere!<br/>

	<input type="radio" name="kunde" value="ikke kunde"/>
	Nei, jeg er ikke kunde hos dere!<br/>
	
	<input type="submit" value="Send" name"send">
</form>



