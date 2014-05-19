<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$Email  = $_POST["Email"];
	$Passwd = $_POST["Passwd"];


	if($Email == "test@test.de" && $Passwd == "test")
		$_SESSION["Uid"] = 1;
} 

?>