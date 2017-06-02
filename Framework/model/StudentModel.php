<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM students WHERE student_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function getStudent() 
{

}

function createStudent() 
{

}

function deleteStudent() 
{

}

function editStudent() 
{

}