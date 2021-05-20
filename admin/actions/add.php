<?php 
	include "../../connection.php";
	session_start();
	if ($_SESSION['logged_in'] != true) {
		header("Location: ../index.php");
		exit();
	}	
	function edit($is_ready,$text) {
		if($is_ready) {
			echo $text;
		}
		else {
			echo "";
		}
	}


	$main_work_of_page = "Add ";
	$name = 'add'.$_GET['action'];
	$form_action = "action_with_databases.php";

	$id = "";
	$title = "";
	$subtitle = "";
	$description = "";
	$images = array("","","","","","","","","","");
	$video_url = "";


	$ready_for_editing = true;
	if($_GET['add'] == "true") {
		$id = $_GET['id'];
		if ($_GET['action'] == "event") {
			$sql_query = "SELECT * FROM `events` WHERE `id` = '$id'";
		}
		else{
			$sql_query = "SELECT * FROM `programs` WHERE `id` = '$id'";
		}
		$result_query = mysqli_query($connection,$sql_query);
		$data = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

		$id = $data[0]['id'];
		$title = $data[0]['title'];
		$subtitle = $data[0]['subtitle'];
		$description = $data[0]['description'];
		$images = array(
			$data[0]['image1_url'],
			$data[0]['image2_url'],
			$data[0]['image3_url'],
			$data[0]['image4_url'],
			$data[0]['image5_url'],
			$data[0]['image6_url'],
			$data[0]['image7_url'],
			$data[0]['image8_url'],
			$data[0]['image9_url'],
			$data[0]['image10_url']
		);
		$video_url = $data[0]['video_url'];

		$ready_for_editing = true;
		$main_work_of_page = "Update ";
		$name = "update".$_GET['action'];
		$form_action = "action_with_databases.php?id=".$id;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> <?php echo $main_work_of_page.$_GET['action']; ?></title>
		<?php include "../../html/head.php"; ?>
		<link rel="stylesheet" type="text/css" href="../style/style.css">
	</head>
	<body>
		<a href="../home.php" style="font-size: 35px; margin: 18px;text-decoration: none;">&larr;</a>
		<form action="<?php echo $form_action; ?>" class="add_form w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
			<h2 class="w3-center"> <?php echo $main_work_of_page.$_GET['action']; ?></h2>
			<?php if ($_GET['add'] != "false") { ?>
				<div class="w3-row w3-section">
				    <div class="w3-rest">
				    	<label>ID *</label>
				      <input class="w3-input w3-border" name="id" type="text" value="<?php edit($ready_for_editing,$id); ?>">
				    </div>
				</div>
			<?php } ?>
			<div class="w3-row w3-section">
			    <div class="w3-rest">
			    	<label>Title</label>
			      <input class="w3-input w3-border" name="title" type="text" placeholder="Title" required value="<?php edit($ready_for_editing,$title); ?>">
			    </div>
			</div>
			<div class="w3-row w3-section">
			    <div class="w3-rest">
			    	<label>Subtitle</label>
			      <input class="w3-input w3-border" name="subtitle" type="text" placeholder="Subtitle" required value="<?php edit($ready_for_editing,$subtitle); ?>">
			    </div>
			</div>
			<div class="w3-row w3-section">
			    <div class="w3-rest">
			    	<label>Description</label>
			      <textarea class="w3-input w3-border" name="description" type="text" placeholder="Text" required><?php edit($ready_for_editing,$description); ?></textarea>
			    </div>
			</div>
			<?php 
				$i = 1;
				while($i <= 10) {
			 ?>
			<div class="w3-row w3-section">
			    <div class="w3-rest">
			    	<label>Image Url</label>
			    	<?php if ($i == 1) {?>
			    		<input class="w3-input w3-border" name="image<?php echo $i; ?>_url" type="text" placeholder="Url" value="<?php echo $images[$i-1]; ?>">
			    		<?php 
			    			$i++;
			    			continue; 
			    		} ?>
			      <input class="w3-input w3-border" name="image<?php echo $i; ?>_url" type="text" placeholder="Url" value="<?php echo $images[$i-1]; ?>">
			    </div>
			</div>
			<?php $i++; } ?>
			<div class="w3-row w3-section">
			    <div class="w3-rest">
			    	<label>Video Url</label>
			      <input class="w3-input w3-border" name="video_url" type="text" placeholder="Url" value='<?php edit($ready_for_editing,$video_url); ?>'>
			    </div>
			</div>
			<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="<?php echo $name; ?>"><?php echo $main_work_of_page; ?></button>
			</form>
	</body>
</html>