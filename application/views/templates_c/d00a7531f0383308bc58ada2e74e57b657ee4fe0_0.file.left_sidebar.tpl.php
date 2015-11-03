<?php /* Smarty version 3.1.24, created on 2015-11-03 22:58:58
         compiled from "application/views/templates/left_sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18874941625638d9c2d88606_76837092%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00a7531f0383308bc58ada2e74e57b657ee4fe0' => 
    array (
      0 => 'application/views/templates/left_sidebar.tpl',
      1 => 1446566330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18874941625638d9c2d88606_76837092',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5638d9c2dab5d0_26229724',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5638d9c2dab5d0_26229724')) {
function content_5638d9c2dab5d0_26229724 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18874941625638d9c2d88606_76837092';
?>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Quản lý tài khoản</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Tạo đơn</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Đăng ký thực tập</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Xin giấy giới thiệu</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper --><?php }
}
?>