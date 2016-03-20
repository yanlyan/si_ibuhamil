<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 07:40:38
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\karyawan\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee45e6e8a908_16022831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d3ab053af1c313720831d6be58cccb8ebb265b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\karyawan\\edit.html',
      1 => 1458454997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee45e6e8a908_16022831 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Karyawan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">karyawan</a></li>
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
                    <h3 class="box-title">Edit Data karyawan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/karyawan/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_karyawan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_karyawan'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nik" class="col-sm-2 control-label">Nik</label>
                            <div class="col-sm-5">
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Nik" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nik'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-2 control-label">Nama karyawan</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" placeholder="nama_karyawan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_karyawan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">alamat</label>
                            <div class="col-sm-5">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['alamat'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div><div class="form-group">
                            <label for="no_tlp" class="col-sm-2 control-label">No tlp</label>
                            <div class="col-sm-5">
                                <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="No_tlp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['no_tlp'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/kartayawan/');?>
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
