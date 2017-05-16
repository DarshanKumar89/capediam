<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-23 11:28:44
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/ajax/cart_item_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100110895258356f5c670537-29152833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '100110895258356f5c670537-29152833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'store_carts_alert_no_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58356f5c6aa012_54377571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356f5c6aa012_54377571')) {function content_58356f5c6aa012_54377571($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
    <table class="table table-bordered table-striped table-actions" style="margin: 0;">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">IMAGE</th>
                <th class="text-left">ARTICLE NAME</th>
                <th class="text-center">QTY</th>
                <th class="text-center">PRICE PER KS</th>
                <th class="text-center">TOTAL AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <tr>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                    <td class="text-center">
                        <img src="thumbnail/<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_hash;?>
/auto/51" height="51" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                    </td>
                    <td class="text-left">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                    </td>
                    <td class="text-center">
                        <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
</strong>
                    </td>
                    <td class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
&euro;
                    </td>
                    <td class="text-center">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
&euro;
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    <div class="alert alert-info" role="alert">
        <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
        <?php if (!empty($_smarty_tpl->tpl_vars['store_carts_alert_no_items']->value)) {
echo $_smarty_tpl->tpl_vars['store_carts_alert_no_items']->value;
} else { ?>There are no items.<?php }?>
    </div>
<?php }?><?php }} ?>
