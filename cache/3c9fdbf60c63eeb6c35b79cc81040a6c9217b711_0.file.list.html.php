<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-12 23:07:04
  from "/var/www/si_ibuhamil/application/views/tes/tes/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56e43ea8383671_03419027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9fdbf60c63eeb6c35b79cc81040a6c9217b711' => 
    array (
      0 => '/var/www/si_ibuhamil/application/views/tes/tes/list.html',
      1 => 1457798819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_56e43ea8383671_03419027 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header">
    <h1>
        Lakukan Tes HB
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-ambulance"></i> Tes HB</a></li>
        <li class="active">Pasien</li>
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
                    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('master/pasien/search_process');?>
" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pasien_nm" class="col-sm-3 control-label">Nama Pasien</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="pasien_nm" class="form-control" id="pasien_nm" placeholder="-- semua --" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['search']->value['pasien_nm'])===null||$tmp==='' ? '' : $tmp);?>
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
                    <h3 class="box-title">Tabel Data Pasien</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="20%">No. Identitas</th>
                                <th width="*">Nama Pasien</th>
                                <th width="20%">Action</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result');
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_0_saved = $_smarty_tpl->tpl_vars['result'];
?>
                            <tr>
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['no_identitas'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['pasien_nm'];?>
</td>
                                <td align="center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/tes/tes');?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_pasien'];?>
" class="btn btn-xs btn-success"><i class="fa fa-edit"></i>&nbsp; Lakukan Tes</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/tes/graph');?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_pasien'];?>
" class="btn btn-xs btn-primary"><i class="fa fa-bar-chart-o"></i>&nbsp; Grafik</a>
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
                    <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['total'])===null||$tmp==='' ? '0' : $tmp);?>
</strong> Data
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['data'])===null||$tmp==='' ? '' : $tmp);?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
