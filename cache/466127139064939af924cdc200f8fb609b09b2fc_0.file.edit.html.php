<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 05:51:05
  from "C:\xampp\htdocs\si_ibuhamil\application\views\master\jabatan\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee2c39b3fae6_13222096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '466127139064939af924cdc200f8fb609b09b2fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\master\\jabatan\\edit.html',
      1 => 1458448948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee2c39b3fae6_13222096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Jabatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">Jabatan</a></li>
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
                    <h3 class="box-title">Edit Data jabatan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/jabatan/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_jabatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_jabatan" class="col-sm-2 control-label">Nama Jabatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" placeholder="Nama Jabatan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
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
