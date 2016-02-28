<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:53:40
  from "/var/www/sibumil/application/views/settings/role/access_update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56ceeb441705c0_77275120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9156263c18740fe79751c8c3a4c5f58c3ed4ccfe' => 
    array (
      0 => '/var/www/sibumil/application/views/settings/role/access_update.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56ceeb441705c0_77275120 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- javascript -->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $(".checked-all").click(function () {
            var status = $(this).is(":checked");
            if (status == true) {
                $(".r" + $(this).val()).prop('checked', true);
            } else {
                $(".r" + $(this).val()).prop('checked', false);
            }
        });
    })
<?php echo '</script'; ?>
>
<!-- end of javascript -->
<div class="head-content">
    <h3>Role Permissions - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Edit Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminpermissions');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminpermissions/process');?>
" method="post">
    <input type="hidden" name="role_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-view" width="100%">
        <tr>
            <th width="5%"></th>
            <th width="55%">Judul Menu</th>
            <th width="10%">Create</th>
            <th width="10%">Read</th>
            <th width="10%">Update</th>
            <th width="10%">Delete</th>
        </tr>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_menu']->value)===null||$tmp==='' ? '' : $tmp);?>

        <tr>
            <td colspan="6"><input type="submit" name="save" value="Simpan" class="edit-button" /></td>
        </tr>
    </table>
</form><?php }
}
