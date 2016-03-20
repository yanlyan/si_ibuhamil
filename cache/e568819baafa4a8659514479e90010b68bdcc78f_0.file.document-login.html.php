<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 04:35:11
  from "C:\xampp\htdocs\si_ibuhamil\application\views\base\admin\document-login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee1a6fdfb7d9_89856933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e568819baafa4a8659514479e90010b68bdcc78f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\admin\\document-login.html',
      1 => 1456631795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ee1a6fdfb7d9_89856933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- head -->
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
        <meta name='description' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name='keywords' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name='robots' content='index,follow' />
        <title>Login - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/icon/favicon.jpg" rel="SHORTCUT ICON" />
        <!-- themes style -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" media="screen" />
        <!-- other style -->
        <?php echo $_smarty_tpl->tpl_vars['LOAD_STYLE']->value;?>

    </head>
    <!-- body -->
    <body class="login-common">
        <!-- load javascript -->
        <?php echo $_smarty_tpl->tpl_vars['LOAD_JAVASCRIPT']->value;?>

        <!-- end of javascript	-->
        <!-- layout -->
        <div class="loginWrapper">
            <div class="loginBox-head">
                <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</h1>
            </div>
            <!-- content -->
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- end of content -->
        </div>
        <div class="footer">
            <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
 &copy;2011</p>
        </div>
        <!-- end of layout	-->
    </body>
    <!-- end body -->
</html>
<?php }
}
