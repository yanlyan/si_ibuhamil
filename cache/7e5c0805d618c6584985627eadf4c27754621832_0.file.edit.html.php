<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-20 04:40:46
  from "C:\xampp\htdocs\si_ibuhamil\application\views\settings\menu\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ee1bbe9c0b82_42837596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5c0805d618c6584985627eadf4c27754621832' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\settings\\menu\\edit.html',
      1 => 1456631796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ee1bbe9c0b82_42837596 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function($) {
        $('.icp-auto').iconpicker();
    });
<?php echo '</script'; ?>
>
<div class="head-content">
    <h3>Navigation - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Edit Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/add/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/navigation/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
">List Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu');?>
">Web Portal</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu/process_update');?>
" method="post" enctype="multipart/form-data">
    <input type="hidden" name="portal_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="nav_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Edit Menu</th>
        </tr>
        <tr>
            <td width="25%">Induk Menu</td>
            <td width="75%">
                <select name="parent_id">
                    <option value="0"></option>
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_parent']->value)===null||$tmp==='' ? '' : $tmp);?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Judul Menu</td>
            <td><input type="text" name="nav_title" maxlength="100" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_title'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="nav_desc" maxlength="255" size="70" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Alamat Menu</td>
            <td><input type="text" name="nav_url" maxlength="255" size="40" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_url'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Urutan</td>
            <td><input type="text" name="nav_no" maxlength="5" size="5" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_no'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Digunakan</td>
            <td>
                <select name="active_st">
                    <option value="1"<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['active_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == "1") {?>selected="selected"<?php }?>>Ya</option>
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['active_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == "0") {?>selected="selected"<?php }?>>Tidak</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ditampilkan</td>
            <td>
                <select name="display_st">
                    <option value="1"<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['display_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == "1") {?>selected="selected"<?php }?>>Ya</option>
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['display_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 == "0") {?>selected="selected"<?php }?>>Tidak</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Navigation Icon</td>
            <td><input type="text" class="icp-auto" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['nav_icon'];?>
" name="nav_icon" /> <i class="fa fa-2x <?php echo $_smarty_tpl->tpl_vars['result']->value['nav_icon'];?>
"></i> </td>
        </tr>
        <tr>
            <td>Warna Icon</td>
            <td colspan="3">
                <input type="text" class="jscolor" name="nav_icon_color" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_icon_color'])===null||$tmp==='' ? '777777' : $tmp);?>
" />
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan" class="edit-button" /> </td>
        </tr>
    </table>
</form>
<?php }
}
