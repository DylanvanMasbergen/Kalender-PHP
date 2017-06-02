<?php
require(ROOT . "model/BirthdayModel.php");

function index(){
$Birthday = getAllBirthdays();                           
render('Birthday/index', array("Birthday"=>getAllBirthdays()));
} 

function create(){
render("birthday/create");
}

function createSave(){
$result = CreateBirthday();

	if ($result == false ) {
	header("Location:" . URL . "error/databasefout");
	exit();
}
	header("Location:" . URL . "birthday/index");
}

function edit($id = ''){
	$birthday = getBirthday($id);

	// TODO: if $birthday is empty then redirect with errormessage

	render("birthday/edit", array('birthday' => $birthday));
}

function editSave(){

	

	if (!EditBirthday()) {

		header("Location:" . URL . "error/editfout");

		exit();

	}
		header("Location:" . URL . "birthday/index");

} 

function delete($id){
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
}
		header("Location:" . URL . "birthday/index");
}
?>