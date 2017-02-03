<?php
  $select = "select * from example";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $paragraph = $row['paragraph_body'];
      echo $paragraph;
    }
  }
?>
