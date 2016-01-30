<div class="fixed-action-btn vartical" style="bottom: 40px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="large mdi-navigation-menu"></i>
    </a>
    <ul>
        <li><a title="View Statistic" id="show-stat" class="btn-floating red"><i class="mdi mdi-chart-bar"></i></a></li>
        <li><a title="Add User" id="show-user" class="btn-floating yellow darken-1"><i class="mdi mdi-account-plus"></i></a></li>                
        <li><a title="Logout" href="<?php echo siteUrl() ?>main/logout" class="btn-floating green darken-1"><i class="mdi mdi-exit-to-app"></i></a></li>
    </ul>
</div>
<div id="modal-stat" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Statistik Pasien</h4>
        <div class="row">
            <div id="tbl_user_list" class="row"></div>
            <div class="progress" id="log_stat" style="display: block;">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
    <div class="row modal-footer">
        <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</button>
    </div>
</div>
<div id="modal-user" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Tambah Pasien</h4>
        <div class="row">
            <form id="f_reg">
                <div class="input-field col s6">
                    <input id="pasien_id" name="pasien_id" type="text" class="validate">
                    <label for="pasien_id">No. Identitas</label>
                </div>
                <div class="input-field col s6">
                    <input id="pasien_nama" name="pasien_nama" type="text" class="validate">
                    <label for="pasien_nama">Nama</label>
                </div>
                <div class="input-field col s6">
                    <input id="pasien_pwd" name="pasien_pwd" type="password" class="validate">
                    <label for="pasien_pwd">Password</label>
                </div>
                <div class="input-field col s6">
                    <input id="pasien_re_pwd" name="pasien_re_pwd" type="password" class="validate">
                    <label for="pasien_re_pwd">Re-Enter Password</label>
                </div>
                <div class="input-field col s6">
                    <select name="pasien_lvl" id="pasien_lvl">
                        <option value="" disabled selected>Pilih Sebagai</option>
                        <option value="0">Pasien</option>
                        <option value="1">Admin</option>
                    </select>
                    <label>Level User</label>
                </div>
                <div class="input-field col s6">
                    <input id="pasien_tgl" name="pasien_tgl" type="date" class="datepicker validate">
                    <label for="pasien_tgl">Tanggal Lahir</label>
                </div>
                <div class="input-field col s12">                    
                    <textarea id="pasien_almt" name="pasien_almt" rows="3" class="materialize-textarea validate"></textarea>
                    <label for="pasien_almt">Alamat</label>
                </div>
            </form>
        </div>       
    </div>
    <div class="row modal-footer">        
        <button id="btn_reg" type="button" class="col s12 waves-effect waves-green btn center">Daftar</button>
        <div class="progress" id="reg_progress" style="display: none;">
            <div class="indeterminate"></div>
        </div> 
    </div>
</div>

<div id="modal-stat-show" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">  
            <div id="panel_stat" class="row" style="height: 300px !important; width: 100% !important;">
                
            </div>
        </div>
    </div>
    <div class="row modal-footer">
        <button id="btn_stat_close" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</button>
    </div>
</div>

<div id="modal-edit-user" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Edit Data Pasien</h4>
        <div class="row" id="f_edit_user"></div>
        <div class="progress" id="update_load_prog" style="display: none;">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="row modal-footer">
        <button id="btn_edit_pasien" type="button" class="waves-effect waves-light btn">Kirim</button>
        <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</button>
        <div class="progress" id="updt_progress" style="display: none;">
            <div class="indeterminate"></div>
        </div> 
    </div>
</div>

<script type="text/javascript">
    $("#btn_reg").click(function () {
        var p_id = $("#pasien_id").val();
        var p_nm = $("#pasien_nama").val();
        var p_pwd = $("#pasien_pwd").val();
        var p_r_pwd = $("#pasien_re_pwd").val();
        var p_lvl = $("#pasien_lvl").val();
        var p_tgl = $("#pasien_tgl").val();
        var p_almt = $("#pasien_almt").val();

        if(p_id =="" || p_nm=="" || p_pwd=="" || p_r_pwd=="" || p_lvl=="" || p_tgl=="" || p_almt==""){
            Materialize.toast("Isi Semua Field..!!!", 2500);
        }
        else if(p_pwd != p_r_pwd){
            Materialize.toast("Password Yang di Inputkan Berbeda...!!!", 2500);
        }
        else{
        $("#reg_progress").show('slow');
            var d = $("form#f_reg").serializeArray();
            $.ajax({
                url: "<?php echo siteUrl() ?>main/register",
                dataType: 'json',
                data: d,
                type: 'post',
                success: function (data) {
                    if (data.stat === 1) {
                        setTimeout(function () {
                            $("#modal-user").closeModal();
                            $("form#f_reg").closest('form').find("input, textarea, select").val("");
                            $("#reg_progress").hide('slow');
                            Materialize.toast("Berhasil menambahkan pasien", 3500);
                        }, 2500);
                    } else {
                        alert("Gagal..!!!");
                    }
                },
                error: function () {
                    alert("Error reg");
                }
            });
        }
    });

    $("#btn_edit_pasien").click(function () {
        var p_id = $("#pasien_id_edit").val();
        var p_nm = $("#pasien_nama_edit").val();
        var p_pwd = $("#pasien_pwd_edit").val();
        var p_r_pwd = $("#pasien_re_pwd_edit").val();
        var p_lvl = $("#pasien_lvl_edit").val();
        var p_tgl = $("#pasien_tgl_edit").val();
        var p_almt = $("#pasien_almt_edit").val();

        if(p_id ==="" || p_nm==="" || p_pwd==="" || p_r_pwd==="" || p_lvl==="" || p_tgl==="" || p_almt===""){
            Materialize.toast("Isi Semua Field..!!!", 2500);
        }
        else if(p_pwd !== p_r_pwd){
            Materialize.toast("Password Yang di Inputkan Berbeda...!!!", 2500);
        }
        else{
        $("#updt_progress").show('slow');
            var d = $("form#f_update").serializeArray();
            $.ajax({
                url: "<?php echo siteUrl() ?>main/edit_pasien",
                dataType: 'json',
                data: d,
                type: 'post',
                success: function (data) {
                    if (data.stat === 1) {
                        setTimeout(function () {
                            $("#modal-edit-user").closeModal();
                            $("form#f_update").closest('form').find("input, textarea, select").val("");
                            $("#updt_progress").hide('slow');
                            Materialize.toast("Berhasil Edit Data Pasien", 3500);
                        }, 2500);
                    } else {
                        Materialize.toast("Berhasil Edit Data Pasien", 3500);
                    }
                },
                error: function () {
                    alert("Error update");
                }
            });
        }
    });
</script>