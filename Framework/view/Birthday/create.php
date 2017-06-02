<div class="container">

<h1>Toevoegen</h1>
<p>Vul de naam en de geboortedatum in en klik op "verzenden" om het op te slaan in de database.</p>

	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="naam" required="">
		<input type="text" name="day" placeholder="geboortedag " required="">
		<input type="text" name="month" placeholder="geboortemaand " required="">
		<input type="text" name="year" placeholder="geboortejaar " required="">

		
		<button type="submit" value="versturen" >Toevoegen</button>
	</form>

</div>