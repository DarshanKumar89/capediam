<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:23:51
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/ajax/cart_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189508358457432e97645c07-99121064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5435a3487d6d82109f22c1456dea63aaaddc2132' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/ajax/cart_info.tpl',
      1 => 1463585947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189508358457432e97645c07-99121064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 1,
    'item' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432e976ae267_34233706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432e976ae267_34233706')) {function content_57432e976ae267_34233706($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php\';
?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

  <a <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="nakupna-taska"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } else { ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
 class="icon-cart-header skip-link" title="Nákupna taška">
    <span class="icon_bag_alt"></span>
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

      <span <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value->items>9) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
class="ci"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } else { ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
class="ci centered"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
>
        <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->items;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

      </span>
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

  </a>
  <div id="navbar-cart" class="cart-wrapper skip-content">
    <div class="cart-content">
      <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)&&(count($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)>0))) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

        <ul class="clearfix">
          <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart\']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

            <li class="item">
              <a <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->path)>0) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->path;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } else { ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
 class="product-image" title="<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
">
                <img src="<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_url;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
">
              </a>
              <div class="product-details row-fluid show-grid">
                <p class="product-name clearfix">
                  <a <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->path)>0) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->path;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } else { ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
href="#" onclick="return false;"<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
>
                    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

                  </a>        
                </p><!-- end product-name -->
                <p>
                  <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->description;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

                </p>
                <div class="items clearfix">
                  <span class="price">
                    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'item\']->value->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';
echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->sign;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

                  </span>                                            
                </div><!-- end items -->
                <div class="access clearfix">
                  <a href="store/remove-article-from-cart/<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->secure_key;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
/<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->reference;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';
echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if ((isset($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b))) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
/<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_a->id_value;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
/<?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->matrix->par_b->id_value;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';
echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>
" class="btn-remove" title="Odobrať">
                    <i class="fa fa-trash"></i>
                  </a>
                </div><!-- end access -->
              </div><!-- end product-details -->
            </li>
          <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

        </ul>
        <p class="subtotal">
          <span class="label">
            Celkom:
          </span> 
          <span class="price">
            <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'cart\']->value->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';
echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value->sign;?>
/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

          </span>                                                            
        </p>
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php } else { ?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

      <p class="no-items-in-cart">
        Nákupna taška je prázdna.
      </p>
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

    </div><!-- end cart-content -->
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php if (is_object($_smarty_tpl->tpl_vars[\'cart\']->value)&&(is_array($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)&&(count($_smarty_tpl->tpl_vars[\'cart\']->value->articleList)>0))) {?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

      <div class="cart-checkout">
        <a href="nakupna-taska" class="btn btn-block btn-info text-uppercase" style="float: left;height: 35px;line-height: 35px;" title="Nákupna taška">
          <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
          <span>Nákupna taška</span>
        </a>
      </div><!-- end cart-checkout -->
    <?php echo '/*%%SmartyNocache:189508358457432e97645c07-99121064%%*/<?php }?>/*/%%SmartyNocache:189508358457432e97645c07-99121064%%*/';?>

  </div><!-- end navbar-cart -->
<?php }} ?>
