
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
      






<table class="mdl-data-table mdl-js-data-table" style="width:100%!important;">
  <tbody>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 1</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 2</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 3</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 4</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 5</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 6</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 7</th>
    </tr>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Saklar 8</th>
    </tr>
  </tbody>
</table>



</div>
<!-- SCRIPT SRC -->

<script src="js/wow.min.js"></script>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/material.js"></script>
</body>
</html>