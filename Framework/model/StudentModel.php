<?php

function getAllStudents() 
{
	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM students";
    $query = $db->prepare($sql);
    $query->execute();

	$db = null;

	return $query->fetchAll();
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