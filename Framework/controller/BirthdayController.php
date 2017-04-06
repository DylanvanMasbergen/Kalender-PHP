<?php
	require(ROOT . "model/BirthdayModel.php");

	function index(){
		$Birthday = getAllBirthdays();                           
		render('Birthday/index', array("Birthday"=>getAllBirthdays()));

	}


?>