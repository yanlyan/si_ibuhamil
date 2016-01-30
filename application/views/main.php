<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Anemia Pada Ibu Hamil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="<?php echo cssPath() ?>materialize.min.css" rel="stylesheet"> 
        <link href="<?php echo cssPath() ?>font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo cssPath() ?>materialdesignicons.min.css" rel="stylesheet">
        <link href="<?php echo cssPath() ?>jquery-ui.min.css" rel="stylesheet">

        <!-- CSS from froala -->
        <!-- Include Editor style. -->
          <link href="<?php echo cssPath() ?>froala_editor.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo cssPath() ?>froala_style.min.css" rel="stylesheet" type="text/css" />

          <!-- Include Editor Plugins style. -->
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/char_counter.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/code_view.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/colors.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/emoticons.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/file.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/fullscreen.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/image.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/image_manager.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/line_breaker.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/table.css">
          <link rel="stylesheet" href="<?php echo cssPath() ?>plugins/video.css">

          <!-- My custom css -->
        <link href="<?php echo cssPath() ?>style.css" rel="stylesheet"> 
        <!-- CSS JavaScript plugins -->   
        <script src="<?php echo jsPath() ?>jquery-1.11.1.min.js"></script>
        <script src="<?php echo jsPath() ?>jquery-ui.min.js"></script>
        <script src="<?php echo jsPath() ?>jquery.canvasjs.min.js"></script>        
        <script src="<?php echo jsPath() ?>canvasjs.min.js"></script>
        <!-- Load JavaScript Libraries -->
        <script src="<?php echo jsPath() ?>materialize.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="#" data-activates="menu-mobile" class="button-collapse top-nav waves-effect waves-teal circle hide-on-large-only">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <ul id="menu-mobile" class="side-nav fixed">
                <img class="logo" src="<?php echo imgPath(); ?>ultrasound.png">
                <div class="divider-line"></div>
                <li class="bold">
                    <a href="<?php echo siteUrl(); ?>" class="waves-effect waves-teal">Home</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Profil</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a class="waves-effect waves-teal" href="<?php echo siteUrl(); ?>main/profile">Stuktur Organisasi</a></li>
                                    <li><a class="waves-effect waves-teal" href="<?php echo siteUrl(); ?>main/profile/visi_misi">Visi & Misi</a></li>
                                    <li><a class="waves-effect waves-teal" href="<?php echo siteUrl(); ?>main/profile/strategi_kebijakan">Strategi & Kebijakan</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>                    
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Informasi Penyakit</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a data-ctrl="info_penyakit" data-view="anemia_pada_ibu_hamil" href="#anemia_pada_ibu_hamil" class="waves-effect waves-teal">Anemia Ibu Hamil</a>
                                    </li>
                                    <li class="no-padding">                    
                                        <ul class="collapsible collapsible-accordion">
                                            <li><a class="collapsible-header  waves-effect waves-teal">Resiko Anemia</a>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <div class="divider-line"></div>
                                                        <li><a class="waves-effect waves-teal" data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="selama_kehamilan" href="#selama_kehamilan">Selama Kehamilan</a></li>
                                                        <li><a class="waves-effect waves-teal" data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="saat_nifas" href="#saat_nifas">Saat Nifas</a></li>
                                                        <li><a class="waves-effect waves-teal" data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="saat_persalinan" href="#saat_persalinan">Saat Persalinan</a></li>
                                                        <li><a class="waves-effect waves-teal" data-ctrl="info_penyakit" data-view="resiko_anemia" data-param="fetus_neonatus" href="#fetus_neonatus">Terjadi Fetus & Neonatus</a></li>
                                                        <div class="divider-line"></div>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>                    
                                    </li>                
                                    <li>
                                        <a data-ctrl="info_penyakit" data-view="faktor_anemia" data-param="faktor_usia_kehamilan" href="#faktor_anemia" class="waves-effect waves-teal">Faktor Anemia</a>
                                    </li>                                    
                                    <li>
                                        <a data-ctrl="info_penyakit" data-view="penyebab_anemia" href="#penyebab_anemia" class="waves-effect waves-teal">Penyebab Anemia</a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-teal" data-ctrl="info_penyakit" data-view="pencegahan_penanganan" href="#pencegahan_anemia">Pencagahan Anemia</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>                    
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-teal">Kebutuhan Gizi</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="no-padding">
                                        <li>
                                            <a class="collapsible-header  waves-effect waves-teal" data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem1_kalori" href="#sem1_kalori">Trimester I</a>
                                        </li>                                        
                                    </li>
                                    <li class="no-padding">
                                        <li>
                                            <a class="collapsible-header  waves-effect waves-teal" data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem2_kalori" href="#sem2_kalori">Trimester II</a>
                                        </li>                                       
                                    </li>                                    
                                    <li class="no-padding">
                                        <a class="collapsible-header  waves-effect waves-teal" data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="sem3_gizi" class="dropdown-toggle" href="#sem3_gizi"><i class="icon-exit on-left"></i>Trimester III</a>
                                    </li>
                                    <li class="no-padding">
                                        <a class="collapsible-header  waves-effect waves-teal" data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="akg" class="dropdown-toggle" href="#AKG"><i class="icon-exit on-left"></i>Angka Kecukupan Gizi</a>
                                    </li>
                                    <li class="no-padding">
                                        <a class="collapsible-header  waves-effect waves-teal" data-ctrl="kebutuhan_gizi" data-view="kebutuhan_gizi" data-param="fak_budaya" href="#fak_budaya">Faktor Yang Mempengaruhi</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                    </ul>                    
                </li>
                <?php
                if ($this->session->userdata('logedin')) {
                ?>
                    <li class="bold">
                        <a href="<?php echo siteUrl(); ?>main/konsultasi" class="waves-effect waves-teal">Konsultasi</a>
                    </li>
                <?php
                }
                if($this->session->userdata('logedin') AND $this->session->userdata('is_admin')){
                ?>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-teal">Kontrol Panel</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="no-padding">
                                        <li>
                                            <a class="collapsible-header  waves-effect waves-teal" data-ctrl="cp_admin" data-view="cp_home" data-param="getHome" href="#cp_home">Home</a>
                                        </li>                                        
                                    </li>
                                    <li class="no-padding">
                                        <li>
                                            <a class="collapsible-header  waves-effect waves-teal" data-ctrl="cp_admin" data-view="cp_upload_struktur" data-param="" href="#cp_struktur">Struktur Organisasi</a>
                                        </li>                                       
                                    </li>                                    
                                    <li class="no-padding">
                                        <a class="collapsible-header  waves-effect waves-teal" data-ctrl="cp_admin" data-view="cp_info_penyakit" data-param="getInfoPenyakit" class="dropdown-toggle" href="#cp_infopenyakit"><i class="icon-exit on-left"></i>Informasi Penyakit</a>
                                    </li>
                                    <li class="no-padding">
                                        <a class="collapsible-header  waves-effect waves-teal" data-ctrl="cp_admin" data-view="cp_kebutuhan_gizi" data-param="getKebutuhanGizi" class="dropdown-toggle" href="#cp_kebutuhangizi"><i class="icon-exit on-left"></i>Kebutuhan Gizi</a>
                                    </li>                                                                       
                                </ul>
                            </div>
                        </li>
                    </ul>                    
                </li>
                <?php
                }
                ?>                
            </ul>
        </header>
        <main>            
            <div class="section no-pad-bot card-3" id="index-header">
                <div class="container">
                    <h1 class="header grey-text text-darken-5 lighten-3 bold">Sistem Informasi Anemia Pada Ibu Hamil</h1>                    
                    <div class="row center">
                        <?php
                        if (!$this->session->userdata('logedin')) {
                            ?>
                            <button class="btn" id="show-login">Login</button>
                        <?php } else {
                            ?>
                            <a href="<?php echo siteUrl() ?>main/logout" class="btn">Logout</a>
                            <?php
                        }
                        ?>
                    </div>
                </div>                
            </div>
            <div class="container" id="container-content">
                <div class="section">
                    <div class="row center" id="loading" style="margin-bottom: 125px; margin-top: 125px;">
                        <div class="preloader-wrapper big active">
                            <div class="spinner-layer spinner-blue">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="spinner-layer spinner-red">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="spinner-layer spinner-yellow">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="spinner-layer spinner-green">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div><div class="gap-patch">
                                    <div class="circle"></div>
                                </div><div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display: none;" id="panel-content">
                        <?php $this->load->view($content); ?>                        
                    </div>
                </div>
            </div>
            <div id="modal-login" class="modal">
                <div class="modal-content">
                    <h4>Diagnosis</h4>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="usr" name="usr" type="text" class="validate">
                                <label for="first_name">Username</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="pwd" name="pwd" type="password" class="validate">
                                <label for="pwd">Password</label>
                            </div>
                        </div>
                        <div class="progress" id="log_progress" style="display: none;">
                            <div class="indeterminate"></div>
                        </div>
                        <div class="row">
                            <button id="btn_log" type="submit" class="col s12 waves-effect waves-green btn">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer">
            <?php
            if ($this->session->userdata('logedin') AND $this->session->userdata('is_admin')) {
                $this->load->view('home/admin/admin_menu');
            }
            ?>
        </footer>   
        <!-- Include JS files. -->
            <script src="<?php echo jsPath() ?>froala_editor.min.js"></script>
        <!-- Include Plugins. -->
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/align.min.js"></script>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/colors.min.js"></script>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/entities.min.js"></script>>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/font_size.min.js"></script>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/fullscreen.min.js"></script>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/line_breaker.min.js"></script>
          <script type="text/javascript" src="<?php echo jsPath() ?>plugins/lists.min.js"></script>


        <!-- Load App JavaScript -->
        <script src="<?php echo jsPath() ?>app.js"></script>
        <script type="text/javascript">
            var base_url = "<?php echo site_url(); ?>";
            $(document).ready(function () {
                setTimeout(function () {
                    loading(!true);
                    $("#panel-content").show();
                }, 3500);

                $("#show-stat").click(function () {
                    $("#tbl_user_list").empty();
                    $("#modal-stat").openModal();
                    $.ajax({
                        url: base_url + "/main/user_list",
                        type: 'post',
                        success: function (data) {
                            setTimeout(function () {
                                $("#log_stat").hide('slow');
                                $("#tbl_user_list").html(data);
                            }, 2500);
                        },
                        complete: function () {
                            $("#log_stat").show();
                        }
                    });
                });
                $("#show-user").click(function () {
                    $("#modal-user").openModal();
                });
                
                $("select").material_select();
                $('.datepicker').pickadate({
                    selectMonths: true,
                    selectYears: 15
                });
            });


            $("#show-login").click(function () {
                $("#modal-login").openModal();
            });
            $("#btn_log").click(function () {
                var usr = $("#usr").val();
                var pwd = $("#pwd").val();

                if(usr == "" || pwd == ""){
                    Materialize.toast("Isi Semua Field..!!!", 2500);
                }
                else{
                    $("#log_progress").show('slow');
                    $.ajax({
                        url: base_url + "/main/login",
                        data: {usr: usr, pwd: pwd},
                        dataType: 'json',
                        type: 'post',
                        success: function (data) {
                            if (parseInt(data.stat) === 1) {
                                setTimeout(function () {
                                    window.location.href = base_url;
                                }, 2500);
                            }
                            else {
                                setTimeout(function () {
                                    $("#log_progress").hide('slow');
                                    $("#usr").addClass('invalid');
                                    $("#pwd").addClass('invalid');
                                    Materialize.toast('Username atau Password Salah.!', 2000, 'rounded');
                                }, 2000);                                
                            }
                        },
                        error: function () {
                            $("#log_progress").hide('slow');
                            alert("Unknown Error...!!!");
                        }
                    });
                }
            });
        </script>
    </body>
</html>