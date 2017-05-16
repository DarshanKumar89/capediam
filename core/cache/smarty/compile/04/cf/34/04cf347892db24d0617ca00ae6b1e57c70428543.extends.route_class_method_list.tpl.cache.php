<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-20 15:19:25
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/router/ajax/route_class_method_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:840364718573f2afd0d4298-54714186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '840364718573f2afd0d4298-54714186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'methodList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_573f2afd0fb2b7_25961976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f2afd0fb2b7_25961976')) {function content_573f2afd0fb2b7_25961976($_smarty_tpl) {?><select name="mth" class="form-control select" data-live-search="true" required>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['methodList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
    <?php } ?>
</select><?php }} ?>
