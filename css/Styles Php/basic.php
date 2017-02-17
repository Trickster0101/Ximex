<?php
  include '../../php/database.php';
  include '../../php/Header Php/fetch-header-values.php';

  header("Content-type: text/css; charset: UTF-8");
?>

.header-caption h2{
  font-size: <?php echo $header_title_font_size; ?>px;
}

.header-caption p {
  font-size: <?php echo $header_sub_title_font_size; ?>px;
}

.header-logo-image{
  height: <?php echo $header_logo_size; ?>%;
}
