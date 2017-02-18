<?php

?>
<!-- Header Sidebar -->
<div id="changeBackgroundSidenav" class="sidenav">
  <div class="row">
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="backbtn" onclick="changeHeaderBackgroundBack()">&#10094;</a>
    </div>
    <div class="col-6 col-m-6">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
  </div>

  <form action="uploadHeaderBackground.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="color: white">Background Image</p></li>
      <li>
        <label class="sidenav-buttons">
            <input class="upload-class" type="file" name="fileToUpload" id="fileToUpload" />
             Choose Background
        </label>
      </li>
      <li>
        <label class="save-publish">
            <input class="save-button" type="submit" name="submitHeaderBackground">
             Save and Publish
        </label>
      </li>
    </ul>
  </form>
</div>
<!-- End of Header Sidebar -->
