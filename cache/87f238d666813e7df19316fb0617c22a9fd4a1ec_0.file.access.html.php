<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-20 22:48:56
  from "/var/www/cismart.3.0/application/views/settings/role/access.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56c88ae80d1988_36395753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f238d666813e7df19316fb0617c22a9fd4a1ec' => 
    array (
      0 => '/var/www/cismart.3.0/application/views/settings/role/access.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c88ae80d1988_36395753 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Role Permissions</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminpermissions');?>
" class="active">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="20%">Web Portal</th>
        <th width="25%">Nama</th>
        <th width="35%">Deskripsi</th>
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
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminpermissions/access_update/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Permissions</a>
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
</table>
<?php }
}
