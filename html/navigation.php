<!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" style="padding: 0px;" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove" style="font-size: 30px;"></i>
      </a>
      <img src="<?php echo $small_logo_path; ?>" style="width:45%;" class="w3-round"><br><br>
    </div>
    <div class="w3-bar-block">
      <a href="/webpage/" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a>
      <a href="/webpage/#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
      <a href="/webpage/#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
      <a href="programs.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gears fa-fw w3-margin-right"></i>PROGRAMS</a>
      <a href="events.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>EVENTS</a>
    </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
 <header id="portfolio">
  <a href="#">
    <img src="<?php echo $small_logo_path; ?>" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity">
  </a>
  <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()">
    <i class="fa fa-bars"></i>
  </span>
</header>