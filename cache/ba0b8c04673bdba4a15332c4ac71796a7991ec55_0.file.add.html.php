<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-01 04:36:10
  from "C:\xampp\htdocs\si_ibuhamil\application\views\tes\solusi\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d50e2a1acd17_89851859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0b8c04673bdba4a15332c4ac71796a7991ec55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\tes\\solusi\\add.html',
      1 => 1456803344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56d50e2a1acd17_89851859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data Solusi
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Tes</a></li>
        <li><a href="#">Solusi</a></li>
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
                    <h3 class="box-title">Tambah Data Solusi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/solusi/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="isi_pakar" class="col-sm-2 control-label">Isi Pakar</label>
                            <div class="col-sm-5">
                                <textarea name="isi_pakar" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['isi_pakar'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi_pasien" class="col-sm-2 control-label">Isi Pasien</label>
                            <div class="col-sm-5">
                                <textarea name="isi_pasien" class="form-control" rows="5" cols="40"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['isi_pasien'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="col-sm-2 control-label">Kategori</label>
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
