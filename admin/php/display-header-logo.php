<?php
  include '../../php/database.php';
  $select = "select * from header_logo";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $header_logo_path = $row['header_logo_path'];
      $header_logo_size = $row['logo_size'];

      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$row[header_logo_path]' width='300' height='200'>";
          echo "<button class='img-btn'>APPLY</edit>";
          echo "<button class='img-btn'>REMOVE</edit>";
        echo "</div>";
      echo"</div>";
    }
  }
  else {
    echo "There is no record";
  }
?>
