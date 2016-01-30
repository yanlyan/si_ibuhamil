<div class="container">
<div id="index-content" class="grid" style="margin-top:25px;">
  <div class="row">
      <div class="span4">
          <nav align="left" class="sidebar">
              <ul>
                  <li class="title">Menu Utama:</li>
                  <li class="active"><a data-ctrl="info_penyakit" data-view="anemia_pada_ibu_hamil" href="#anemia_pada_ibu_hamil"><i class="icon-user on-left"></i>Anemia Pada Ibu Hamil</a></li>
                  <li class="stick bg-red"><a  class="dropdown-toggle"  href="#resiko_anemia"><i class="icon-newspaper on-left"></i>Resiko Anemia</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="selama_kehamilan" href="#selama_kehamilan">Selama Kehamilan</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="saat_nifas" href="#saat_nifas">Saat Nifas</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="saat_persalinan" href="#saat_persalinan">Saat Persalinan</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="fetus_neonatus" href="#fetus_neonatus">Terjadi Fetus & Neonatus</a></li>
                    </ul>
                  </li>
                  <li class="stick bg-yellow"><a class="dropdown-toggle" href="#faktor_anemia"><i class="icon-exit on-left"></i>Faktor Anemia</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="info_penyakit" data-view="faktor_anemia" data-param="faktor_umur" href="#faktor_umur">Umur Ibu</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="faktor_anemia" data-param="faktor_paritas" href="#faktor_paritas">Paritas</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="faktor_anemia" data-param="faktor_usia_kehamilan" href="#faktor_usia_kehamilan">Usia Kehamilan</a></li>
                    </ul>
                  </li>
                  <li class="stick bg-emerald"><a data-ctrl="info_penyakit" data-view="penyebab_anemia" href="#penyebab_anemia"><i class="icon-newspaper on-left"></i>Penyebab Anemia</a></li>
                  <li class="stick bg-green"><a class="dropdown-toggle" href="#pencegahan_penanganan"><i class="icon-exit on-left"></i>Pencegahan & Penanganan Anemia</a>
                    <ul class="dropdown-menu" data-role="dropdown">
                      <li><a data-ctrl="info_penyakit" data-view="pencegahan_penanganan" href="#pencegahan_anemia">Pencagahan Anemia</a></li>
                      <li><a data-ctrl="info_penyakit" data-view="penanganan_anemia" href="#penanganan_anemia">Penanganan Anemia</a></li>
                    </ul>
                  </li>
              </ul>
          </nav>
      </div>
      
      <div class="span8 bordered">
          <center><div id="loading" class="fa icon-spin fa-spin fa-5x"></div></center>
          <div id="panel-content">
            <!-- <p>Tanda-tanda</p>
            <p class="readable-text text-home">
              Keluhan lemah, kulit pucat, sementara tensi masih dalam batas normal, pucat pada membran mukosa, dan konjungtiva oleh karena kurangnya sel darah merah pada pembuluh darah kapiler serta pucat pada kuku dan jari tangan (Saifuddin A.B, 2006, hal.282).
            </p> -->
          </div>
          
      </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    loading(true);
    $.ajax({
      url     : "<?php echo site_url(); ?>/main/info_penyakit/anemia_pada_ibu_hamil",
      type    : "post",
      success : function(data){
        $("#panel-content").empty();
        loading(false);
        $("#panel-content").html(data);
      },
    });
  });
</script>
