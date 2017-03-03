<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'upeast';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from latest_updates where is_active = 0 ORDER BY datetime_log DESC";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['updates_header'];
      $content = $row['updates_content'];

      echo "<div class='col-12 col-m-12 articles'>";
        echo "<h2>$row[updates_header]</h2>";
        echo "<br>";
        echo "<br>";
        echo "<p>";
          echo $row['updates_content'];
        echo "</p>";
        echo "<button><a href='../manage-post/retrieve-current-post.php?updates_id=$row[updates_id]'>RETRIEVE</a></button>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
