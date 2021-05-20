<?php 
  include "sessions.php";
	include "functional.php";
  include "connection.php";

  $sql = "SELECT * FROM EVENTS ORDER BY `id` DESC LIMIT 0 , 3";
  $result_query = mysqli_query($connection,$sql);
  $result_table = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

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

    <!-- Header -->
    <header id="portfolio">
      <div class="w3-container">
      	<h1><b><?php echo $company_name; ?></b></h1>
      	<div class="w3-section w3-bottombar w3-border-green w3-padding-16">
	        <h4><b>Last Events</b></h4>
      	</div>
      </div>
    </header>
    <div class="w3-row-padding">
      <?php 
        $i = 0;
        while($i < count($result_table)) {
       ?>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="<?php echo $result_table[$i]['image1_url']; ?>" alt="Norway" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white card-container">
          <p><b><?php echo $result_table[$i]['title']; ?></b></p> 
          <p><?php echo shortedText($result_table[$i]['subtitle']); ?></p>
			     <div class="for-button">
	        	<a href="eventpage.php?id=<?php echo $result_table[$i]['id']; ?>" class="w3-button w3-round-large w3-border w3-border-green">Read More &rarr;</a>
	        </div>
        </div>
      </div>
      <?php $i++; } ?>
    </div>

    <!-- About Section -->
    <div class="w3-container w3-padding-large">
      <h4 id="about"><b>About Us</b></h4>
      <p><?php echo $about_us; ?></p>
      <hr>
      <!-- Contact Section -->
      <div class="w3-container w3-padding-large w3-green">
        <h4 id="contact"><b>Contact With Us</b></h4>
        <hr class="w3-opacity">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6926.697612642732!2d44.51063429420432!3d40.183187683097934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abce283f1d5b9%3A0xb7f25fdb2fe0d42!2zMzMvMSwgTWVzcm9wIE1hc2h0b2MgcG9raG90YSwgWWVyZXZhbiAwMDAyLCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2s!4v1620639353022!5m2!1sru!2s" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="iframe-contact"></iframe>
        <div class="w3-row-padding w3-center w3-padding-24 contact-form">
          <div class="w3-third w3-green">
            <p><i class="	fa fa-envelope-open-o w3-xxlarge w3-text-light-grey"></i></p>
            <p>email@gmail.com</p>
          </div>
          <div class="w3-third w3-green">
            <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
            <p>Chicago, US</p>
          </div>
          <div class="w3-third w3-green">
            <p><i class="fa fa-mobile w3-xxlarge w3-text-light-grey"></i></p>
            <p>+374 (55) 055 055</p>
          </div>
          <div class="w3-third w3-green">
            <p><i class="fa fa-facebook-official w3-xxlarge w3-text-light-grey"></i></p>
            <p>@Facebook</p>
          </div>
          <div class="w3-third w3-green">
            <p><i class="fa fa-instagram w3-xxlarge w3-text-light-grey"></i></p>
            <p>@Instagram</p>
          </div>
        </div>
        <hr class="w3-opacity">
      </div>
      <?php include "html/footer.php"; ?>
    </div>
  </body>
</html>