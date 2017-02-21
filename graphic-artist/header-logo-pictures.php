<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="css/graphic-artist-panel.css?version=10" />

  <link rel="stylesheet" type="text/css" href="css/graphics-artist-uploads.css?version=20" />

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
				<li><a href="header-background-pictures.php" class="borderTop">Header Background Pictures</a></li>
				<li><a href="header-logo-pictures.php">Header Logo Pictures</a></li>
      	<li><a href="content-pictures">Content Pictures</a></li>
			</ul>
    </nav>

		<!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

		<div class="row">
      <div class="col-12 col-m-12">
        <button><a href="header-panel-uploads-logo.php">Upload Logo Picture</button>
      </div>
    </div>

    <?php include 'php/display-header-logo-photos.php'; ?>

  </div>
</body>

</html>
