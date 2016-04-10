<?php
/* Smarty version 3.1.30-dev/44, created on 2016-04-10 10:02:53
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\kegiatan\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_570a08ad5f6343_54836534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334b71ae28e0fd31f708063a63c538c8267f58dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\kegiatan\\add.html',
      1 => 1460275354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_570a08ad5f6343_54836534 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Kegiatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tentang </a></li>
        <li><a href="#">Kegiatan</a></li>
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
                    <h3 class="box-title">Tambah Data Kegiatan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/kegiatan/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_kegiatan" class="col-sm-2 control-label">nama kegiatan</label>
                            <div class="col-sm-7">
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
                                <textarea name="tanggal" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['tanggal'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
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
