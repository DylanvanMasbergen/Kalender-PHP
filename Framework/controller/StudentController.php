<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render('student/index', array(
		'students' => getAllStudents()
	));
}

function create() 
{

}

function edit($student_id)
{

}

function editSave()
{

}

function delete()
{

}
