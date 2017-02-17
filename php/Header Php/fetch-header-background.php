<?php
  $select = "select * from header_background where is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $header_background_path = $row['header_background_path'];
    }
  }
?>
