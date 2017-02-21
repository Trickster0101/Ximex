<?php
  include '../../php/database.php';
  $select = "select * from header_background";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $header_background_path = $row['header_background_path'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$row[header_background_path]' width='300' height='200'>";
          echo "<button class='img-btn'>APPLY</edit>";
          echo "<button class='img-btn'>REMOVE</edit>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
