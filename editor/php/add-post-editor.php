<?php
  if(isset($_POST['submit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'upeast';

    $conn = new mysqli($server, $username, $password, $dbname);

    $title = $_POST['post-title'];
    $content = $_POST['post_content'];
    
    $query = "INSERT INTO unapproved_latest_updates(updates_title, updates_content) VALUES('$title', '$content');";
    $query .= "INSERT INTO logfiles(log_datetime, log_name, log_description) VALUES(Now(), 'Editor', 'Added post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../post-editor/post-editor-index.html");
    }
  }
?>
