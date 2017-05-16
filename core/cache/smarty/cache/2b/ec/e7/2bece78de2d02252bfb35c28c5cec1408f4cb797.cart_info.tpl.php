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
  'unifunc' => 'content_57989c9e78f140_30118756',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989c9e78f140_30118756')) {function content_57989c9e78f140_30118756($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php';
?>
<a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> 
  class="icon-cart-header skip-link" 
  title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;?>
<?php } else { ?>Nákupna taška<?php }?>"
>
  <span class="icon_bag_alt"></span>
  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>
    <span <?php if ($_smarty_tpl->tpl_vars['cart']->value->items>9) {?>class="ci"<?php } else { ?>class="ci centered"<?php }?>>
      <?php echo $_smarty_tpl->tpl_vars['cart']->value->items;?>

    </span>
  <?php }?>
</a>
<div id="navbar-cart" class="cart-wrapper skip-content">
  <div class="cart-content">
    <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
      <ul class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <li class="item">
            <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
            </a>
            <div class="product-details row-fluid show-grid">
              <p class="product-name clearfix">
                <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                </a>        
              </p><!-- end product-name -->
              <p>
                <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

              </p>
              <div class="items clearfix">
                <span class="price">
                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->amount,'.00','');?>
<?php echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                </span>                                            
              </div><!-- end items -->
              <div class="access clearfix">
                <a href="store/remove-article-from-cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->reference;?>
<?php if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->id_value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->id_value;?>
<?php }?>" 
                  class="btn-remove" 
                  title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['title_shopping_bag_remove_item']->value;?>
<?php } else { ?>Odobrať<?php }?>"
                >
                  <i class="fa fa-trash"></i>
                </a>
              </div><!-- end access -->
            </div><!-- end product-details -->
          </li>
        <?php } ?>
      </ul>
      <p class="subtotal">
        <span class="label">
          <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['msg_shopping_bag_total']->value;?>
<?php } else { ?>Celkom<?php }?>:
        </span> 
        <span class="price">
          <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');?>
<?php echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

        </span>                                                            
      </p>
  <?php } else { ?>
    <p class="no-items-in-cart">
      <?php if (isset($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)&&(strlen($_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['msg_shopping_bag_is_empty']->value;?>
<?php } else { ?>Nákupna taška je prázdna.<?php }?>
    </p>
  <?php }?>
  </div><!-- end cart-content -->
  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
    <div class="cart-checkout">
      <a href="nakupna-taska" 
        class="btn btn-block btn-info text-uppercase" 
        style="float: left;height: 35px;line-height: 35px;" 
        title="<?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;?>
<?php } else { ?>Nákupna taška<?php }?>"
      >
        <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
        <span>
          <?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;?>
<?php } else { ?>Nákupna taška<?php }?>
        </span>
      </a>
    </div><!-- end cart-checkout -->
  <?php }?>
</div><!-- end navbar-cart -->
<?php }} ?>
