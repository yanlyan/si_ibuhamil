<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:47:00
  from "/var/www/sibumil/application/views/settings/role/hapus.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56cee9b4266935_17076000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953a1cc7dc7d74fbdd02e21577daad3b182178bd' => 
    array (
      0 => '/var/www/sibumil/application/views/settings/role/hapus.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56cee9b4266935_17076000 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Role Management</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Hapus Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/process_delete');?>
" method="post">
    <input type="hidden" name="role_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Hapus Role</th>
        </tr>
        <tr>
            <td width="25%">Web Portal *</td>
            <td width="75%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Nama Authority *</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_nm'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Deskripsi *</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_desc'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Default Page *</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['default_page'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Hapus" class="edit-button" /> </td>
        </tr>
    </table>
</form>
<?php }
}
