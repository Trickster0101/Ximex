<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'upeast';

  $conn = new mysqli($server, $username, $password, $dbname);

  $ref_no = $_GET['updates_id'];

  $query = "Update latest_updates set datetime_log = NOW(), is_approved = 1, is_active = 1 where updates_id = '$ref_no';";
  $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'Manager', 'Approved post')";

  if(!$conn->multi_query($query))
  {
    echo "Insert and Update function unsuccessful" . mysqli_error($conn);
  }
  else {
    header("location: ../manage-post/view-current-post.php");
  }

?>
