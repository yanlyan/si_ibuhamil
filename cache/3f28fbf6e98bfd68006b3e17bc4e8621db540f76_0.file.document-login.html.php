<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-28 04:59:00
  from "C:\xampp\htdocs\si_ibuhamil\application\views\base\operator\document-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d270846fd226_27618452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f28fbf6e98bfd68006b3e17bc4e8621db540f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\operator\\document-login.html',
      1 => 1456631795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d270846fd226_27618452 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name='description' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <meta name='keywords' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <meta name='robots' content='index,follow' />
    <title>Login - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/icon/logo.png" rel="SHORTCUT ICON" />
    <!-- themes style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" media="screen" />
    <!-- other style -->
    <?php echo $_smarty_tpl->tpl_vars['LOAD_STYLE']->value;?>

</head>
<!-- body -->
<body class="hold-transition login-page full">
    <div class="login-box">
        <div class="callout callout-success">
            <p><strong>Sistem Informasi Ibu Hamil</strong></p>
        </div>
        <div class="login-box-body">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- load javascript -->
    <?php echo $_smarty_tpl->tpl_vars['LOAD_JAVASCRIPT']->value;?>

    <!-- end of javascript	-->
</body>
<!-- end body -->
</html>
<?php }
}
