<?php
  include '../php/database.php';
  $select = "select * from header_logo";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $header_background_path = $row['header_logo_path'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$row[header_logo_path]' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
