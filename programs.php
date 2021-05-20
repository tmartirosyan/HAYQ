<?php 
  include "sessions.php";
	include "functional.php";
	include "connection.php";

	$sql_query = "SELECT * FROM `programs` ORDER BY `id` DESC";
	$result_query = mysqli_query($connection,$sql_query);
	$data = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <?php include "html/head.php"; ?>
  </head>
<body class="w3-light-grey w3-content" style="max-width:1600px">
  
  <?php include "html/navigation.php"; ?>
  <!-- !PAGE CONTENT! -->

  <div class="w3-main" style="margin-left:300px">
  <!-- Modal for full size images on click-->
    <div class="w3-container w3-padding-large w3-row" style="text-align: center;">
      <?php 
        $i = 0;
        while($i < count($data)) {
       ?>
       <div class="w3-card-4 w3-margin w3-col event-widget">
        <div class="w3-display-container w3-text-white">
          <img src="<?php echo $data[$i]['image1_url']; ?>" style="width: 100%;">
          <div class="w3-xlarge w3-display-bottomleft w3-padding title-widget"><?php echo $data[$i]['title']; ?></div>
        </div>
        <div style="padding: 15px;">
          <div class="w3-row">
            <div class="w3-center w3-margin-bottom">
              <p><?php echo $data[$i]['subtitle']; ?></p>
            </div>
          </div>
          <div class="for-button">
            <a href="programpage.php?id=<?php echo $data[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-green">Read More &rarr;</a>
          </div>
        </div>
      </div>
      <?php 
        $i++;}
       ?>
    </div>
    <?php include "html/footer.php"; ?>
  </body>
</html>