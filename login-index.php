<?php
  include "php/database.php";
  include "php/login.php"
?>

<!DOCTYPE html>

<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>UpEast Security Agency</title>
	<link rel="icon"  type="image/png" href="images/UPEAST/UPEAST LOGO vertical copy2.png" />
  <!-- Log In CSS -->
  <link rel="stylesheet" type="text/css" href="css/login-css/login-index.css?version=51" />

	<script src="js/jquery-3.1.1.min.js"></script>
</head>

<body>
  <div class="row login-panel">
    <div class="row header-panel">
      <div class="col-12 col-m-12">
        <img src="images/UPEAST/UPEAST LOGO vertical copy2.png" />
      </div>
    </div>

    <div class="row body-panel">
      <div class="col-12 col-m-12">
        <form role="form" method="POST" action="login-index.php">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <input type="checkbox" checked="checked"> <label><b>Remember me</b></label>
          <button type="submit" name="Login"><b>LOG IN</b></button>

        </form>

      </div>
    </div>
  </div>
</body>

</html>
