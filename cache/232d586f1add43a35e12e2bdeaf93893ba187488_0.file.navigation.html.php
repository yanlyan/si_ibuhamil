<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-25 18:48:09
  from "/var/www/sibumil/application/views/settings/menu/navigation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56cee9f9ba89c9_99630933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232d586f1add43a35e12e2bdeaf93893ba187488' => 
    array (
      0 => '/var/www/sibumil/application/views/settings/menu/navigation.html',
      1 => 1455979815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56cee9f9ba89c9_99630933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Navigation - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/add/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/navigation/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
" class="active">List Menu</a></li>
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
<table class="table-view" width="100%">
    <tr>
        <th width="5%"></th>
        <th width="28%">Judul Menu</th>
        <th width="20%">Alamat</th>
        <th width="18%">Deskripsi</th>
        <th width="7%">Uses</th>
        <th width="7%">Show</th>
        <th width="15%"></th>
    </tr>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['rs_id']->value)===null||$tmp==='' ? '' : $tmp);?>

</table><?php }
}
