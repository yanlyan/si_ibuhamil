<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-01 05:04:24
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tes\solusi\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d514c8325e09_79040743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485884c177f26ea6a8455c113d104dddaa3918b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tes\\solusi\\edit.html',
      1 => 1456803337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56d514c8325e09_79040743 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Tips
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tes</a></li>
        <li><a href="#">Tips</a></li>
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
                    <h3 class="box-title">Edit Data Tips</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/solusi/edit_process');?>
" method="post" class="form-horizontal">
                    <input type="hidden" name="id_tips" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['id_tips'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="isi_pakar" class="col-sm-2 control-label">Isi Pakar</label>
                            <div class="col-sm-5">
                                <textarea name="isi_pakar" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['isi_pakar'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi_pasien" class="col-sm-2 control-label">isi_pasien</label>
                            <div class="col-sm-5">
                                <textarea name="isi_pasien" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['isi_pasien'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="col-sm-2 control-label">kategori</label>
                            <div class="col-sm-5">
                                <input type="text" name="kategori" class="form-control" id="kategori" placeholder="kategori" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['kategori'])===null||$tmp==='' ? '' : $tmp);?>
">

                            </div>
                        </div>

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
