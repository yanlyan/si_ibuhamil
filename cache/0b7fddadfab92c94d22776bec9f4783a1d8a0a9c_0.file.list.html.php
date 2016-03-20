<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 04:36:46
  from "C:\xampp\htdocs\si_ibuhamil\application\views\settings\role\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee1acedc81b4_24866013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7fddadfab92c94d22776bec9f4783a1d8a0a9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\settings\\role\\list.html',
      1 => 1456631796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee1acedc81b4_24866013 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Role Management</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole');?>
" class="active">List Data</a></li>
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
        <th width="15%">Web Portal</th>
        <th width="20%">Role Name</th>
        <th width="25%">Role Description</th>
        <th width="20%">Default Page</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['role_nm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['role_desc'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['default_page'];?>
</td>
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminrole/edit/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Edit</a>
            <a href="<?php ob_start();
echo ('settings/adminrole/hapus/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable2);?>
" class="button-hapus">Hapus</a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved;
}
if (!$_smarty_tpl->tpl_vars['result']->_loop) {
?>
    <tr>
        <td colspan="6">Data not found!</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table><?php }
}
