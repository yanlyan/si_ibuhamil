<div class="card-panel card-2">
    <h4>Control Panel</h4>
    <div id="panel_control" class="row">
        <div class="col s4">
            <ul style="margin-left: -25px;">
                <li id="cp_home" data-model="getHome" class="menu-cpanel waves-effect waves-teal" style="width: 100% !important; padding-left: 20px;">
                    <a href="#!"><h5 class="blue-text">Home</h5></a>
                </li>
                <li id="cp_upload_struktur" class="menu-cpanel waves-effect waves-teal" style="width: 100% !important; padding-left: 20px;">
                    <a href="#!"><h5 class="blue-text">Struktur Organisasi</h5></a>
                </li>
                <li id="cp_infopenyakit" class="menu-cpanel waves-effect waves-teal" style="width: 100% !important; padding-left: 20px;">
                    <a href="#!"><h5 class="blue-text">Informasi Penyakit</h5></a>
                </li>
                <li id="cp_kebutuhangizi" class="menu-cpanel waves-effect waves-teal" style="width: 100% !important; padding-left: 20px;">
                    <a href="#!"><h5 class="blue-text">Kebutuhan Gizi</h5></a>
                </li>
            </ul>
        </div>
        <div id="panel-control-kanan" class="col s8">

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url: "<?php echo siteUrl() ?>main/cp_admin/cp_home",
            type: 'post',
            data: {model: 'getHome'},
            success: function(data){
                $("#panel-control-kanan").empty();
                $("#panel-control-kanan").html(data);
            },
            error: function(){
                alert("Error Struktur");
            }
        });
    });    


    $(".menu-cpanel").click(function(){        
        $.ajax({
            url: "<?php echo siteUrl() ?>main/cp_admin/"+$(this).attr('id'),
            type: 'post',
            data: {model: $(this).attr('data-model')},
            success: function(data){
                $("#panel-control-kanan").empty();
                $("#panel-control-kanan").html(data);
            },
            error: function(){
                alert("Error Struktur");
            }
        });
    });
</script>