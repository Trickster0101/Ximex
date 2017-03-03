<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'upeast';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from latest_updates where updates_id = $_GET[updates_id]";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $updates_id = $row['updates_id'];
      $title = $row['updates_header'];
      $content = $row['updates_content'];
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
