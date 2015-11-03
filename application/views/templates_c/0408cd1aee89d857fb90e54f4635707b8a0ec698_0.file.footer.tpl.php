<?php /* Smarty version 3.1.24, created on 2015-11-03 16:17:27
         compiled from "application/views/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:140104771656387ba7dcf059_81361591%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0408cd1aee89d857fb90e54f4635707b8a0ec698' => 
    array (
      0 => 'application/views/templates/footer.tpl',
      1 => 1446538268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140104771656387ba7dcf059_81361591',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56387ba7dd1556_41637213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56387ba7dd1556_41637213')) {
function content_56387ba7dd1556_41637213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '140104771656387ba7dcf059_81361591';
?>
<!-- Menu Toggle Script -->
<?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
<?php echo '</script'; ?>
>
</body></html><?php }
}
?>