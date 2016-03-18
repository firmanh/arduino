
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="css/material.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
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
    
  <div class="profile">
    
    <center>
      <div class="tutorial_smartbox1">
        <h6>Perkembangan IOT di dunia semakin marak, dengan adanya inovasi dari perkembangan iot banyak membantu manusia dalam bekerja efektif dan efisien. Salah satu produk dari IOT yang dikembangkan adalah smartbox. Smartbox ini dibuat agar manusia dan sumber-sumber energi dapat digunakan dengan lebih efektif dan efisien sehingga dapat mengurangi dampak kerusakan lingkungan</h6>
        <hr>
      </div>
      <div class="tutorial_smartbox2">
        <h6>Smartbox memiliki web server yang berfungsi sebagai setup setting awal</h6>
        <img class="profile_icon1" src="img/database.png">
        <hr>
      </div>
      <div class="profile_smartbox3">
        <h6>Smartbox dihubungkan dengan sumber daya serta barang elektronik yang akan dikontrol</h6>
        <img class="profile_icon2" src="img/iot2.png">
        <hr>
      </div>
      <div class="profile_smartbox4">
        <h6>Pengguna mengupload web controler yang akan digunakan </h6>
        <img class="profile_icon3" src="img/database_upload.png">
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