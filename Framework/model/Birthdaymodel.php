	<?php

			function getAllBirthdays(){
				$db = openDatabaseConnection();
				$query = $db->prepare("SELECT  * FROM birthdays ORDER BY month");
				$query->execute();
				return $query->fetchall();
			}
?>




