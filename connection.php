<?php 
	if (explode("/",$_SERVER['REQUEST_URI'])[2] == "connection.php" || explode("/",$_SERVER['REQUEST_URI'])[2] == "sessions.php") {
		header('Location: 404.php') ;
	}
	$connection = mysqli_connect('localhost','root','usbw','hayq_data');
	if ($connection == false) {
		echo "MySQL error Please check connection.php";
		exit();
	}
	mysqli_set_charset($connection,"utf8");
 ?>
