<?php
  if(isset($_POST['submit-edit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'upeast';

    $conn = new mysqli($server, $username, $password, $dbname);

    $ref_no = $_POST['ref_no'];
    $title = $_POST['post-edit-title'];
    $content = $_POST['post-edit-content'];

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $query = "Update latest_updates set updates_header = '$title', updates_content = '$content' where updates_id = '$ref_no';";
    $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'Manager', 'Updated post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" . mysqli_error($conn);
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
