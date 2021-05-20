<?php 
  include "sessions.php";
	include "functional.php";
	include "connection.php";
	$id = $_GET['id'];

	$sql_query = "SELECT * FROM `programs` WHERE `id` = '$id'";
	$result_query = mysqli_query($connection,$sql_query);
	$data = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

  $images = array($data[0]['image1_url']);
  $i = 2;
  while($i <= 10) {
    if($data[0]["image".$i."_url"] == "" || $data[0]["image".$i."_url"] == " ") {
      break;
    }
    else {
      array_push($images,$data[0]["image".$i."_url"]);
    }
    $i++;
  }
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
    <div class="w3-container w3-padding-large">
      <h3><b><?php echo $data[0]['title']; ?></b></h3>
      <div class="w3-section w3-bottombar w3-border-green w3-padding-16">
        <h4><b><?php echo $data[0]['subtitle']; ?></b></h4>
      </div>
      <p><?php echo $data[0]['description']; ?></p>
      <div class="images">
        <div class="w3-row">
          <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
              <span class="w3-button w3-black w3-xxlarge w3-display-topright">&times;</span>
              <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
              </div>
            </div>
          <?php 
            $i = 0;
            while ($i < count($images)) {
          ?>
            <img class="image_events" onclick="largeOpen(this)" src="<?php echo $images[$i]; ?>">
          <?php 
              $i++;
            }
           ?>
        </div>
      </div>
      <div class="iframe_div">
        <?php echo $data[0]['video_url']; ?>
      </div>
      <hr>
      <?php include "html/footer.php"; ?>
    </div>
  </body>
</html>