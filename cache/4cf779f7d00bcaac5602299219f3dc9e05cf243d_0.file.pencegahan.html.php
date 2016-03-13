<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-13 04:50:43
  from "C:\xampp\htdocs\si_ibuhamil\application\views\info\pencegahan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56e4e3934e74a7_31454306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf779f7d00bcaac5602299219f3dc9e05cf243d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\info\\pencegahan.html',
      1 => 1457840343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56e4e3934e74a7_31454306 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    $('#editor-pencegahan').summernote({
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
        Informasi pencegahan Anemia
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-info"></i> Informasi</a></li>
        <li class="active">pencegahan Anemia</li>
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
                    <h3 class="box-title">Edit Informasi pencegahan Anemia</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('info/pencegahan/edit_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <textarea name="info_pencegahan" id="editor-pencegahan">
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['info_pencegahan']->value['info'])===null||$tmp==='' ? '' : $tmp);?>

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
