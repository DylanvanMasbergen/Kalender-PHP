<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getBirthday($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}


function CreateBirthday() {
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;

	if (strlen($id) == 0 ||
		strlen($person) == 0 || 
		strlen($day) == 0 || 
		strlen($month) == 0 || 
		strlen($year) == 0) {
			return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays( id, person, day, month, year) VALUES ( :id, :person, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id,
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year
		));
	$db = null;
	
	return true;
}

function EditBirthday() 
{	
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	$person = isset($_POST['person']) ? $_POST['person'] : null;
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$year = isset($_POST['year']) ? $_POST['year'] : null;
	
	if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id,
		':person' => $person,
		':day' => $day,
		':month' => $month,
		':year' => $year));
	$db = null;
	
	return true;
}

function DeleteBirthday($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}