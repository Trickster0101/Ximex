<?php
	include '../php/database.php';
?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="images/UPEAST/UPEAST LOGO vertical copy2.png" />
	<!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/admin-website-panel.css?version=70" />
  <!-- Header Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/admin-basic.css?version=55" />
	<link rel='stylesheet' type='text/css' href='../css/Styles Php/basic.php?version=55' />
	<!-- Company Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/company.css?version=54" />
	<!-- Services Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/services.css?version=54" />
	<!-- News and Events Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/newsandevents.css?version=54" />
	<!-- Client List Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/clients.css?version=53" />
	<!-- Contact Us Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/contact-us.css?version=54" />
	<!-- Footer Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/footer.css?version=54" />

	<script src="js/jquery-3.1.1.min.js"></script>


	<!--
	<script src="js/slideshow.js"></script>
	-->
</head>
<body onLoad="showSlides(slideIndex);">

	<!-- Header Sidebar -->
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<form action="php/upload.php" method="post" enctype="multipart/form-data">
			<ul class="ul-list">
				<li><p style="color: white">Logo Image</p></li>
				<li>
					<label class="sidenav-buttons">
					    <input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
					     Change Logo
					</label>
				</li>
				<li>
					<label class="sidenav-buttons">
					    <input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
					     Upload Logo
					</label>
				</li>
				<li>
					<label class="save-publish">
					    <input class="save-button" type="submit" name="submit">
					     Save and Publish
					</label>
				</li>
			</ul>
		</form>
	</div>
	<!-- End of Header Sidebar -->

  <div id="body-holder" class="body-holder">
		<!-- Parallax Header -->
		<div id="top-home" class="row parallax-container">
			<!-- Php code to fetch the header values -->
			<?php include '../php/Header Php/fetch-header-background.php'; ?>
			<?php include '../php/Header Php/fetch-header-logo.php'; ?>
			<?php include '../php/Header Php/fetch-header-values.php'; ?>
			<!----------------------------------------->
		  <div class="parallax-container" style="background-image: url('../<?php echo $header_background_path ?>')">
				<header class="col-12 col-m-12 header-logo">
					<img class="edit-button" src="../images/edit.png" onclick="openNav()" /><a href="http://www.upeast.com/"><img class="header-logo-image" src="../<?php echo $header_logo_path ?>" /></a>
					<a href="login-index.php" class="LogInButton"><span><b>Log In</b></span></a>

					<div class="row header-logo">
						<div class="row header-logo">
							<div class="col-12 col-m-12 header-caption">
								<h2><?php echo $header_title ?></h2>
								<p style="text-align"><?php echo $header_sub_title ?></p>
							</div>
						</div>
					</div>
				</header>
			</div>
		</div>
		<!-- End of Parallax Header -->

			<!--Bottom Navigation Bar -->
			<nav id="nav_bar" class="bottom-nav">
				<ul class="topnav" id="myTopnav">
					<li><a id="home" class="tablinks"><b>HOME</b></a></li>
					<li><a id="aboutus" class="tablinks"><b>COMPANY</b></a></li>
					<li><a id="services" class="tablinks"><b>SERVICES</b></a></li>
					<li><a id="news_event" class="tablinks"><b>NEWS AND EVENTS</b></a></li>
					<li><a id="clients" class="tablinks"><b>CLIENTS</b></a></li>
					<li><a id="contact_us" class="tablinks"><b>CONTACT US</b></a></li>
					<li class="icon">
						<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
					</li>
				</ul>
			</nav>
			<!-- End of bottom Navigation Bar -->

		<div id="our-company" class="row company" >
			<div id="heading-company" class="col-12 col-m-12 heading-company">
				<h1>WHO WE ARE</h1>
			</div>

			<div class="row">
				<div  class="col-12 col-m-12 body-company">
					<h1 id="headerDiv">UPEAST Security Agency, Inc.</h1>
					<p style="text-align: center">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
	        <br>
				</div>
			</div>

	    <div class="row mv">
	      <div class="col-6 col-m-6 mission">
	        <h1>MISSION</h1>
	  			<img id="myBtn" src="../images/mv.png" onclick="openMissionModal()"/>
	      </div>

	      <div class="col-6 col-m-6 vision">
	        <h1>VISION</h1>
	  			<img id="myBtn" class="mv-hover" src="../images/mv.png" onclick="openVisionModal()"/>
	      </div>



	      <!-- The Mission Modal -->
	      <div id="myMissionModal" class="modal">
	        <!-- Mission Modal content -->
	        <div class="modal-content">
	          <div id="modal-header" class="modal-header">
	            <span class="close" onclick="closeModal()">&times;</span>
	            <h2>Company Mission</h2>
	          </div>
	          <div class="modal-body" style="padding: 5%;">
	            <p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
	          </div>
	        </div>
	      </div>

				<!-- The Vision Modal -->
	      <div id="myVisionModal" class="modal">
	        <!-- Vision Modal content -->
	        <div class="modal-content">
	          <div class="modal-header">
	            <span class="close" onclick="closeModal()">&times;</span>
	            <h2>Company Vision</h2>
	          </div>
	          <div class="modal-body" style="padding: 5%;">
	            <p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
	          </div>
	        </div>
	      </div>
		  </div>
	  </div>

		<!-- Start of Services -->
		<div id="our-services" class="row services" >
			<div id="heading-services" class="col-12 col-m-12 heading-services">
				<h1>WHAT WE DO</h1>
			</div>

			<div id="slideshow" class="row body-services">
				<div class="col-6 col-m-6 list-services">
					<h2 id="servicesDiv">WE OFFER THE FOLLOWING SERVICES:</h2>
					<ul>
				    <li><h3>SECURITY</h3></li>
				    <li><h3>SECURITY</h3></li>
				    <li><h3>SECURITY</h3></li>
				  </ul>
				</div>

				<div class="col-6 col-m-6 list-services">
					<div class="mySlides fade">
			      <img src="../images/secu_1.jpg" style="width:100%">
			    </div>

					<div class="mySlides fade">
			      <img src="../images/secu_2.jpg" style="width:100%">
			    </div>

					<div class="mySlides fade">
			      <img src="../images/secu_3.jpg" style="width:100%">
			    </div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			    <a class="next" onclick="plusSlides(1)">&#10095;</a>

					<div class="caption-container">
			      <p id="caption"></p>
			    </div>

					<div class="column">
			      <img class="demo cursor" src="../images/secu_1.jpg" style="width:100%" onclick="currentSlide(1)">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="../images/secu_2.jpg" style="width:100%" onclick="currentSlide(2)">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="../images/secu_3.jpg" style="width:100%" onclick="currentSlide(3)">
			    </div>
				</div>
			</div>
		</div>
		<!-- End of Services -->

		<!-- News and Events -->
		<div id="news-events" class="row news-events" >
			<div id="heading-news-events" class="col-12 col-m-12 heading-news-events">
				<h1>LATEST UPDATES</h1>
			</div>
			<div class="row news-events-body">
				<div class="col-12 col-m-12 articles">
					<h2 id="neDiv">Sample News and Events</h2>
					<br>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<br>
				<br>
				<div class="col-12 col-m-12 articles">
					<h2>Sample News and Events</h2>
					<br>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<br>
				<br>
				<div class="col-12 col-m-12 articles">
					<h2>Sample News and Events</h2>
					<br>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<br>
				<br>
				<div class="col-12 col-m-12 articles">
					<h2>Sample News and Events</h2>
					<br>
					<br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
		<!-- End of News and Events -->

		<!-- Clients -->
		<div id="client-list" class="row client-list" >
			<div id="heading-client-list" class="col-12 col-m-12 heading-client-list">
				<h1>CLIENTS</h1>
			</div>

			<div class="row clients-body-row">
				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/XDE LOGISTICS - orange  transparent SM.png">
					<div class="div-overlay">
						<div class="text">Xde Logistics</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/festivalalabang.jpg">
					<div class="div-overlay">
						<div class="text">Festival Supermall Inc.</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/foratagaytaymall.jpg">
					<div class="div-overlay">
						<div class="text">Fora Tagaytay Mall</div>
					</div>
				</div>
			</div>

			<div class="row clients-body-row">
				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/alamoresorts.png">
					<div class="div-overlay">
						<div class="text">Alamo Transport and Leasing Inc.</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/bfresorts.png">
					<div class="div-overlay">
						<div class="text">BF Resort Homeowners Association Inc. Village</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/lancastercavite.jpg">
					<div class="div-overlay">
						<div class="text">Lancaster New City</div>
					</div>
				</div>
			</div>

			<div class="row clients-body-row">
				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/bellefortestates.jpg">
					<div class="div-overlay">
						<div class="text">Bellefort Estates</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/XANTARA DEV -transparent.png">
					<div class="div-overlay">
						<div class="text">Xantara Dev Corporation</div>
					</div>
				</div>

				<div class="col-4 col-m-4 clients-body">
					<img class="image" src="../images/Clients/lancastercavite.jpg">
					<div class="div-overlay">
						<div class="text">Lancaster New City</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Clients -->

		<!-- Contact Us -->
		<div id="contacts" class="row contacts" >
			<div id="heading-contacts" class="col-12 col-m-12 heading-contacts">
				<h1>GET IN TOUCH WITH US</h1>
			</div>

			<div class="row">
				<div  class="col-12 col-m-12 body-contact">
					<h2>UPEAST Security Agency, Inc.</h2>
					<br>
					<p>Send us your concerns so we can provide you with excellent solutions.</p>
				</div>
			</div>

			<div class="row contact-body-container">
				<div  class="col-12 col-m-12 contact-container">
					<div class="container-head">
						<h2 onclick="openContainer1()">SEND US AN INQUIRY</h2>
					</div>

					<div class="container-bodies">
						<h2 onclick="openContainer2()">LOCATE US</h2>
					</div>
				</div>
			</div>

			<!-- The 1st Container Modal -->
			<div id="first-container-modal" class="modal-container">
				<div class="modal-content-container">
					<div id="modal-header" class="modal-header-container">
						<span class="container-close" onclick="closeContainers()">&times;</span>
						<h2>Contact Form</h2>
					</div>
					<div class="modal-body-container">
						<form action="">
							<label>
								<b>Name</b>
								<input type="text" name="firstname" required>
							</label>
							<label>
								<b>E-mail</b>
								<input type="email" name="email" required>
							</label>
							<label>
								<b>Message</b>
								<br>
								<textarea rows="10" cols="40" required></textarea>
							</label>
							<input type="submit">
						</form>
					</div>
				</div>
			</div>

			<!-- The 2nd Container Modal -->
			<div id="second-container-modal" class="modal-container">
				<div class="modal-content-container">
					<div id="modal-header" class="modal-header-container">
						<span class="container-close" onclick="closeContainers()">&times;</span>
						<h2>LOCATION AND CONTACTS</h2>
					</div>
					<div class="modal-body-container">
						<h2>LOCATION: </h2>
						<br>
						<p>Lorem ipsum dolor sit amet</p>
						<br>
						<h2>CONTACTS:</h2>
						<br>
						<p>123-456-789</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Contact Us -->

		<!-- Footer -->
		<footer class="row footer">
			<div class="col-4 col-m-4 footer-body">
				<b>Opening Hours</b>
				<br>
				<br>
				<b>Monday - Friday: 6:00 a.m - 6:00 p.m</b>
			</div>

			<div class="col-4 col-m-4 footer-body-middle">
				<b>UPEAST SECURITY AGENCY, INC. © Copyright 2016</b>
			</div>

			<div class="col-4 col-m-4 footer-body">
				<div class="row">
					<div class="col-12 col-m-12 mother">
						<a href="http://www.xde247.com.ph/"><img src="../images/XIMEX LOGO-WHITE ON ORANGE-lowres.jpg"></a>
					</div>
				</div>
				<div class="row child">
					<div class="col-6 col-m-6">
						<a href="http://www.xde247.com.ph/"><img src="../images/XDE LOGISTICS - orange  transparent SM.png"></a>
					</div>
					<div class="col-6 col-m-6">
						<a href="http://budgetbotika.com/"><img src="../images/budgetbotika.png"></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
	</div>
	<script src="../js/scroll.js"></script>
	<script src="js/push-sidebar.js"></script>
	<script src="../js/mvModal.js"></script>
	<script src="../js/slideshow.js"></script>
	<script src="../js/basic.js"></script>
	<script src="../js/contactusModal.js"></script>

</body>

</html>
