<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-28 10:23:47
  from "/var/www/sibumil/application/views/master/pasien/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d2684380d260_92134063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b4c320b44c8495a82e5adf36a8281b01fc9f81a' => 
    array (
      0 => '/var/www/sibumil/application/views/master/pasien/edit.html',
      1 => 1456629563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56d2684380d260_92134063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Pasien
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">Pasien</a></li>
        <li class="active">Edit</li>
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
                    <h3 class="box-title">Edit Data Pasien</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/pasien/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_pasien" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_pasien'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pasien_nm" class="col-sm-2 control-label">Nama Pasien</label>
                            <div class="col-sm-5">
                                <input type="text" name="pasien_nm" class="form-control" id="pasien_nm" placeholder="Nama Pasien" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['pasien_nm'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_identitas" class="col-sm-2 control-label">No. Identitas</label>
                            <div class="col-sm-7">
                                <input type="text" name="no_identitas" class="form-control" id="no_identitas" placeholder="No. Identitas" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['no_identitas'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pasien_alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="pasien_alamat" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['pasien_alamat'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pasien_pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                            <div class="col-sm-6">
                                <input type="text" name="pasien_pekerjaan" class="form-control" id="pasien_pekerjaan" placeholder="Pekerjaan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['pasien_pekerjaan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-2">
                                <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['tanggal_lahir'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/pasien/');?>
"><i class="fa fa-long-arrow-left"></i>&nbsp; Batal</a>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
<?php }
}
