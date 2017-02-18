<?php
  include '../php/Header Php/fetch-header-values.php';
?>
<!-- Header Sidebar -->
<div id="changeHeaderCaption" class="sidenav">
  <div class="row">
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="backbtn" onclick="changeHeaderCaptionBack()">&#10094;</a>
    </div>
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
  </div>

  <form action="../php/Header Php/update-header-values.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="color: white">Header</p></li>
      <li>
        <label class="sidenav-buttons">Header Title</label>
        <input class="inputs" type="text" name="headerTitle" value="<?php echo $header_title ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Header Title Font Size</label>
        <input class="inputs" type="number" name="headerTitleFontSize" value="<?php echo $header_title_font_size ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Edit Header Sub-Title</label>
        <input class="inputs" type="text" name="headerSubTitle" value="<?php echo $header_sub_title ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Header Title Font Size</label>
        <input class="inputs" type="number" name="headerSubTitleFontSize" value="<?php echo $header_sub_title_font_size ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Header Title Color</label>
        <input class="inputs" type="color" name="headerTitleColor" value="<?php echo $header_title_color ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Header Sub-Title Color</label>
        <input class="inputs" type="color" name="headerSubTitleColor" value="<?php echo $header_sub_title_color ?>">
      </li>
      <li>
        <label class="save-publish">
          <input class="save-button" type="submit" name="submitHeaderCaption">
          Save and Publish
        </label>
      </li>
    </ul>
  </form>
</div>
<!-- End of Header Sidebar -->
