<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-13 01:35:51
  from "/var/www/si_ibuhamil/application/views/tes/tes/tes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56e46187d77374_04156775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9da862087bd87e20f2994a58886ff48637a65c42' => 
    array (
      0 => '/var/www/si_ibuhamil/application/views/tes/tes/tes.html',
      1 => 1457807744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e46187d77374_04156775 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(document).ready(function($) {
    if ($(".pagination li").last().hasClass('active')) {
        $('.btn-next').html("Simpan");
    }
});
<?php echo '</script'; ?>
>
<style media="screen">
.pertanyaan{
    margin-bottom: 15px;
}
.pertanyaan span{
    font-size: 16px;
}
</style>
<section class="content-header">
    <h1>
        Lakukan Tes
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-ambulance"></i> Tes HB</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/tes/');?>
"> List Pasien</a></li>
        <li class="active">Pertanyaan</li>
    </ol>
</section>
<section class="content ">
    <div class="row">
        <div class="col-md-12" style="margin-bottom:15px;">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['data'])===null||$tmp==='' ? '' : $tmp);?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                    
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username"><?php echo $_smarty_tpl->tpl_vars['pasien']->value['pasien_nm'];?>
</h3>
                <h5 class="widget-user-desc"><?php echo $_smarty_tpl->tpl_vars['pasien']->value['pasien_pekerjaan'];?>
</h5>
            </div>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">Tingkat HB terakhir <span class="pull-right badge bg-blue">31</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    <div class="col-md-8">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Pertanyaan No. <?php echo $_smarty_tpl->tpl_vars['no']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</h3>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/tes/process_tes');?>
" method="post">
                <input type="hidden" id="redirect" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('tes/tes/tes');?>
/<?php echo $_smarty_tpl->tpl_vars['pasien']->value['id_pasien'];?>
/index/<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
">
                <div class="box-body">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_pertanyaan']->value, 'pertanyaan', false, 'key');
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pertanyaan']->value) {
$_smarty_tpl->tpl_vars['pertanyaan']->_loop = true;
$__foreach_pertanyaan_0_saved = $_smarty_tpl->tpl_vars['pertanyaan'];
?>
                    <div class="row pertanyaan">
                        <div class="col-md-12">
                            <span><b><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
. </b><?php echo $_smarty_tpl->tpl_vars['pertanyaan']->value['nama_konsul'];?>
</span>
                            <input type="hidden" name="pertanyaan[]" value="<?php echo $_smarty_tpl->tpl_vars['pertanyaan']->value['id_konsul'];?>
">
                        </div>
                        <div class="col-md-12 jawaban">
                            <label class="radio-inline">
                                <input type="radio" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['jawaban']->value[$_smarty_tpl->tpl_vars['pertanyaan']->value['id_konsul']])===null||$tmp==='' ? '-1' : $tmp) == 1) {?>checked<?php }?> name="jawaban[<?php echo $_smarty_tpl->tpl_vars['pertanyaan']->value['id_konsul'];?>
]" id="inlineRadio1" value="1"> Ya
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['jawaban']->value[$_smarty_tpl->tpl_vars['pertanyaan']->value['id_konsul']])===null||$tmp==='' ? '-1' : $tmp) == 0) {?>checked<?php }?> name="jawaban[<?php echo $_smarty_tpl->tpl_vars['pertanyaan']->value['id_konsul'];?>
]" id="inlineRadio2" value="0"> Tidak
                            </label>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['pertanyaan'] = $__foreach_pertanyaan_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                </div>
                <div class="box-footer">
                    <button class="btn btn-success pull-right btn-next">Selanjutnya &rsaquo;&rsaquo;</button>
                </div>
            </form>
            <!-- /.box-body -->
        </div>
    </div>
</div>
</section>
<?php }
}
