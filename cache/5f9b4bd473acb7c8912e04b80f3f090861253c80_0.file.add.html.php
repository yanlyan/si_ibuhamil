<?php
/* Smarty version 3.1.30-dev/44, created on 2016-04-11 08:17:42
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\struktur\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_570b418648d789_23642034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9b4bd473acb7c8912e04b80f3f090861253c80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\struktur\\add.html',
      1 => 1460291531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_570b418648d789_23642034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Struktur Organisasi
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tentang </a></li>
        <li><a href="#">Struktur </a></li>
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
                    <h3 class="box-title">Tambah Data </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/struktur/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_jabatan" class="col-sm-2 control-label">nama jabatan</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" placeholder="nama_jabatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-2 control-label">nama karyawan</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" placeholder="nama_karyawan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['tempat'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penanggung_jawab" class="col-sm-2 control-label">penanggung_jawab</label>
                            <div class="col-sm-5">
                                <textarea name="penanggung_jawab" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['penanggung_jawab'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/struktur/');?>
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
