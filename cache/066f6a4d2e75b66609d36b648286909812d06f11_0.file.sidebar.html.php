<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 05:39:16
  from "D:\xampp\htdocs\si_ibuhamil\application\views\base\admin\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbb4745c1cb2_31983122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066f6a4d2e75b66609d36b648286909812d06f11' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\admin\\sidebar.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dbb4745c1cb2_31983122 (Smarty_Internal_Template $_smarty_tpl) {
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
