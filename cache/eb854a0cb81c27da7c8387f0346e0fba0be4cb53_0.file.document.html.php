<?php
/* Smarty version 3.1.30-dev/44, created on 2016-03-12 20:58:43
  from "/var/www/si_ibuhamil/application/views/base/operator/document.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_56e42093b5a972_96169413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb854a0cb81c27da7c8387f0346e0fba0be4cb53' => 
    array (
      0 => '/var/www/si_ibuhamil/application/views/base/operator/document.html',
      1 => 1457781161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e42093b5a972_96169413 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/si_ibuhamil/system/plugins/smarty/libs/plugins/modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='description' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <meta name='keywords' content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <meta name='robots' content='index,follow' />
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['nav_title'])===null||$tmp==='' ? 'Home' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/icon/logo.png" rel="SHORTCUT ICON" />
    <!-- themes style -->
    <?php echo $_smarty_tpl->tpl_vars['LOAD_STYLE']->value;?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" media="screen" />
    <!-- other style -->
</head>
<!-- body -->
<body class="hold-transition skin-green-light sidebar-mini">
    <!-- load javascript -->
    <?php echo $_smarty_tpl->tpl_vars['LOAD_JAVASCRIPT']->value;?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSPATH']->value;?>
"><?php echo '</script'; ?>
>
    <!-- end of javascript	-->
    <!-- layout -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>CS</b>3.1</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>CI</b>smart 3.1</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['com_user']->value['user_name']);?>
</span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/avatar5.png" class="img-circle" alt="User Image">
                              <p>
                                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['com_user']->value['user_name']);?>

                                <small>Member since Nov. 2012</small>
                              </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                              <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                              </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                              <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin/logout_process');?>
" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/avatar5.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['com_user']->value['user_name']);?>
</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_sidebar']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </section>
        </aside>
        <div class="content-wrapper">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>

        <!-- /#page-wrapper -->
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 3.1
        </div>
        <strong>Copyright © 2016 <a target="_blank" href="http://te.net.id">PT. Time Excelindo</a>.</strong>
    </footer>
</div>
<!-- /#wrapper -->
<!-- end of layout	-->
</body>
<!-- end body -->
</html>
<?php }
}
