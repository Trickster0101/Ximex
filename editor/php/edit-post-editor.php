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

    $query = "INSERT INTO unapproved_latest_updates(updates_title, updates_content, ref_no) VALUES('$title', '$content', '$ref_no');";
    $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'Editor', 'Edited a post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../post-editor/post-editor-index.php");
    }
  }
?>
