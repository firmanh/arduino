
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/tutorial.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

  <style>
    .wow:first-child {
      visibility: hidden;
    }


  </style>

</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      
      <?php include "logo.php"; ?>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer">
        <!-- Right aligned menu below button -->
<button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon" style="float:right;">
</button>


<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
  <a href="control.html"><li class="mdl-menu__item">Home</li></a>
  <li class="mdl-menu__item">Profil</li>
  <a href="profile.html"><li class="mdl-menu__item">Tombol</li></a>
  <li class="mdl-menu__item">Keluar</li>
</ul>

      </div>
      <!-- Navigation. We hide it in small screens. -->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">SMARTBOX</span>
    <nav class="mdl-navigation">
      <?php include "menu.php"; ?>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    
  <div class="tutorial">
    <h4><b>CARA MENGGUNAKAN SMARTBOX</b></h4>
    
    <center>
      <div class="tutorial_smartbox1">
        <h6>SAMBUNGKAN SMARTBOX KE LISTRIK</h6>
        <img class="tutorial_icon1" src="img/listrik.png">
        <hr>
      </div>
      <div class="tutorial_smartbox2">
        <h6>PASTIKAN KONEKSI INTERNET TERHUBUNG KE SMARTBOX</h6>
        <img class="tutorial_icon2" src="img/koneksi.png">
        <hr>
      </div>
      <div class="tutorial_smartbox3">
        <h6>BUKA WEBSITE www.arduino.id.ai</h6>
        <img class="tutoriaL_icon3" style="width:90%;" src="img/url.png">
        <hr>
      </div>
      <div class="tutorial_smartbox4">
        <h6>MASUK KE HALAMAN KONTROL, PILIH ALAT YANG AKAN DI KONTROL SESUAI KEBUTUHAN</h6>
        <img class="tutorial_icon4" style="width:90%;" src="img/kontrol.png">
        <hr>
      </div>
    </center>
  </div>


</div>
<!-- SCRIPT SRC -->

<script src="js/wow.min.js"></script>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/material.js"></script>
</body>
</html>