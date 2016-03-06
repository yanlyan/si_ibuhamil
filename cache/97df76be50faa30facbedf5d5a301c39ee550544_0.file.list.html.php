<?php
/* Smarty version 3.1.30-dev/44, created on 2016-02-28 06:23:05
  from "C:\xampp\htdocs\si_ibuhamil\application\views\master\user\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56d28439df6cf1_04565828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97df76be50faa30facbedf5d5a301c39ee550544' => 
    array (
      0 => 'C:\\xampp\\htdocs\\si_ibuhamil\\application\\views\\master\\user\\list.html',
      1 => 1456636674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56d28439df6cf1_04565828 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Data User
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master</a></li>
        <li class="active">User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-search"></i>&nbsp; Pencarian</h3>
                </div>
                <div class="box-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/search_process');?>
" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_nm" class="col-sm-3 control-label">Nama User</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="user_nm" class="form-control" id="user_nm" placeholder="-- semua --" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['search']->value['user_nm'])===null||$tmp==='' ? '' : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 pull-right action-right">
                                    <input class="btn btn-primary" name="save" type="submit" value="Cari">
                                    <input class="btn btn-danger" name="save" type="submit" value="Reset">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <!-- notification template -->
            <?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- end of notification template-->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tabel Data User</h3>
                    <div class="box-tools">
                        <a class="btn btn-sm btn-success" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/add');?>
"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="*">Nama User</th>
                                <th width="20%">No. Identitas</th>
                                <th width="15%">Tanggal Lahir</th>
                                <th width="15%">Alamat</th>
                                <th width="15%">Pekerjaan</th>
                                <th width="15%">No Telepon</th>
                                <th width="13%">Action</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result');
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_0_saved = $_smarty_tpl->tpl_vars['result'];
?>
                            <tr>
                                <td  align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['user_nm'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['no_identitas'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['dtm']->value->get_full_date($_smarty_tpl->tpl_vars['result']->value['tanggal_lahir']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['user_alamat'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['user_pekerjaan'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['no_telepon'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_user'];?>
" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/user/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_user'];?>
" class="btn btn-xs btn-danger"><i class="fa fa-minus"></i>&nbsp; Hapus</a>
                                </td>
                            </tr>
                            <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['total'])===null||$tmp==='' ? '0' : $tmp);?>
</strong> Data</li>
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['data'])===null||$tmp==='' ? '' : $tmp);?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
