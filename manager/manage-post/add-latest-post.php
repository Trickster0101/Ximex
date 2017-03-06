<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="../../../images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-panel.css?version=10" />
  <!-- News and Events Style CSS -->
  <link rel="stylesheet" type="text/css" href="../../css/newsandevents.css?version=53" />
	<!-- Form Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/manager-form.css?version=10" />

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
				<li><a href="view-current-post.php" class="borderTop">View Current Posts</a></li>
				<li><a href="view-pending-post.php">View Pending Posts</a></li>
				<li><a href="view-pending-editted-post.php">View Pending Editted Posts</a></li>
				<li><a href="add-latest-post.php">Add Post</a></li>
				<li><a href="view-archives.php">Archives</a></li>
				<li><a href="#">Log Out</a></li>
			</ul>
    </nav>

		<!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

		<form id="post-form" action="../php/add-post-manager.php" method="post">
			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Title Post</label>
					<input type="text" name="post-title" required>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<label class="label-style">Content Post</label>
					<br>
					<textarea class="textarea-style" rows="10" cols="110" name="post_content" required></textarea>
				</div>
			</div>

			<div class="row post-form">
				<div class="col-12 col-m-12">
					<input class="save-publish" type="submit" name="submit-post" value="Add Post">
				</div>
			</div>
		</form>
  </div>
</body>

</html>
