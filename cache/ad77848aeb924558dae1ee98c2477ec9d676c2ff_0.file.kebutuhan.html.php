<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 07:30:11
  from "C:\xampp\htdocs\si_ibuhamil\application\views\info\kebutuhan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbce73ab3876_09865019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad77848aeb924558dae1ee98c2477ec9d676c2ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\info\\kebutuhan.html',
      1 => 1457245735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56dbce73ab3876_09865019 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    $('#editor-kebutuhan').summernote({
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
        Informasi kebutuhan Anemia
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-info"></i> Informasi</a></li>
        <li class="active">kebutuhan Anemia</li>
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
                    <h3 class="box-title">Edit Informasi Kebutuhan Anemia</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('info/kebutuhan/edit_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <textarea name="info_kebutuhan" id="editor-kebutuhan">
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['info_kebutuhan']->value['info'])===null||$tmp==='' ? '' : $tmp);?>

                        </textarea>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

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
