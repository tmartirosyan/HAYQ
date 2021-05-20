<?php
	include "../../connection.php";
	session_start();
	if ($_SESSION['logged_in'] != true) {
		header("Location: ../index.php");
		exit();
	}
	if(isset($_GET['addevent']) || isset($_GET['addprogram'])) {
		$title = $_GET['title'];
		$subtitle = $_GET['subtitle'];
		$description = $_GET['description'];
		$image1_url = $_GET['image1_url'];
		$image2_url = $_GET['image2_url'];
		$image3_url = $_GET['image3_url'];
		$image4_url = $_GET['image4_url'];
		$image5_url = $_GET['image5_url'];
		$image6_url = $_GET['image6_url'];
		$image7_url = $_GET['image7_url'];
		$image8_url = $_GET['image8_url'];
		$image9_url = $_GET['image9_url'];
		$image10_url = $_GET['image10_url'];
		$video_url = $_GET['video_url'];

		if(isset($_GET['addevent'])) {

			$mysqli_command = "INSERT INTO `events` (`title`, `subtitle`, `description`, `image1_url`, `image2_url`, `image3_url`, `image4_url`, `image5_url`, `image6_url`, `image7_url`, `image8_url`, `image9_url`, `image10_url`, `video_url`) VALUES ('$title', '$subtitle','$description','$image1_url','$image2_url','$image3_url','$image4_url','$image5_url','$image6_url','$image7_url','$image8_url','$image9_url','$image10_url','$video_url')";
			databaseAction($connection,$mysqli_command);
		}

		else if(isset($_GET['addprogram'])) {

			$mysqli_command = "INSERT INTO `programs` (`title`, `subtitle`, `description`, `image1_url`, `image2_url`, `image3_url`, `image4_url`, `image5_url`, `image6_url`, `image7_url`, `image8_url`, `image9_url`, `image10_url`, `video_url`) VALUES ('$title', '$subtitle','$description','$image1_url','$image2_url','$image3_url','$image4_url','$image5_url','$image6_url','$image7_url','$image8_url','$image9_url','$image10_url','$video_url')";
			databaseAction($connection,$mysqli_command);
		}
	}
	else if(isset($_GET['updateevent']) || isset($_GET['updateprogram'])) {
		$id = $_GET['id'];
		$title = $_GET['title'];
		$subtitle = $_GET['subtitle'];
		$description = $_GET['description'];
		$image1_url = $_GET['image1_url'];
		$image2_url = $_GET['image2_url'];
		$image3_url = $_GET['image3_url'];
		$image4_url = $_GET['image4_url'];
		$image5_url = $_GET['image5_url'];
		$image6_url = $_GET['image6_url'];
		$image7_url = $_GET['image7_url'];
		$image8_url = $_GET['image8_url'];
		$image9_url = $_GET['image9_url'];
		$image10_url = $_GET['image10_url'];
		$video_url = $_GET['video_url'];

		if (isset($_GET['updateevent'])) {
			$mysqli_command = "UPDATE `events` SET `title`='$title', `subtitle`='$subtitle', `description`='$description', `image1_url`='$image1_url', `image2_url`= '$image2_url', `image3_url`= '$image3_url',`image4_url`='$image4_url', `image5_url`='$image5_url', `image6_url`='$image6_url', `image7_url`='$image7_url', `image8_url`='$image8_url', `image9_url`='$image9_url', `image10_url`='$image10_url', `video_url`= '$video_url' WHERE `id`='$id'";
			databaseAction($connection,$mysqli_command);
		}
		if (isset($_GET['updateprogram'])) {
			$mysqli_command = "UPDATE `programs` SET `title`='$title', `subtitle`='$subtitle', `description`='$description', `image1_url`='$image1_url', `image2_url`= '$image2_url', `image3_url`= '$image3_url',`image4_url`='$image4_url', `image5_url`='$image5_url', `image6_url`='$image6_url', `image7_url`='$image7_url', `image8_url`='$image8_url', `image9_url`='$image9_url', `image10_url`='$image10_url', `video_url`= '$video_url' WHERE `id`='$id'";
			databaseAction($connection,$mysqli_command);
		}
	}
	else {
		$id = $_GET['id'];
		$table_name = $_GET['table'];
		if ($table_name == "events") {
			$mysqli_command = "DELETE FROM `events` WHERE `id` = '$id'";
			databaseAction($connection,$mysqli_command);
		}
		else {
			$mysqli_command = "DELETE FROM `programs` WHERE `id` = '$id'";
			databaseAction($connection,$mysqli_command);
		}
	}
	function databaseAction($connection,$mysqli_command) {
		mysqli_query($connection,$mysqli_command);
		header("Location: ../home.php");
		exit();
	}
 ?>	