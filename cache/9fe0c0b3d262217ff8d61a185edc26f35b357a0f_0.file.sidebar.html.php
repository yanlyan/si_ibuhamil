<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:46:10
  from "/var/www/sibumil/application/views/base/admin/sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56cee9823ec9c6_39748910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe0c0b3d262217ff8d61a185edc26f35b357a0f' => 
    array (
      0 => '/var/www/sibumil/application/views/base/admin/sidebar.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cee9823ec9c6_39748910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="side-info">
    <p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['com_user']->value['operator_name'])===null||$tmp==='' ? '' : $tmp);?>
</b></p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['com_user']->value['role_nm'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <div class="clear"></div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_sidebar_nav']->value)===null||$tmp==='' ? '' : $tmp);?>

<div class="side-menu">
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/logout_process');?>
" class="logout">Logout</a></h3>
</div><?php }
}
