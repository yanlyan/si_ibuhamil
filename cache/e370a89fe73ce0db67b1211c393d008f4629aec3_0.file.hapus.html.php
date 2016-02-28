<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:48:43
  from "/var/www/sibumil/application/views/settings/menu/hapus.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ceea1b5035f3_30953573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e370a89fe73ce0db67b1211c393d008f4629aec3' => 
    array (
      0 => '/var/www/sibumil/application/views/settings/menu/hapus.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ceea1b5035f3_30953573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Navigation - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Hapus Data</a></li>
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
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu/process_delete');?>
" method="post">
    <input type="hidden" name="portal_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="nav_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="nav_icon" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_icon'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Hapus Menu</th>
        </tr>
        <tr>
            <th colspan="2">Apakah anda yakin akan menghapus data dibawah ini?</th>
        </tr>
        <tr>
            <td width="25%">Judul Menu</td>
            <td width="75%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_title'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_desc'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Alamat Menu</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_url'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Urutan</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_no'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Digunakan</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['active_st'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Ditampilkan</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['display_st'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        </tr>
        <tr>
            <td>Navigation Icon</td>
            <td colspan="3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;
echo $_smarty_tpl->tpl_vars['nav_icon']->value;?>
" alt="" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Hapus" class="edit-button" /> </td>
        </tr>
    </table>
</form><?php }
}
