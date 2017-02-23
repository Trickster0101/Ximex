<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/editor-panel.css?version=10" />
  <!-- News and Events Style CSS -->
  <link rel="stylesheet" type="text/css" href="../../css/newsandevents.css?version=53" />

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">
    <nav id="mySidenav" class="sidenav">
			<div class="row">
	      <div class="col-12 col-m-12">
	        <h2>Control Panel</h2>
	      </div>
	    </div>

			<ul class="topnav">
				<li><a href="add-latest-updates.html" class="borderTop">Add Latest Updates</a></li>
				<li><a href="">Edit Updates</a></li>
				<li><a href="">Remove Updates</a></li>
			</ul>
    </nav>

		<!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

    <div id="news-events" class="row news-events" >
  		<div id="heading-news-events" class="col-12 col-m-12 heading-news-events">
  			<h1>LATEST UPDATES</h1>
  		</div>
  		<div class="row news-events-body">
  			<?php include '../php/display-latest-updates.php'; ?>
  		</div>
  	</div>
  	<!-- End of News and Events -->
  </div>
</body>

</html>
