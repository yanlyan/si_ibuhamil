<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 04:54:25
  from "D:\xampp\htdocs\si_ibuhamil\application\views\login\operator\form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dba9f1e867f8_68357249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15412073af2bfe5a075053237a3893febdb35843' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\login\\operator\\form.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dba9f1e867f8_68357249 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-body">
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'error') {?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Your account is not found</strong>, Please Try Again or contact your administrator </p>
        <div class="clear"></div>
    </div>
    <?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'locked') {?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Your account has been locked</strong>, Please Try Again or contact your administrator </p>
        <div class="clear"></div>
    </div>
    <?php } else { ?>
    <div class="alert alert-warning alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Please Login First</strong>, to acces this application! </p>
        <div class="clear"></div>
    </div>
    <?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin/login_process');?>
" method="post">
        <div class="form-group has-feedback">
            <input class="form-control" placeholder="Username" name="username" maxlength="30" type="text" autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input class="form-control" placeholder="Password" name="pass" maxlength="30" type="password" value="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-4 pull-right">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
        </div>
    </form>
</div>
<?php }
}
