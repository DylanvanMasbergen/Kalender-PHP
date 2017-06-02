<?php
	require(ROOT . "model/BirthdayModel.php");

function index()
{

	$Birthday = getAllBirthdays();                           
	render('Birthday/index', array("Birthday"=>getAllBirthdays()
		));

} 
		
	
function create() 
{
	render("birthday/create");
}
	
function createSave() 
{
	$result = CreateBirthday();
		
	if ($result == false ) {
		header("Location:" . URL . "error/databasefout");
		exit();
	}
		header("Location:" . URL . "birthday/index");
}

function edit()
{
	render("birthday/edit", array(
			'birthdays' => getAllBirthdays()
		));
}
	
function editSave()
{
	$id =$_POST["id"];
	$person=$_POST["person"];
	$day=$_POST["day"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	
	$result = editBirthday($id, $person, $day, $month, $year);

	if($result == true)
	{
		header("Location:" . URL . "birthday/index");
} 


function delete()
{
	if (!DeleteBirthday($person)){
		header("Location:" . URL . "error/index");
		exit();
}
		header("Location:" . URL . "birthday/index");
	}
}
	?>