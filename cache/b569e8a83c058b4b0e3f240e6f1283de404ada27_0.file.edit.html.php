<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 05:07:38
  from "D:\xampp\htdocs\si_ibuhamil\application\views\tes\measure\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbad0a43eb64_42088179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b569e8a83c058b4b0e3f240e6f1283de404ada27' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tes\\measure\\edit.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56dbad0a43eb64_42088179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Measure
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tes</a></li>
        <li><a href="#">Measure</a></li>
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
                    <h3 class="box-title">Edit Data Measure</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/measure/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_konsul" class="col-sm-2 control-label">Id Konsul</label>
                            <div class="col-sm-5">
                                <input type="text" name="id_konsul" class="form-control" id="id_konsul" placeholder="id_konsul" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_konsul'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hasil" class="col-sm-2 control-label">Hasil</label>
                            <div class="col-sm-5">
                                <input type="text" name="hasil" class="form-control" id="hasil" placeholder="hasil" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['hasil'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mb" class="col-sm-2 control-label">Mb</label>
                            <div class="col-sm-7">
                                <input type="text" name="mb" class="form-control" id="mb" placeholder="Mb" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['mb'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="md" class="col-sm-2 control-label">Md</label>
                            <div class="col-sm-7">
                                <input type="text" name="md" class="form-control" id="md" placeholder="Md" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['md'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/measure/');?>
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
