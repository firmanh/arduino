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
  <link rel="stylesheet" href="css/sweet-alert.css">

  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
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
<button type="submit" id="submit" class="mdl-button mdl-js-button mdl-button--icon" style="float:right;">
</button>
<script>
function getData(e) {
    e.preventDefault();
}
</script>
   </div>
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
      

<!-- FORM -->
<form action="" method="POST" id="kontrol">
<table class="mdl-data-table mdl-js-data-table" style="width:100%!important;">
    <tr>
      <th style="text-align:left;">All</th>
      <th></th>
      <th></th>
      <th style="align:right;"><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
            <input type="checkbox" name="saklar1" id="switch-1" class="mdl-switch__input swalert"  value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
 <?php 
  if (isset($_POST['saklar1'])) { 
   $fp = fopen('saklar1.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar1.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>

  <tbody>
    <tr>
      <th style="text-align:left;">Saklar 1</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
            <input type="checkbox" name="saklar2" id="switch-3" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>
<?php 
  if (isset($_POST['saklar2'])) {
   $fp = fopen('saklar2.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar2.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
     <th style="text-align:left;">Saklar 2</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
            <input type="checkbox" name="saklar3" id="switch-4" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>

<?php 
  if (isset($_POST['saklar3'])) {
   $fp = fopen('saklar3.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar3.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
     <th style="text-align:left;">Saklar 3</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
            <input type="checkbox" name="saklar4" id="switch-5" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>
<?php 
  if (isset($_POST['saklar4'])) {
   $fp = fopen('saklar4.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar4.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>

    <th style="text-align:left;">Saklar 4</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
            <input type="checkbox" name="saklar5" id="switch-6" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>

<?php 
  if (isset($_POST['saklar5'])) {
   $fp = fopen('saklar5.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar5.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
      <th style="text-align:left;">Saklar 5</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
            <input type="checkbox" name="saklar6" id="switch-7" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>
<?php 
  if (isset($_POST['saklar6'])) {
   $fp = fopen('saklar6.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar6.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
      <th style="text-align:left;">Saklar 6</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-8">
            <input type="checkbox" name="saklar7" id="switch-8" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>
    <tr>
<?php 
  if (isset($_POST['saklar7'])) {
   $fp = fopen('saklar7.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar7.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
      <th style="text-align:left;">Saklar 7</th>
      <th></th>
      <th></th>
      <th><label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-9">
            <input type="checkbox" name="saklar8" id="switch-9" class="mdl-switch__input" value="1" onClick="this.form.submit()">
            <span class="mdl-switch__label"></span>
          </label>
      </th>
    </tr>

  <?php 
  if (isset($_POST['saklar8'])) {
   $fp = fopen('saklar8.txt', 'w');
       fwrite($fp, '1');
       fclose($fp);
 }else{
   $fp = fopen('saklar8.txt', 'w');
       fwrite($fp, '0');
       fclose($fp);
 }
?>
  </tbody>
</table>
</form>

    <script>  
 $(":checkbox").on("change", function(){
        var checkboxValues = {};
        $(":checkbox").each(function(){
          checkboxValues[this.id] = this.checked;
        });
        $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
      });

      function repopulateCheckboxes(){
        var checkboxValues = $.cookie('checkboxValues');
        if(checkboxValues){
          Object.keys(checkboxValues).forEach(function(element) {
            var checked = checkboxValues[element];
            $("#" + element).prop('checked', checked);
          });
        }
      }

      $.cookie.json = true;
      repopulateCheckboxes();
/*
  $(document).ready(function() {
    $('#kontrol').change(function() {
        if ($(this).prop('checked')) {
            alert("You have elected to show your checkout history."); //checked
        }
        else {
            alert("You have elected to turn off checkout history."); //not checked
        }
    });
});*/

</script>

</div>
<!-- SCRIPT SRC -->

<script src="js/wow.min.js"></script>
<script>
   new WOW().init();
</script>
<script src="js/sweet-alert.min.js"></script>
<script src="js/material.js"></script>

</body>
</html>