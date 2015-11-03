<?php /* Smarty version 3.1.24, created on 2015-11-03 22:56:21
         compiled from "application/views/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4199925595638d925f03db1_06187060%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd891d49ef3a9279536d61a6d8a260fe0d1b3b006' => 
    array (
      0 => 'application/views/templates/home.tpl',
      1 => 1446539153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4199925595638d925f03db1_06187060',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5638d925f2cb36_80513990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5638d925f2cb36_80513990')) {
function content_5638d925f2cb36_80513990 ($_smarty_tpl) {
if (!is_callable('smarty_function_ci_config')) require_once '/var/www/html/docprocess/system/libraries/smarty-3.1.24/plugins/function.ci_config.php';

$_smarty_tpl->properties['nocache_hash'] = '4199925595638d925f03db1_06187060';
echo smarty_function_ci_config(array('name'=>"base_url"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("left_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>