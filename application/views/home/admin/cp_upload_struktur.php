<div class="card-panel card-2">
  <form id="update_struktur" action="<?php echo siteUrl(); ?>main/update_structur" method="post" enctype="multipart/form-data">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="struktur_img" accept="image/*" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="title_img">
      </div>
    </div>  
    <div class="row"> 
      <button id="btn_update_struktur" type="submit" class="col s12 waves-effect waves-green btn center">Upload</button>
    </div>
  </form> 
</div>