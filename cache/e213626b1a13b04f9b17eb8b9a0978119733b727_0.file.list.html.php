<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 04:36:53
  from "C:\xampp\htdocs\si_ibuhamil\application\views\settings\menu\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee1ad508f1c8_46361237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e213626b1a13b04f9b17eb8b9a0978119733b727' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\settings\\menu\\list.html',
      1 => 1456631796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee1ad508f1c8_46361237 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Navigation</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu');?>
" class="active">Web Portal</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- end of notification template-->
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="20%">Nama Portal</th>
        <th width="40%">Judul</th>
        <th width="20%">Jumlah Menu</th>
        <th width="15%"></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result', false, 'no');
foreach ($_from as $_smarty_tpl->tpl_vars['no']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_0_saved = $_smarty_tpl->tpl_vars['result'];
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2) <> 0) {?>class="blink-row"<?php }?>>
        <td><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
.</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['portal_nm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['site_title'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['total_menu'];?>
</td>
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminmenu/navigation/').($_smarty_tpl->tpl_vars['result']->value['portal_id']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Edit Menu</a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved;
}
if (!$_smarty_tpl->tpl_vars['result']->_loop) {
?>
    <tr>
        <td colspan="5">Empty</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table><?php }
}
