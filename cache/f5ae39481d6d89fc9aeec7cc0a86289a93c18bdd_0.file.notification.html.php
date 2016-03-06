<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-28 06:18:23
  from "C:\xampp\htdocs\si_ibuhamil\application\views\base\templates\notification.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d2831fe8f655_34181437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ae39481d6d89fc9aeec7cc0a86289a93c18bdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\base\\templates\\notification.html',
      1 => 1456631795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d2831fe8f655_34181437 (Smarty_Internal_Template $_smarty_tpl) {
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
