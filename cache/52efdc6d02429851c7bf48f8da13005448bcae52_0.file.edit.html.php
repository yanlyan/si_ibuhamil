<?php
/* Smarty version 3.1.30-dev/44, created on 2016-04-19 06:18:15
  from "C:\xampp\htdocs\si_ibuhamil\application\views\master\rekapmedik\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5715b187bc11e6_44317994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52efdc6d02429851c7bf48f8da13005448bcae52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\master\\rekapmedik\\edit.html',
      1 => 1461038918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_5715b187bc11e6_44317994 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\si_ibuhamil\\system\\plugins\\smarty\\libs\\plugins\\modifier.date_format.php';
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    $('#anamnese-s, #anamnese-o, #anamnese-a, #anamnese-p, #diagnosis, #tindakan').summernote({
        height: 100,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true
    });
    $('#tgl_periksa').datetimepicker({
        'format': 'YYYY-MM-DD H:I',
        'ignoreReadonly': true
    });
});

<?php echo '</script'; ?>
>
<section class="content-header">
    <h1>
        Data Rekap Medik
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">Rekap Medik</a></li>
        <li class="active">Tambah Data</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- notification template -->
            <?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- end of notification template-->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data Rekap Medik</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/rekapmedik/edit_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="no_rm" class="col-sm-2 control-label">No. RM.</label>
                            <div class="col-sm-2">
                                <input type="text" name="no_rm" class="form-control" id="no_rm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_rekapmedik'])===null||$tmp==='' ? '' : $tmp);?>
" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pasien" class="col-sm-2 control-label">Pasien</label>
                            <div class="col-sm-2">
                                <select name="pasien" class="form-control" id="pasien">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_pasien']->value, 'pasien');
foreach ($_from as $_smarty_tpl->tpl_vars['pasien']->value) {
$_smarty_tpl->tpl_vars['pasien']->_loop = true;
$__foreach_pasien_0_saved = $_smarty_tpl->tpl_vars['pasien'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['pasien']->value['id_pasien'];?>
" <?php if ($_smarty_tpl->tpl_vars['pasien']->value['id_pasien'] == $_smarty_tpl->tpl_vars['result']->value['id_pasien']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pasien']->value['pasien_nm'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['pasien'] = $__foreach_pasien_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_periksa" class="col-sm-2 control-label">Tanggal Periksa</label>
                            <div class="col-sm-2">
                                <input type="text" name="tgl_periksa" class="form-control" id="tgl_periksa" placeholder="Tanggal Periksa" value="<?php echo smarty_modifier_date_format((($tmp = @$_smarty_tpl->tpl_vars['result']->value['tgl_periksa'])===null||$tmp==='' ? '' : $tmp),'%y-%m-%d %H:%M');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anamnese-s" class="col-sm-2 control-label">Anamnese / PX Fisik</label>
                            <div class="col-sm-5">
                                <label class="control-label">S</label>
                                <textarea name="anamnese[s]" class="form-control" id="anamnese-s"><?php echo $_smarty_tpl->tpl_vars['result']->value['anamnese_s'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anamnese-o" class="col-sm-2 control-label"></label>
                            <div class="col-sm-5">
                                <label class="control-label">O</label>
                                <textarea name="anamnese[o]" class="form-control" id="anamnese-o"><?php echo $_smarty_tpl->tpl_vars['result']->value['anamnese_o'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anamnese-a" class="col-sm-2 control-label"></label>
                            <div class="col-sm-5">
                                <label class="control-label">A</label>
                                <textarea name="anamnese[a]" class="form-control" id="anamnese-a"><?php echo $_smarty_tpl->tpl_vars['result']->value['anamnese_a'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anamnese-p" class="col-sm-2 control-label"></label>
                            <div class="col-sm-5">
                                <label class="control-label">P</label>
                                <textarea name="anamnese[p]" class="form-control" id="anamnese-p"><?php echo $_smarty_tpl->tpl_vars['result']->value['anamnese_p'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hb" class="col-sm-2 control-label">HB</label>
                            <div class="col-sm-5">
                                <textarea name="hb" class="form-control" id="hb"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['hb'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan_darah" class="col-sm-2 control-label">Golongan Darah</label>
                            <div class="col-sm-5">
                                <textarea name="golongan_darah" class="form-control" id="golongan_darah"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['golongan_darah'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="glukosa_darah" class="col-sm-2 control-label">Glukosa Darah</label>
                            <div class="col-sm-5">
                                <textarea name="glukosa_darah" class="form-control" id="glukosa_darah"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['glukosa_darah'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diagnosis" class="col-sm-2 control-label">Diagnosis</label>
                            <div class="col-sm-5">
                                <textarea name="diagnosis" class="form-control" id="diagnosis"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['diagnosis'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icd" class="col-sm-2 control-label">ICD</label>
                            <div class="col-sm-6">
                                <input type="text" name="icd" class="form-control" id="icd" placeholder="ICD" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['icd'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tindakan" class="col-sm-2 control-label">Terapi / Tindakan</label>
                            <div class="col-sm-5">
                                <textarea name="tindakan" class="form-control" id="diagnosis"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['terapi_tindakan'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/rekapmedik/');?>
"><i class="fa fa-long-arrow-left"></i>&nbsp; Batal</a>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        <input type="hidden" name="id_rekapmedik" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_rekapmedik'])===null||$tmp==='' ? '0' : $tmp);?>
">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
<?php }
}
