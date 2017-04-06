<table border="1">
	<tr>
		<th>#</th>
		<th>Voornaam</th>
		<th>Achternaam</th>
		<th>Geslacht</th>
	</tr>
	<?php foreach($students as $student) { ?>
	<tr>
		<td><?= $student["student_id"]; ?></td>
		<td><?= $student["student_firstname"]; ?></td>
		<td><?= $student["student_lastname"]; ?></td>
		<td><?= $student["student_gender"]; ?></td>
	</tr>
	<?php } ?>
</table>