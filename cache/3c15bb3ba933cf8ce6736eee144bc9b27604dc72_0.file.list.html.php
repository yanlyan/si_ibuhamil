<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-06 05:39:19
  from "D:\xampp\htdocs\si_ibuhamil\application\views\settings\portal\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56dbb4772f2dd3_77956064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c15bb3ba933cf8ce6736eee144bc9b27604dc72' => 
    array (
      0 => 'D:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\settings\\portal\\list.html',
      1 => 1457236386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56dbb4772f2dd3_77956064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head-content">
    <h3>Web Portal</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminportal/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminportal');?>
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
        <th width="5%">ID</th>
        <th width="20%">Nama Portal</th>
        <th width="30%">Judul</th>
        <th width="30%">Deskripsi</th>
        <th width="15%"></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result', false, 'no');
foreach ($_from as $_smarty_tpl->tpl_vars['no']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_0_saved = $_smarty_tpl->tpl_vars['result'];
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2) <> 0) {?>class="blink-row"<?php }?>>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['portal_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['portal_nm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['site_title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['site_desc'];?>
</td>
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminportal/edit/').($_smarty_tpl->tpl_vars['result']->value['portal_id']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Edit</a>
            <a href="<?php ob_start();
echo ('settings/adminportal/hapus/').($_smarty_tpl->tpl_vars['result']->value['portal_id']);
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
        <td colspan="5">Data not found!</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table><?php }
}
