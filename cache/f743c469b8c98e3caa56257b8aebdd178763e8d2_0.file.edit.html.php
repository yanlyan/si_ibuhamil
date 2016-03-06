<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-03 09:15:06
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tes\pertanyaan\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d7f28a8d43a1_07617476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f743c469b8c98e3caa56257b8aebdd178763e8d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tes\\pertanyaan\\edit.html',
      1 => 1456992688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56d7f28a8d43a1_07617476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Pertanyaan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tes</a></li>
        <li><a href="#">Pertanyaan</a></li>
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
                    <h3 class="box-title">Edit Data Pertanyaan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/pertanyaan/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_konsul" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_konsul'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_konsul" class="col-sm-2 control-label">Nama Konsul</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_konsul" class="form-control" id="nama_konsul" placeholder="Nama Konsul" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nama_konsul'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-7">
                                <input type="text" name="type" class="form-control" id="type" placeholder="Type" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['type'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/pertanyaan/');?>
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
