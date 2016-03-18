<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
      
      <img src="img/logos.png">
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer">
        <!-- Right aligned menu below button -->
<button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon" style="float:right;">
  <i class="material-icons">more_vert</i>
</button>


<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
  <li class="mdl-menu__item">Yet Another Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
</ul>

      </div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      



    	

    	<!--- HEADER -->
    	<div class="wow fadeInUp" >
    		<center>
    				<img src="img/header.png" class="header">
    		</center>
    	</div>

    	<!--- LOGIN -->
    	<div class="login wow fadeInUp" data-wow-delay="0.2s">
	    	<form action="#">
	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	   				 <input class="mdl-textfield__input" type="text" id="sample3">
	    			 <label class="mdl-textfield__label" for="sample3">Username</label>
	  			</div>
			</form>




	    	<form action="#">
	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	   				 <input class="mdl-textfield__input" type="password" id="sample3">
	    			 <label class="mdl-textfield__label" for="sample3">Password</label>
	  			</div>
			</form>

		<!-- BUTTON -->
		<div class="input wow fadeInUp" data-wow-delay="0.4s">
			<input href="index.php" type="submit"onClick="this.form.submit()" value="Masuk" class="tombol mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="height:40px;">
		</div>
    <input type="submit" value="tes">

		<!-- LINK -->
		<center >
			<p class="link wow fadeInUp" style="margin-top:20px" data-wow-delay="0.6s">Belum Punya Akun ? <a> Daftar Disini </a> </p>
		</center>








    </div><!-- BATAS CONTENT -->
  </main>
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