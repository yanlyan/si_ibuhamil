<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-21 18:59:44
  from "/var/www/cismart.3.0/application/views/login/operator/form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56c9a6b08acfa5_99668290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841ca2bd814912f160f7daca799a98bcdad2c51f' => 
    array (
      0 => '/var/www/cismart.3.0/application/views/login/operator/form.html',
      1 => 1455979816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c9a6b08acfa5_99668290 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="login-body">
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'error') {?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Your account is not found</strong>, Please Try Again or contact your administrator </p>
        <div class="clear"></div>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin/login_process');?>
" method="post" role="form">
        <fieldset>
            <div class="form-group">
                <input class="form-control input-lg" placeholder="Username" name="username" maxlength="30" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="pass" maxlength="30" type="password" value="">
            </div>
            <div class="checkbox">
                <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <input type="submit" class="btn btn-success btn-block" value="Login">
        </fieldset>
    </form>
    <?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'locked') {?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Your account has been locked</strong>, Please Try Again or contact your administrator </p>
        <div class="clear"></div>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin/login_process');?>
" method="post" role="form">
        <fieldset>
            <div class="form-group">
                <input class="form-control input-lg" placeholder="Username" name="username" maxlength="30" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="pass" maxlength="30" type="password" value="">
            </div>
            <div class="checkbox">
                <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <input type="submit" class="btn btn-success btn-block" value="Login">
        </fieldset>
    </form>
    <?php } else { ?>
    <div class="alert alert-warning alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <p><strong>Please Login First</strong>, to acces this application! </p>
        <div class="clear"></div>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin/login_process');?>
" method="post" role="form">
        <fieldset>
            <div class="form-group">
                <input class="form-control input-lg" placeholder="Username" name="username" maxlength="30" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="pass" maxlength="30" type="password" value="">
            </div>
            <div class="checkbox">
                <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
            </div>
            <!-- Change this to a button or input when using this as a form -->
            <input type="submit" class="btn btn-success btn-block" value="Login">
        </fieldset>
    </form>
    <?php }?>
</div>
<?php }
}
