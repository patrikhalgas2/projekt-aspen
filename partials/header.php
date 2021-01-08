<?php
    $mysqli = new mysqli( "mysql57.websupport.sk", "raw_web", "Brokolica1", "raw_web", "3311" );

    ?><meta name="ip" content="<?= $_SERVER["REMOTE_ADDR"] ?>"><?php

    $page_name = basename($_SERVER['SCRIPT_NAME'],'.php');
    if ( $page_name == 'index' || $page_name == "" ) $page_name = 'home';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
	<!--<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">-->
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!-- FONT AWESOME -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
      <!-- Own CSSS -->
	<link rel="stylesheet" href="/css/style.css">
	<title> <?php echo ucfirst($page_name); ?> -AspenStaff™</title>
	 <!-- add icon link -->
	<link rel = "icon" href = "/img/title.png" >
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/ead4ac3c04.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <header>
		<!-- Preloader -->
			<div id="loader" class="center"></div> 
		<!-- Preloader-end -->

		<nav class="navbar navbar-expand-lg" id="top">
			<div class="collapse navbar-collapse  wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay=" <?php if( $page_name == "home"  ) { ?>5s <?php } else { ?>2s <?php } ?> "   >
				<a href="/" class="navbar-brand">
					<img src="/img/logo.svg" class="logo">
				</a>


				<ul class="navbar-nav">
					<li class="nav-item ml-5 "><a href="/" <?php echo ($page_name == "home") ? "class='active'" : "" ?>> Home</a></li>
					<li class="nav-item ml-5"><a href="/services.php" <?php echo ($page_name == "services") ? "class='active'" : "" ?>>Services</a></li>
					<li class="nav-item ml-5"><a href="/about-us.php" <?php echo ($page_name == "about-us") ? "class='active'" : "" ?>>About Us</a></li>
					<li class="nav-item ml-5"><a href="/candidate-section.php" <?php echo ($page_name == "candidate-section") ? "class='active'" : "" ?>>Candidate Section</a></li>
					<li class="nav-item ml-5"><a href="/ethical-code.php" <?php echo ($page_name == "ethical-code") ? "class='active'" : "" ?>>Ethical Code</a></li>
					<li class="nav-item ml-5"><a href="/contact.php" <?php echo ($page_name == "contact") ? "class='active'" : "" ?>>Contact</a></li>
				</ul>
			</div>
			<!-- Mobile navigation -->
			<div class="topnav d-lg-none sticky-top">
				<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<svg class="mt-2" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>
				</a>
				<a href="/index.php"><img class="logo-center" src="/img/logo.svg" ></a>
				<!-- Navigation links (hidden by default) -->
				<div id="myLinks">
					<a href="/">Home</a>
					<a href="/services.php">Services</a>
					<a href="/about-us.php">About Us</a>
					<a href="/candidate-section.php">Candidate Section</a>
					<a href="/ethical-code.php">Ethical Code</a>
					<a class="pb-3" href="/contact.php">Contact</a>
				</div>
			
		 	 </div>
		</nav>
	
    </header>

    <?php if( $page_name == "services" || $page_name == "cookies-and-gdpr" || $page_name == "privacy-policy" || $page_name == "about-us" || $page_name == "candidate-section" || $page_name == "ethical-code" ) { ?>

        <a class="tlacidloo-jedna" onclick="window.location.href='https://' + window.location.hostname + '/#section-client'">For Client</a>
        <a class="tlacidloo-dva" onclick="window.location.href='https://' + window.location.hostname + '/#section-candidate'">For Candidate</a>

    <?php } ?>
	
	
    <main>
