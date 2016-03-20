<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 04:35:27
  from "C:\xampp\htdocs\si_ibuhamil\application\views\base\admin\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee1a7f5a9515_45448182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbc5c5b0856856190f1fe4600f5947dc6337f3da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\admin\\sidebar.html',
      1 => 1456631795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ee1a7f5a9515_45448182 (Smarty_Internal_Template $_smarty_tpl) {
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
