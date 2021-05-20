<?php
	session_start();
	if ($_SESSION['logged_in'] != true) {
		header("Location: ../index.php");
		exit();
	}
	include "../../connection.php";
	$id = $_GET['id'];
	$table = $_GET['table'];
	$sql_query = "SELECT * FROM `$table` WHERE `id` = '$id'";
	$result_query = mysqli_query($connection,$sql_query);
	$data = mysqli_fetch_all($result_query,MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include "../../html/head.php"; ?>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body style="text-align:center;">

	    <div class="w3-bottombar w3-border-green">
	    	<h3 style="margin-left: 25px;">Are you sure you want to delete ? </h3>
	    </div>
		<div class="w3-container w3-padding-large w3-row" style="text-align: center;display:flex;justify-content: center;">
	       <div class="w3-card-4 w3-col event-widget del-form-widget">
	        <div class="w3-display-container w3-text-white">
	          <img src="<?php echo $data[0]['image1_url']; ?>" style="width: 100%;">
	          <div class="w3-xlarge w3-display-bottomleft w3-padding title-widget"><?php echo $data[0]['title']; ?></div>
	        </div>
	        <div style="padding: 15px;">
	          <div class="w3-row">
	            <div class="w3-center w3-margin-bottom">
	              <p><?php echo $data[0]['subtitle']; ?></p>
	            </div>
	          </div>          	
	          <div class="for-button">
	            <a href="action_with_databases.php?id=<?php echo $data[0]['id']; ?>&table=<?php echo $_GET['table']; ?>" class="w3-button w3-round-large w3-border w3-border-red">Delete &#x2715;</a>
	          </div>	          	
	        </div>
	      </div>
	    </div>
	</body>
</html>