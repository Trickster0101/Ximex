<?php
  if(isset($_POST['retrieve-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'upeast';

    $conn = new mysqli($server, $username, $password, $dbname);

    $ref_no = $_POST['ref_no'];

    $query = "Update latest_updates set is_active = 0 where updates_id = '$ref_no';";
    $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'Manager', 'Retrieved post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" . mysqli_error($conn);
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
