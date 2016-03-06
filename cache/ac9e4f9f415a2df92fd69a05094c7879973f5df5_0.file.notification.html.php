<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 04:55:02
  from "D:\xampp\htdocs\si_ibuhamil\application\views\base\templates\notification.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbaa1695dcf9_43299721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9e4f9f415a2df92fd69a05094c7879973f5df5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\templates\\notification.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dbaa1695dcf9_43299721 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- notification template -->
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "error") {?>
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "warning") {?>
<div class="alert alert-warning">
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "success") {?>
<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } else {
}?>
<!-- End of notification template -->
<?php }
}
