<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-19 13:56:10
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/email/ajax/email_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176684757557dfd25af3c838-19961784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '176684757557dfd25af3c838-19961784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emailTags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57dfd25b02d118_14175000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd25b02d118_14175000')) {function content_57dfd25b02d118_14175000($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['emailTags']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emailTags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
        <span class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</span>
    <?php } ?>
<?php }?><?php }} ?>
