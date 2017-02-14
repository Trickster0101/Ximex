<?php
  include 'php/database.php';
  include 'php/fetchData.php';
?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Header Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/basic.css" />
	<!-- Company Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/company.css" />
	<!-- Services Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/services.css" />
	<!-- News and Events Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/newsandevents.css" />
	<!-- Contact Us Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/contact-us.css" />
	<!-- Footer Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/footer.css" />

	<script src="js/jquery-3.1.1.min.js"></script>

</head>
<body onLoad="showSlides(slideIndex);">
	<!-- Parallax Header -->
	<div id="top-home" class="row parallax-container">
	  <div class="parallax-container" style="background-image: url('images/building_parallax6.jpg')">
			<header class="col-12 col-m-12 header-logo">
				<a href="http://www.upeast.com/"><img src="../<?php echo $paragraph ?>" /></a>
				<a href="login-index.php" class="LogInButton"><span><b>Log In</b></span></a>

				<div class="row header-logo">
					<div class="row header-logo">
						<div class="col-12 col-m-12 header-caption">
							<h2>UPEAST Security Agency</h2>
							<p style="text-align">"Where your security is our TOP priority"</p>
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
        <h1>MISSION</h1>
  			<img id="myBtn" src="images/mv.png" onclick="openMissionModal()"/>
      </div>

      <div class="col-6 col-m-6 vision">
        <h1>VISION</h1>
  			<img id="myBtn" class="mv-hover" src="images/mv.png" onclick="openVisionModal()"/>
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
		      <img src="images/secu_1.jpg" style="width:100%">
		    </div>

				<div class="mySlides fade">
		      <img src="images/secu_2.jpg" style="width:100%">
		    </div>

				<div class="mySlides fade">
		      <img src="images/secu_3.jpg" style="width:100%">
		    </div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>

				<div class="caption-container">
		      <p id="caption"></p>
		    </div>

				<div class="column">
		      <img class="demo cursor" src="images/secu_1.jpg" style="width:100%" onclick="currentSlide(1)">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/secu_2.jpg" style="width:100%" onclick="currentSlide(2)">
		    </div>
		    <div class="column">
		      <img class="demo cursor" src="images/secu_3.jpg" style="width:100%" onclick="currentSlide(3)">
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
					<a href="http://www.xde247.com.ph/"><img src="images/XIMEX LOGO-WHITE ON ORANGE-lowres.jpg"></a>
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
	<!--	<script src="js/animation.js"></script> -->
	<script src="js/mvModal.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/basic.js"></script>
	<script src="js/contactusModal.js"></script>

</body>

</html>