<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 06:35:23
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tentang\visi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee369b0a6171_54708795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdd3af2039cfcc315b4bfde956d148f04e07d32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tentang\\visi.html',
      1 => 1458452115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee369b0a6171_54708795 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    $('#editor-visi').summernote({
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
        Informasi Visi Misi
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-info"></i> Informasi</a></li>
        <li class="active">visi misi</li>
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
                    <h3 class="box-title">Edit Informasi visi misi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tentang/visi/edit_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <textarea name="tentang_visi" id="editor-visi">
                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['tentang_visi']->value['info'])===null||$tmp==='' ? '' : $tmp);?>

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
