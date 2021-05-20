<?php 
	include "../../connection.php";
	session_start();
	if ($_SESSION['logged_in'] != true) {
		header("Location: ../index.php");
		exit();
	}
	function databaseAction($connecion,$mysqli_command) {
		mysqli_query($connection,$mysqli_command);
		header("Location: ../home.php");
		exit();
	}


	$id = $_GET['id'];
	$table_name = $_GET['table'];
	if ($table_name == "events") {
		$mysqli_command = "DELETE FROM `events` WHERE `id` = '$id'";
		echo $table_name;
		// databaseAction($connecion,$mysqli_command);
	}
	else {
		$mysqli_command = "DELETE FROM `programs` WHERE `id` = '$id'";
		echo $id;
		// databaseAction($connecion,$mysqli_command);
	}
 ?>