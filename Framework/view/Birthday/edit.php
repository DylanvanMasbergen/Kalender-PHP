

<h1>Aanpassen</h1>
<p>Pas de data aan en klik op "opslaan" om de data op te slaan.</p>

	<form action="<?= URL ?>birthday/editSave"" method="POST">

	<input type="hidden" name="id" value="<?= $birthday['id'] ?>"><br>
	
	Person: <input type="text" name="person" value="<?= $birthday['person'] ?>"><br>
	Day: <input type="text" name="day" value="<?= $birthday['day'] ?>"><br>
	Month: <input type="text" name="month" value="<?= $birthday['month'] ?>"><br>
	year: <input type="text" name="year" value="<?= $birthday['year'] ?>"><br>

	

	<button type="submit">Opslaan</button>
</form>