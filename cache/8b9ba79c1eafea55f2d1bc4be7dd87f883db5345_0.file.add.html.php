<?php
/* Smarty version 3.1.30-dev/44, created on 2016-04-12 05:55:18
  from "C:\xampp\htdocs\si_ibuhamil\application\views\master\user\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_570c71a697ae99_42336824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b9ba79c1eafea55f2d1bc4be7dd87f883db5345' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\master\\user\\add.html',
      1 => 1460433039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_570c71a697ae99_42336824 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {

    $('#tanggal_lahir').datetimepicker({
        'format': 'YYYY-MM-DD ',
        'ignoreReadonly': true
    });
});

<?php echo '</script'; ?>
>
<section class="content-header">
    <h1>
        Data User
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li><a href="#">User</a></li>
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
                    <h3 class="box-title">Tambah Data User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/add_process');?>
" method="post" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_name" class="col-sm-2 control-label">Nama User</label>
                            <div class="col-sm-4">
                                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Nama User" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_pass" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-2">
                                <input type="text" name="user_pass" class="form-control" id="user_pass" placeholder="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_pass'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_mail" class="col-sm-2 control-label">Email User</label>
                            <div class="col-sm-4">
                                <input type="text" name="user_mail" class="form-control" id="user_mail" placeholder="email@example.com" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_st" class="col-sm-2 control-label">Status User</label>
                            <div class="col-sm-2">
                                <input type="text" name="user_st" class="form-control" id="user_st" placeholder="status" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_st'])===null||$tmp==='' ? '' : $tmp);?>
">

                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/');?>
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
