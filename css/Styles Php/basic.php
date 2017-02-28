<?php
  include '../../php/database.php';
  include '../../php/Header Php/fetch-header-values.php';
  include '../../php/Header Php/fetch-header-logo.php';

  header("Content-type: text/css; charset: UTF-8");
?>

.header-caption h2{
  font-size: <?php echo $header_title_font_size; ?>px;
  color: <?php echo $header_title_color; ?>;
}

.header-caption p {
  font-size: <?php echo $header_sub_title_font_size; ?>px;
  color: <?php echo $header_sub_title_color; ?>;
}

.topLeft {
  <?php echo $header_position; ?>
}

@media only screen and (min-width: 600px) {
  .header-logo-image img{
    max-width: <?php echo $header_logo_size ?>%;
    left: 0;
    cursor: pointer;
    height: auto;
  }
}
@media only screen and (min-width: 768px) {
  .header-logo-image img{
    max-width: <?php echo $header_logo_size ?>%;
    left: 0;
    cursor: pointer;
    height: auto;
  }
}
