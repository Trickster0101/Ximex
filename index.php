<?php
	require 'php/database.php';
?>
<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Header Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/basic.css?version=340" />
	<link rel='stylesheet' type='text/css' href='css/Styles Php/basic.php?version=8440' />
	<!-- Company Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/company.css?version=103.1" />
	<!-- Services Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/services.css?version=103" />
	<!-- News and Events Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/newsandevents.css?version=103" />
	<!-- Client List Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/clients.css?version=103" />
	<!-- Contact Us Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/contact-us.css?version=103" />
	<!-- Footer Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/footer.css?version=103" />

	<script src="js/jquery-3.1.1.min.js"></script>

</head>
<body onLoad="showSlides(slideIndex);">
	<!-- Parallax Header -->
	<header id="top-home" class="row parallax-container">
		<!-- Php code to fetch the header values -->
		<?php include 'php/Header Php/fetch-header-background.php'; ?>
		<?php include 'php/Header Php/fetch-header-logo.php'; ?>
		<?php include 'php/Header Php/fetch-header-values.php'; ?>
		<!----------------------------------------->

	  <div class="parallax-container" style="background-image: url('<?php echo $header_background_path ?>')">
			<div class="col-12 col-m-12 header-logo">
				<a href="login-index.html" class="LogInButton"><span><b>Log In</b></span></a>

				<div class="row header-logo">
					<div class="col-12 col-m-12 header-caption">
						<div class="col-5 col-m-5 header-logo-image">
							<a href="http://www.upeast.com/"><img  src="../<?php echo $header_logo_path ?>" /></a>
						</div>
						<div class="topLeft">
							<h2><?php echo $header_title ?></h2>
							<p style="text-align"><?php echo $header_sub_title ?></p>
						</div>
				</div>
			</div>
		</div>
	</header>
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
				<br>
				<p style="text-align: left">
					Established on November 2010 to create a force that caters to providing quality security services to various installations
					and business enterprises to help them pursue their corporate objectives free from security threats and concerns as well as
					provide a top-of-the-line allied security services in the field of investigation, protective service detail, personal security
					investigation, watchman, security training and other related law enforcement programs.
				</p>
				<br>
				<p style="text-align: left">
					In consonance with the Philippine Government’s vision of creating a world-class country where local and foreign business are
					encouraged and to invest and established their business firm in the country, this will be the Agency that will provide
					cutting-edge security services need by any business enterprise or government entity.
				</p>
				<br>
				<p style="text-align: left">
					The safety and protection of life and property is the main concern of all where in the private or public sector, making
					security preparedness a universal concern.  Needless to state, even government law enforcement agencies can hardly cope
					with the criminal activities occurring in the society.
				</p>
        <br>
			</div>
		</div>

    <div class="row mv">
      <div class="col-6 col-m-6 mission">
  			<img id="myBtn" src="Uploads/Mission Logo/MV1.png" onclick="openMissionModal()"/>
      </div>

      <div class="col-6 col-m-6 vision">
  			<img id="myBtn" class="mv-hover" src="Uploads/Vision Logo/MV2.png" onclick="openVisionModal()"/>
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
							To help upgrade the level of security service by applying an integrated systems approach to make more possible
							specialization in the various components of enterprise security that shall translate to more effective
							protection and cost-effective benefits of clientele
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
            <h2>Company Vision and Principles</h2>
          </div>
          <div class="modal-body" style="padding: 5%;">
            <p>
							At its inception, Upeast Security Agency Incorporators had a vision of a security company that put service
							to clientele ahead of profit.  This Agency is a Manila based Security Company, a certified security service
							provider formed on a single goal: to provide the highest quality of service to our patrons. Honesty, integrity,
							and outstanding customer service are the foundation of this Company and the principles by which we serve our clients.
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
		      <img src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-25.jpg" style="width:100%">
		    </div>

				<div class="mySlides fade">
		      <img src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-91.jpg" style="width:100%">
		    </div>

				<div class="mySlides fade">
		      <img src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-122.jpg" style="width:100%">
		    </div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>

				<div class="caption-container">
		      <p id="caption"></p>
		    </div>

				<div class="column">
		      <img class="demo cursor" src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-25.jpg" style="width:100%" onclick="currentSlide(1)">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-91.jpg" style="width:100%" onclick="currentSlide(2)">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="Uploads/Services/UPEAST TRAINING(FESTIVAL MALL)12-15-16-122.jpg" style="width:100%" onclick="currentSlide(3)">
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
			<?php include 'php/Latest Updates/display-latest-updates.php'; ?>
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
				<img class="image" src="images/XDE LOGISTICS - orange  transparent SM.png">
				<div class="div-overlay">
					<div class="text">Xde Logistics</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/festivalalabang.jpg">
				<div class="div-overlay">
					<div class="text">Festival Supermall Inc.</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/foratagaytaymall.jpg">
				<div class="div-overlay">
					<div class="text">Fora Tagaytay Mall</div>
				</div>
			</div>
		</div>

		<div class="row clients-body-row">
			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/alamoresorts.png">
				<div class="div-overlay">
					<div class="text">Alamo Transport and Leasing Inc.</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/bfresorts.png">
				<div class="div-overlay">
					<div class="text">BF Resort Homeowners Association Inc. Village</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/lancastercavite.jpg">
				<div class="div-overlay">
					<div class="text">Lancaster New City</div>
				</div>
			</div>
		</div>

		<div class="row clients-body-row">
			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/bellefortestates.jpg">
				<div class="div-overlay">
					<div class="text">Bellefort Estates</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/XANTARA DEV -transparent.png">
				<div class="div-overlay">
					<div class="text">Xantara Dev Corporation</div>
				</div>
			</div>

			<div class="col-4 col-m-4 clients-body">
				<img class="image" src="images/Clients/lancastercavite.jpg">
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
					<a href="http://www.xde247.com.ph/"><img src="images/XIMEX LOGO-ORANGE ON WHITE lowres.jpg"></a>
				</div>
			</div>
			<div class="row child">
				<div class="col-6 col-m-6">
					<a href="http://www.xde247.com.ph/"><img src="images/XDE LOGISTICS - orange  transparent SM.png"></a>
				</div>
				<div class="col-6 col-m-6">
					<a href="http://budgetbotika.com/"><img src="images/budgetbotika.png"></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->

	<script src="js/scroll.js"></script>
	<script src="js/mvModal.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/basic.js"></script>
	<script src="js/contactusModal.js"></script>

</body>

</html>
