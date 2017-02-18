<?php
  $select = "select * from header_logo where is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $header_logo_path = $row['header_logo_path'];
      $header_logo_size = $row['logo_size'];
    }
  }
?>
