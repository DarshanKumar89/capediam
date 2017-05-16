<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-26 12:00:00
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/route_class_method_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771164003579750c04ce999-28170898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1771164003579750c04ce999-28170898',
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
  'unifunc' => 'content_579750c04e9194_87919579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579750c04e9194_87919579')) {function content_579750c04e9194_87919579($_smarty_tpl) {?><select name="mth" class="form-control select" data-live-search="true" required>
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
