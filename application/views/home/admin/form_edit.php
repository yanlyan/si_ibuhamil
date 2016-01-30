<form id="f_update">
    <div class="input-field col s6">
        <input id="pasien_id_edit" name="pasien_id_edit" type="text" class="validate" value="<?php echo $pasien['username'] ?>">
        <label class="active" for="pasien_id_edit">No. Identitas</label>
    </div>
    <div class="input-field col s6">
        <input id="pasien_nama_edit" name="pasien_nama_edit" type="text" class="validate" value="<?php echo $pasien['nama'] ?>">
        <label class="active" for="pasien_nama_edit">Nama</label>
    </div>
    <div class="input-field col s6">
        <input id="pasien_pwd_edit" name="pasien_pwd_edit" type="password" class="validate" value="<?php echo $pasien['password'] ?>">
        <label class="active" for="pasien_pwd">Password</label>
    </div>
    <div class="input-field col s6">
        <input id="pasien_re_pwd_edit" name="pasien_re_pwd_edit" type="password" class="validate" value="<?php echo $pasien['password'] ?>">
        <label class="active" for="pasien_re_pwd">Re-Enter Password</label>
    </div>
    <div class="input-field col s6">
        <select name="pasien_lvl_edit" id="pasien_lvl_edit">
            <?php if($pasien['level'] == 1){ ?>
                <option value="0">Pasien</option>
                <option value="1" selected>Admin</option>
            <?php }
                else{
            ?>
                <option value="0" selected>Pasien</option>
                <option value="1">Admin</option>
            <?php } ?>
        </select>
        <label class="active" for="pasien_lvl_edit">Level User</label>
    </div>
    <div class="input-field col s6">
        <input id="pasien_tgl_edit" name="pasien_tgl_edit" type="date" class="datepicker validate" value="<?php echo $pasien['tgl_lahir'] ?>">
        <input name="pasien_primary" id="pasien_primary" type="hidden" value="<?php echo $id ?>">
        <input name="is_edit" id="is_edit" type="hidden" value="1">
        <label class="active" for="pasien_tgl">Tanggal Lahir</label>
    </div>
    <div class="input-field col s12">                    
        <textarea id="pasien_almt_edit" name="pasien_almt_edit" rows="3" class="materialize-textarea validate"><?php echo $pasien['alamat'] ?></textarea>
        <label class="active" for="pasien_almt">Alamat</label>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function(){
    $("select").material_select();
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 15
    });
});
</script>