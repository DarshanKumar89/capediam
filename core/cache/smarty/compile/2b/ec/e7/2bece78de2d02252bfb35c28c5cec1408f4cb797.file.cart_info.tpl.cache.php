<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:35:58
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/ajax/cart_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45876192457989c9e70d471-78351680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bece78de2d02252bfb35c28c5cec1408f4cb797' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/ajax/cart_info.tpl',
      1 => 1469548744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45876192457989c9e70d471-78351680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 1,
    'title_shopping_bag' => 1,
    'item' => 1,
    'title_shopping_bag_remove_item' => 1,
    'msg_shopping_bag_total' => 1,
    'msg_shopping_bag_is_empty' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57989c9e783de1_79538016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989c9e783de1_79538016')) {function content_57989c9e783de1_79538016($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php\';
?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

<a <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="nakupna-taska"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
 
  class="icon-cart-header skip-link" 
  title="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Nákupna taška<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
"
>
  <span class="icon_bag_alt"></span>
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

    <span <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value->items>9) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
class="ci"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
class="ci centered"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
>
      <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->items;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

    </span>
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

</a>
<div id="navbar-cart" class="cart-wrapper skip-content">
  <div class="cart-content">
    <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)&&(count($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)>0))) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

      <ul class="clearfix">
        <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart\']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

          <li class="item">
            <a <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->path)>0) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->path;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
 class="product-image" title="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
">
              <img src="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_url;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
">
            </a>
            <div class="product-details row-fluid show-grid">
              <p class="product-name clearfix">
                <a <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->path)>0) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->path;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
>
                  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

                </a>        
              </p><!-- end product-name -->
              <p>
                <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->description;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

              </p>
              <div class="items clearfix">
                <span class="price">
                  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'item\']->value->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->sign;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

                </span>                                            
              </div><!-- end items -->
              <div class="access clearfix">
                <a href="store/remove-article-from-cart/<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->secure_key;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
/<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->reference;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if ((isset($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b))) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
/<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a->id_value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
/<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b->id_value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
" 
                  class="btn-remove" 
                  title="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag_remove_item\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag_remove_item\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag_remove_item\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Odobrať<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
"
                >
                  <i class="fa fa-trash"></i>
                </a>
              </div><!-- end access -->
            </div><!-- end product-details -->
          </li>
        <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

      </ul>
      <p class="subtotal">
        <span class="label">
          <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'msg_shopping_bag_total\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'msg_shopping_bag_total\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'msg_shopping_bag_total\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Celkom<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
:
        </span> 
        <span class="price">
          <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'cart\']->value->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->sign;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

        </span>                                                            
      </p>
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

    <p class="no-items-in-cart">
      <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'msg_shopping_bag_is_empty\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'msg_shopping_bag_is_empty\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'msg_shopping_bag_is_empty\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Nákupna taška je prázdna.<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

    </p>
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

  </div><!-- end cart-content -->
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)&&(count($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)>0))) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

    <div class="cart-checkout">
      <a href="nakupna-taska" 
        class="btn btn-block btn-info text-uppercase" 
        style="float: left;height: 35px;line-height: 35px;" 
        title="<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Nákupna taška<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
"
      >
        <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
        <span>
          <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)>0)) {?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value;?>
/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';
echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php } else { ?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>
Nákupna taška<?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

        </span>
      </a>
    </div><!-- end cart-checkout -->
  <?php echo '/*%%SmartyNocache:45876192457989c9e70d471-78351680%%*/<?php }?>/*/%%SmartyNocache:45876192457989c9e70d471-78351680%%*/';?>

</div><!-- end navbar-cart -->
<?php }} ?>
