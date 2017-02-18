<?php
  include '../php/Header Php/fetch-header-values.php';
?>
<!-- Header Sidebar -->
<div id="changeHeaderCaption" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <form action="../php/Header Php/update-header-values.php" method="post" enctype="multipart/form-data">
    <ul class="ul-list">
      <li><p style="color: white">Header</p></li>
      <li>
        <label class="sidenav-buttons">Header Title</label>
        <input class="inputs" type="text" value="<?php echo $header_title ?>">
      </li>
      <li>
        <label class="sidenav-buttons">Edit Header Sub-Title</label>
        <input class="inputs" type="text" value="<?php echo $header_sub_title ?>">
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
