<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 06:45:07
  from "D:\xampp\htdocs\si_ibuhamil\application\views\info\resiko.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbc3e3d8dd70_26162639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa13484bad3244b9af9ba664c32b2369f3b48879' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\info\\resiko.html',
      1 => 1457242642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56dbc3e3d8dd70_26162639 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    $('#editor-resiko').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true
    });
});
<?php echo '</script'; ?>
>
<section class="content-header">
    <h1>
        Informasi Resiko Anemia
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-info"></i> Informasi</a></li>
        <li class="active">Resiko Anemia</li>
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
                    <h3 class="box-title">Edit Informasi Resiko Anemia</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('info/resiko/edit_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <textarea name="info_resiko" id="editor-resiko">
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['info_resiko']->value['info'])===null||$tmp==='' ? '' : $tmp);?>

                        </textarea>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/solusi/');?>
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
