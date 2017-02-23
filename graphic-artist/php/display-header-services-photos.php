<?php
  include '../php/database.php';
  $select = "select * from services_pictures";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $services_path = $row['services_path'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$row[services_path]' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
  else {
    echo "Nothing saved";
  }
?>
