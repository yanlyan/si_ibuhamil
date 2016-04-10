<?php
/* Smarty version 3.1.30-dev/44, created on 2016-04-10 10:16:33
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\kegiatan\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_570a0be1eac0f6_53328003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a794f77c98fc5a62209b9fb44686c1ad2ce3837c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\kegiatan\\edit.html',
      1 => 1460275496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_570a0be1eac0f6_53328003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Kegiatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">kegiatan</a></li>
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
                    <h3 class="box-title">Edit Data kegiatan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/kegiatan/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_kegiatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_kegiatan'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="nama_kegiatan" class="col-sm-2 control-label">Nama kegiatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="nama_kegiatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_kegiatan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat" class="col-sm-2 control-label">Tempat</label>
                            <div class="col-sm-5">
                                <input type="text" name="tempat" class="form-control" id="tempat" placeholder="tempat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['tempat'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-5">
                                <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="tanggal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['tanggal'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/kegiatan/');?>
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
