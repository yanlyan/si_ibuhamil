<div class="container">
<div id="index-content" class="grid" style="margin-top:25px;">
  <div class="row">
      <div class="span4">
          <nav align="left" class="sidebar">
              <ul>
                  <li class="title">Menu Utama:</li>
                  <li class="stick bg-red"><a  class="dropdown-toggle"  href="#kebutuhan_gizi"><i class="icon-newspaper on-left"></i>Trisemester I</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_kalori" href="#sem1_kalori">Kalori</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_protein" href="#sem1_protein">Protein</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_vitamin" href="#sem1_vitamin">Vitamin dan Mineral</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_serat" href="#sem1_serat">Serat</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_air" href="#sem1_air">Air</a></li>
                    </ul>
                  </li>
                  <li class="stick bg-yellow"><a class="dropdown-toggle" href="#kebutuhan_gizi"><i class="icon-exit on-left"></i>Trisemester II</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem2_kalori" href="#sem2_kalori">Kalori</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem2_protein" href="#sem2_protein">Protein</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem2_vitamin" href="#sem2_vitamin">Vitamin dan Mineral</a></li>
                    </ul>
                  </li>
                  <li class="stick bg-green"><a class="dropdown-toggle" href="#pencegahan_penanganan"><i class="icon-exit on-left"></i>Trisemester III</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" href="#pencegahan_anemia">Pencagahan Anemia</a></li>
                      <li><a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" href="#penanganan_anemia">Penanganan Anemia</a></li>
                    </ul>
                  </li>
                  <li class="stick bg-lightGreen">
                    <a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" class="dropdown-toggle" href="#kebutuhan_gizi"><i class="icon-exit on-left"></i>Angka Kecukupan Gizi Ibu Hamil</a>
                  </li>
                  <li class="stick bg-magenta">
                    <a data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" class="dropdown-toggle" href="#kebutuhan_gizi"><i class="icon-exit on-left"></i>Faktor yang Mempengaruhi Status Gizi Ibu Hamil</a>
                  </li>
              </ul>
          </nav>
      </div>
      
      <div class="span8 bordered">
          <center><div id="loading" class="fa icon-spin fa-spin fa-5x"></div></center>
          <div id="panel-content">
            <!-- <p>Tanda-tanda</p> -->            
          </div>
          
      </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    loading(true);
    $.ajax({
      url     : "<?php echo site_url(); ?>/main/kebutuhan_gizi/info",
      type    : "post",
      success : function(data){
        $("#panel-content").empty();
        loading(false);
        $("#panel-content").html(data);
      },
    });
  });
</script>
