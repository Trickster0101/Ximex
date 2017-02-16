<?php
$target_dir = "../Uploads/News and Weather Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'mydb';

  $conn = new mysqli($server, $username, $password, $dbname);

  $path = "Uploads/Header/" . basename( $_FILES["fileToUpload"]["name"]);

  $path =  mysqli_real_escape_string($conn, $path);

  $select = "Update header_logo set is_active = 0 where is_active = 1;";
  $select .= "Update header_logo set is_active = 1 where header_logo_path =  '$path'";

  if(!$conn->multi_query($select))
  {
    echo $path;
    echo "Path not saved";
  }
  else
  {
    echo $path;
    echo "Path saved";
    header("location: ../admin/admin-index-2.php");
  }
}

error_reporting(0);


?>
