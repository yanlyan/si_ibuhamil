<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 00:26:38
  from "/var/www/cismart.3.0/application/views/settings/user/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56cde7ce66e429_91158380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd766e8d92799bcf7fbb936328d70eb32d3709f4c' => 
    array (
      0 => '/var/www/cismart.3.0/application/views/settings/user/edit.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56cde7ce66e429_91158380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Users</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Edit Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser/edit_process');?>
" method="post">
    <input type="hidden" name="user_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="user_name_old" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="user_mail_old" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Edit Data</th>
        </tr>
        <tr>
            <th colspan="2">User Info</th>
        </tr>
        <tr>
            <td width="25%">Nama Lengkap *</td>
            <td width="75%"><input type="text" name="operator_name" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_name'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Jabatan *</td>
            <td><input type="text" name="operator_jabatan" maxlength="50" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Email *</td>
            <td><input type="text" name="user_mail" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Nomor Telepon *</td>
            <td><input type="text" name="operator_phone" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_phone'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <th colspan="2">User Account</th>
        </tr>
        <tr>
            <td>User Name *</td>
            <td><input type="text" name="user_name" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_pass" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_pass'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Lock Status *</td>
            <td>
                <select name="lock_st">
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['lock_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == "0") {?>selected="selected"<?php }?>>ACTIVE</option>
                    <option value="1" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['lock_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == "1") {?>selected="selected"<?php }?>>BLOCKED</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hak Akses *</td>
            <td>
                <select name="role_id">
                    <option></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_role']->value, 'data');
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved = $_smarty_tpl->tpl_vars['data'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['role_id'];?>
" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_id'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == $_smarty_tpl->tpl_vars['data']->value['role_id']) {?>selected="selected"<?php }?>><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['data']->value['portal_nm'], 'UTF-8');?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['data']->value['role_nm'], 'UTF-8');?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan" class="edit-button" /> </td>
        </tr>
    </table>
</form><?php }
}
