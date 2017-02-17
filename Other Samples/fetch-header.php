<?php
  $select = "select * from header where is_active = 1;";
  $select .= "select * from header_background where is_active = 1;";
  $select .= "select * from header_logo where is_active = 1";

  if(mysqli_multi_query($conn, $select))
  {
    //Header
    $header_title = $row['header_title'];
    $header_sub_title = $row['header_sub_title'];
    $header_title_font_size = $row['header_title_font_size'];
    $header_logo_size = $row['header_logo_size'];
    $header_sub_title_font_size = $row['header_sub_title_font_size'];

    //Header Background
    $header_background_path = $row['header_background_path'];

    //Header Logo
    $header_logo_path = $row['header_logo_path'];
  }
  else
  {
    echo "Something went wrong. Contact the administrator for assistance.";
  }
?>
