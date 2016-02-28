<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:46:18
  from "/var/www/sibumil/application/views/settings/user/hapus.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56cee98ac2b253_93921196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97993e38a192edf8ea39f6e55ffabb27af02aad1' => 
    array (
      0 => '/var/www/sibumil/application/views/settings/user/hapus.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56cee98ac2b253_93921196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Users</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Hapus Data</a></li>
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
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser/delete_process');?>
" method="post">
    <input type="hidden" name="user_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Apakah anda yakin akan menghapus data di bawah ini?</th>
        </tr>

        <tr>
            <th colspan="2">User Info</th>
        </tr>
        <tr>
            <td width="25%">Nama Lengkap *</td>
            <td width="75%"><input type="text" name="operator_name" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_name'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /></td>
        </tr>
        <tr>
            <td>Jabatan *</td>
            <td><input type="text" name="operator_jabatan" maxlength="50" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_jabatan'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /> </td>
        </tr>
        <tr>
            <td>Email *</td>
            <td><input type="text" name="user_mail" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /></td>
        </tr>
        <tr>
            <td>Nomor Telepon *</td>
            <td><input type="text" name="operator_phone" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['operator_phone'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /> </td>
        </tr>
        <tr>
            <th colspan="2">User Account</th>
        </tr>
        <tr>
            <td>User Name *</td>
            <td><input type="text" name="user_name" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_pass" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['user_pass'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" /></td>
        </tr>
        <tr>
            <td>Lock Status *</td>
            <td>
                <select name="lock_st">
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['lock_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == "0") {?>selected="selected"<?php }?>>Active</option>
                    <option value="1" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['lock_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == "1") {?>selected="selected"<?php }?>>Blocked</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Hapus" class="edit-button" /> </td>
        </tr>
    </table>
</form>
<?php }
}
