<?php
	session_start();
	if ($_SESSION['logged_in'] != true) {
		header("Location: index.php");
		exit();
	}
	include "../connection.php";
	include "../functional.php";

	$sql_query = "SELECT * FROM `events` ORDER BY `id` DESC";
	$result_query = mysqli_query($connection,$sql_query);
	$events = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

	$sql_query = "SELECT * FROM `programs` ORDER BY `id` DESC";
	$result_query = mysqli_query($connection,$sql_query);
	$programs = mysqli_fetch_all($result_query,MYSQLI_ASSOC);	
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Home</title>
		<?php include "../html/head.php"; ?>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
		<div class="w3-bar w3-border w3-light-grey">
		  <a href="../" class="w3-bar-item w3-button"><img style="width:30px;" src="<?php echo "../".$small_logo_path; ?>"></a>
		  <a href="actions/add.php?action=event&add=false" class="w3-bar-item w3-button">Add Event</a>
		  <a href="actions/add.php?action=program&add=false" class="w3-bar-item w3-button">Add Program</a>
		</div>

	    <div class="w3-bottombar w3-border-green">
	    	<h3 style="margin-left: 25px;">Events</h3>
	    </div>
		<div class="w3-container w3-padding-large w3-row" style="text-align: center;">
	      <?php 
	        $i = 0;
	        while($i < count($events)) {
	       ?>
	       <div class="w3-card-4 w3-margin w3-col event-widget">
	        <div class="w3-display-container w3-text-white">
	          <img src="<?php echo $events[$i]['image1_url']; ?>" style="width: 100%;">
	          <div class="w3-xlarge w3-display-bottomleft w3-padding title-widget"><?php echo $events[$i]['title']; ?></div>
	        </div>
	        <div style="padding: 15px;">
	          <div class="w3-row">
	            <div class="w3-center w3-margin-bottom">
	              <p><?php echo $events[$i]['subtitle']; ?></p>
	            </div>
	          </div>
	          <div class="for-button">
	            <a href="../eventpage.php?id=<?php echo $events[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-green">Read More &rarr;</a>
	          </div>
	          <div class="for-button">
	            <a href="actions/add.php?action=event&add=true&id=<?php echo $events[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-orange">Update &#8635;</a>
	          </div>	          	
	          <div class="for-button">
	            <a href="actions/delete.php?id=<?php echo $events[$i]['id']; ?>&table=events" class="w3-button w3-round-large w3-border w3-border-red">Delete &#x2715;</a>
	          </div>	          	
	        </div>
	      </div>
	      <?php 
	        $i++;}
	       ?>
	    </div>
	    <div class="w3-bottombar w3-border-green">
	    	<h3 style="margin-left: 25px;">Programs</h3>
	    </div>
	    <div class="w3-container w3-padding-large w3-row" style="text-align: center;">
	      <?php 
	        $i = 0;
	        while($i < count($programs)) {
	       ?>
	       <div class="w3-card-4 w3-margin w3-col event-widget">
	        <div class="w3-display-container w3-text-white">
	          <img src="<?php echo $programs[$i]['image1_url']; ?>" style="width: 100%;">
	          <div class="w3-xlarge w3-display-bottomleft w3-padding title-widget"><?php echo $programs[$i]['title']; ?></div>
	        </div>
	        <div style="padding: 15px;">
	          <div class="w3-row">
	            <div class="w3-center w3-margin-bottom">
	              <p><?php echo $programs[$i]['subtitle']; ?></p>
	            </div>
	          </div>
	          <div class="for-button">
	            <a href="../programpage.php?id=<?php echo $programs[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-green">Read More &rarr;</a>
	          </div>
	          <div class="for-button">
	            <a href="actions/add.php?action=program&add=true&id=<?php echo $programs[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-orange">Update &#8635;</a>
	          </div>	          	
	          <div class="for-button">
	            <a href="actions/delete.php?id=<?php echo $programs[$i]['id']; ?>&table=programs" class="w3-button w3-round-large w3-border w3-border-red">Delete &#x2715;</a>
	          </div>	          	
	        </div>
	      </div>
	      <?php 
	        $i++;}
	       ?>
	    </div>
	</body>
</html>