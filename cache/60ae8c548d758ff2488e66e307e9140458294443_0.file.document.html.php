<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 05:39:16
  from "D:\xampp\htdocs\si_ibuhamil\application\views\base\admin\document.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbb474498b05_35819777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ae8c548d758ff2488e66e307e9140458294443' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\admin\\document.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dbb474498b05_35819777 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['nav_title'])===null||$tmp==='' ? 'Home' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
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
    <body class="common">
        <!-- load javascript -->
        <?php echo $_smarty_tpl->tpl_vars['LOAD_JAVASCRIPT']->value;?>

        <!-- end of javascript	-->
        <!-- layout -->
        <div class="page">
            <div class="header">
                <h1>CiSmart 3.0</h1>
                <h2>CodeIgniter Framework and Smarty Template Engine</h2>
            </div>
            <a name="lebaran"></a>
            <div class="navigation">
                <div class="info"></div>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_top_nav']->value, 'menu');
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
$__foreach_menu_0_saved = $_smarty_tpl->tpl_vars['menu'];
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url($_smarty_tpl->tpl_vars['menu']->value['nav_url']);?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value['nav_id'] == $_smarty_tpl->tpl_vars['top_menu_selected']->value) {?>class="active"<?php }?>>
                           <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['menu']->value['nav_title'], 'UTF-8');?>
<br /><small><?php echo $_smarty_tpl->tpl_vars['menu']->value['nav_desc'];?>
</small>
                        </a>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="main-content">
                <div class="sidebar">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_sidebar']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </div>
                <div class="content">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- end of layout	-->
    </body>
    <!-- end body -->
</html><?php }
}
