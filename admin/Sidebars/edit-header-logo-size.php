<?php
  include '../php/Header Php/fetch-header-logo.php';
?>
<!-- Header Sidebar -->
<div id="changeLogoSizeSidenav" class="sidenav">
  <div class="row">
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="backbtn" onclick="changeLogoSizeBack()">&#10094;</a>
    </div>
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
  </div>

  <form action="uploadHeaderLogoSize.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="color: white">Logo Image</p></li>
      <li>
        <label class="sidenav-buttons">
            Logo Size
            <br>
            <input class="upload-class" type="number" value="<?php echo $header_logo_size ?>" name="logoSize" />
        </label>
      </li>
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submitHeaderLogoSize">
             Save and Publish
        </label>
      </li>
    </ul>
  </form>
</div>
<!-- End of Header Sidebar -->
