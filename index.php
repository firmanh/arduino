
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/control.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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
      






<center>
  <img src="img/header.png" class="header wow fadeInUp">
</center>
<div class="wrapper">
<div class="mdl-grid" style="margin-top:20px">
  <div class="wow fadeInDown mdl-cell mdl-cell--2-col" style="height:100px" data-wow-delay="0.1s"><center><a href="profile.php"><img class="icon ripplelink account" src="img/iot.png" style="margin-top:23px;"></a></center></div>
  <div class="wow fadeInDown mdl-cell mdl-cell--2-col" style="height:100px" data-wow-delay="0.4s"><center><a href="control.php"><img class="icon ripplelink switch" src="img/switch.png" style="margin-top:40px;"></a></center></div>
  <div class="wow fadeInDown mdl-cell mdl-cell--2-col" style="height:100px" data-wow-delay="0.6s"><center><a href="tutorial.php"><img class="icon ripplelink list" src="img/pilih.png" style="margin-top:55px;"></a></center></div>
  <div class="wow fadeInDown mdl-cell mdl-cell--2-col" style="height:100px" data-wow-delay="0.9s"><center><a href="about.php"><img class="icon ripplelink logout" src="img/about.png" style="width:60%;height:60%;margin-top:55px;"></a></center></div>
</div>
</div>



</div>
<!-- SCRIPT SRC -->

<script src="js/wow.min.js"></script>
<script>
   new WOW().init();
</script>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/material.js"></script>
</body>
</html>