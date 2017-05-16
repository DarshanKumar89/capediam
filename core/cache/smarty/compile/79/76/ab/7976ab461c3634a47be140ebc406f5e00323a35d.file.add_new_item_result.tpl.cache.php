<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-29 17:06:25
         compiled from "/var/www/public/carpedmfashion.com/app/themes/default/store/ajax/add_new_item_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2127581151588e13010e5160-98000450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7976ab461c3634a47be140ebc406f5e00323a35d' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/default/store/ajax/add_new_item_result.tpl',
      1 => 1473949415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127581151588e13010e5160-98000450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 1,
    'label_info_price_per_a_piece' => 1,
    'label_info_number_of_units_sold' => 1,
    'label_info_total_value_of_choice' => 1,
    'label_q_free_delivery' => 1,
    'label_info_free_delivery' => 1,
    'modal_add_item_to_cart_title' => 1,
    'modal_add_item_to_cart_products' => 1,
    'modal_add_item_to_cart_total_amount' => 1,
    'label_back_to_store' => 1,
    'title_shopping_bag' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588e13011b6680_55894532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588e13011b6680_55894532')) {function content_588e13011b6680_55894532($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php\';
?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

<div class="container-fluid" style="min-height: 260px;">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="thumbnail" style="border: none;box-shadow: none;">
          <img src="<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->image->file_url;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
">
        </div><!-- end thumbnail -->
      </div><!-- end col -->
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h4 class="text-center">
          <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

        </h4>
        <table class="table">
          <tbody>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Cena za 1ks s DPH<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->article->retail_tax_price,\'.00\',\'\');?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
</td>
            </tr>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Počet pridaných kusov<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->count;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
ks</td>
            </tr>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Celková hodnota výberu<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->subtotal,\'.00\',\'\');?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
</td>
            </tr>
          </tbody>
        </table>
        <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->is_discount==false) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

          <p class="text-left delivery-discount-info">
            <strong>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
DOPRAVU ZDARMA<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
?
            </strong>&nbsp;<br>
            <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Nakúpte ešte za<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
: 
            <strong>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->diff_price;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

            </strong>
          </p>
        <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
      <h4 class="text-center" style="margin-bottom: 35px;padding-left: 5px;">
        <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_title\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_title\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

          <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_title\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

        <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

          Teraz máte v nákupnej taške
        <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

      </h4>
      <table class="table last">
        <tbody>
          <tr>
            <td>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_products\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_products\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

                <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_products\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

                Produktov
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

            </td>
            <td>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->items;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

            </td>
          </tr>
            <td>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_total_amount\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_total_amount\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

                <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'modal_add_item_to_cart_total_amount\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

                V celkovej hodnote
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

            </td>
            <td>
              <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->cart->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

            </td>
          </tr>
        </tbody>
      </table>  
    </div><!-- end col -->
  </div><!-- end row -->
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;overflow: hidden;">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-back text-uppercase pull-left" data-dismiss="modal">
          <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_back_to_store\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_back_to_store\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_back_to_store\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Späť do obchodu<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

        </button>
        <a href="nakupna-taska" class="btn btn-block btn-order pull-left" title="Pokračovať v objednávke">
          <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
          <span class="text-uppercase">
            <?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)>0)) {?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value;?>
/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';
echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php } else { ?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>
Nákupna taška<?php echo '/*%%SmartyNocache:2127581151588e13010e5160-98000450%%*/<?php }?>/*/%%SmartyNocache:2127581151588e13010e5160-98000450%%*/';?>

          </span>
        </a>
      </div><!-- order-actions -->
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->
<?php }} ?>
