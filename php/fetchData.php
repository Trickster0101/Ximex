<?php
  $select = "select * from example where table_id = 4";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $paragraph = $row['uploaded_images'];
      echo $paragraph;
    }
  }
?>
