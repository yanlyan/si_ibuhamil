<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 06:01:26
  from "C:\xampp\htdocs\si_ibuhamil\application\views\master\jabatan\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee2ea61703d4_35460691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3160c0e1afd52650da2fb88029d7d1ffd02802' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\master\\jabatan\\add.html',
      1 => 1458450076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee2ea61703d4_35460691 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Jabatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">Jabatan</a></li>
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
                    <h3 class="box-title">Tambah Data jabatan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/jabatan/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_jabatan" class="col-sm-2 control-label">Nama jabatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" placeholder="nama jabatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/jabatan/');?>
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
