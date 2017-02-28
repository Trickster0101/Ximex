<?php
  if(isset($_POST['submitHeaderLogoSize']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'upeast';

    $conn = new mysqli($server, $username, $password, $dbname);

    $logosize = $_POST['logoSize'];

    $query = "UPDATE header_logo SET header_logo_size = '$logosize';";
    $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'ADMIN', 'Added header background picture')";
    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: admin-index.php");
      exit();
    }
  }
?>
