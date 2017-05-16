<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-01 11:04:39
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/messenger/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1303672037581868b78cd065-64563492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1303672037581868b78cd065-64563492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert_class' => 0,
    'header' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_581868b78f4405_87082770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581868b78f4405_87082770')) {function content_581868b78f4405_87082770($_smarty_tpl) {?><div class="alert <?php echo $_smarty_tpl->tpl_vars['alert_class']->value;?>
" role="alert">
    <strong><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
!</strong>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div><?php }} ?>
