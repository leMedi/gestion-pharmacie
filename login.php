<?php

require __DIR__. '/include/outils.php';



$employe = new Employers;



$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email"]) && isset($_POST["password"])) 
{
	$result = $employe->auth($_POST["email"], $_POST["password"]);


	if($result === true){
		$employe = $employe->trouver('email', $_POST["email"]);
		$_SESSION['connecter'] = true;
		$_SESSION['user_id'] = $employe->id;
		header('Location: backoffice.php');
	}
		
	else 
		$error = $result;
		
}


 require "login.view.php";





  ?>



