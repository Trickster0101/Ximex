<?php
  if(isset($_POST['submitHeaderCaption']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'upeast';

    $conn = new mysqli($server, $username, $password, $dbname);

    $headerTitle = $_POST['headerTitle'];
    $headerTitleFontSize = $_POST['headerTitleFontSize'];
    $headerSubTitle = $_POST['headerSubTitle'];
    $headerSubTitleFontSize = $_POST['headerSubTitleFontSize'];
    $headerTitleColor = $_POST['headerTitleColor'];
    $headerSubTitleColor = $_POST['headerSubTitleColor'];
    $header_position = $_POST['position'];

    $headerTitle = mysqli_real_escape_string($conn, $headerTitle);
    $headerSubTitle = mysqli_real_escape_string($conn, $headerSubTitle);
    $headerSubTitle = mysqli_real_escape_string($conn, $headerSubTitle);

    $query = "Update header set is_active = 0 where is_active = 1;";
    $query .= "Insert into header(header_title, header_sub_title, header_position, header_title_font_size, header_sub_title_font_size, header_title_color, header_sub_title_color, is_active)
    VALUES ('$headerTitle', '$headerSubTitle', '$header_position', '$headerTitleFontSize', '$headerSubTitleFontSize', '$headerTitleColor', '$headerSubTitleColor', 1)";
    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../../admin/admin-index.php");
      exit();
    }
  }
?>
