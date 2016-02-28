<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-27 19:34:40
  from "/var/www/sibumil/application/views/login/operator/form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d197e0241982_91390138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ad2bd871f67c0f5394b32460c2a24c3d7d4efa4' => 
    array (
      0 => '/var/www/sibumil/application/views/login/operator/form.html',
      1 => 1456576478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d197e0241982_91390138 (Smarty_Internal_Template $_smarty_tpl) {
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
