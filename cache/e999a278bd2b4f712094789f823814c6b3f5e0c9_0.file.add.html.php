<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 07:32:43
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\karyawan\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee440b7049e0_41122801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e999a278bd2b4f712094789f823814c6b3f5e0c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\karyawan\\add.html',
      1 => 1458454711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee440b7049e0_41122801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Karyawan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">Karyawan</a></li>
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
                    <h3 class="box-title">Tambah Data Karyawan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/karyawan/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nik" class="col-sm-2 control-label">Nik</label>
                            <div class="col-sm-5">
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Nik" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nik'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-2 control-label">nama karyawan</label>
                            <div class="col-sm-7">
                                <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" placeholder="nama_karyawan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_karyawan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="alamat" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['alamat'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp" class="col-sm-2 control-label">No tlp</label>
                            <div class="col-sm-6">
                                <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="no_tlp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['no_tlp'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/karyawan/');?>
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
