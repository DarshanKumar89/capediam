<?php /*%%SmartyHeaderCode:69589943757989c9e0f88c7-17417787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ec23bdaa3b5758f8a05bd7804e14b2ca382aba' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/ajax/add_new_item_result.tpl',
      1 => 1469548744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69589943757989c9e0f88c7-17417787',
  'variables' => 
  array (
    'data' => 1,
    'label_info_price_per_a_piece' => 1,
    'label_info_number_of_units_sold' => 1,
    'label_info_total_value_of_choice' => 1,
    'label_q_free_delivery' => 1,
    'label_info_free_delivery' => 1,
    'label_back_to_store' => 1,
    'title_shopping_bag' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57989c9e138e87_27380211',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989c9e138e87_27380211')) {function content_57989c9e138e87_27380211($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php';
?>
<div class="container-fluid" style="min-height: 260px;">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="thumbnail" style="border: none;box-shadow: none;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value->article->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value->article->article_name;?>
">
        </div><!-- end thumbnail -->
      </div><!-- end col -->
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h4 class="text-center">
          <?php echo $_smarty_tpl->tpl_vars['data']->value->article->article_name;?>

        </h4>
        <table class="table">
          <tbody>
            <tr>
              <td>
                <?php if (isset($_smarty_tpl->tpl_vars['label_info_price_per_a_piece']->value)&&(strlen($_smarty_tpl->tpl_vars['label_info_price_per_a_piece']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_info_price_per_a_piece']->value;?>
<?php } else { ?>Cena za 1ks s DPH<?php }?>:
              </td>
              <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value->article->retail_tax_price,'.00','');?>
<?php echo $_smarty_tpl->tpl_vars['data']->value->cart->sign;?>
</td>
            </tr>
            <tr>
              <td>
                <?php if (isset($_smarty_tpl->tpl_vars['label_info_number_of_units_sold']->value)&&(strlen($_smarty_tpl->tpl_vars['label_info_number_of_units_sold']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_info_number_of_units_sold']->value;?>
<?php } else { ?>Počet pridaných kusov<?php }?>:
              </td>
              <td><?php echo $_smarty_tpl->tpl_vars['data']->value->count;?>
ks</td>
            </tr>
            <tr>
              <td>
                <?php if (isset($_smarty_tpl->tpl_vars['label_info_total_value_of_choice']->value)&&(strlen($_smarty_tpl->tpl_vars['label_info_total_value_of_choice']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_info_total_value_of_choice']->value;?>
<?php } else { ?>Celková hodnota výberu<?php }?>:
              </td>
              <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value->subtotal,'.00','');?>
<?php echo $_smarty_tpl->tpl_vars['data']->value->cart->sign;?>
</td>
            </tr>
          </tbody>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['data']->value->is_discount==false) {?>
          <p class="text-left delivery-discount-info">
            <strong>
              <?php if (isset($_smarty_tpl->tpl_vars['label_q_free_delivery']->value)&&(strlen($_smarty_tpl->tpl_vars['label_q_free_delivery']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_q_free_delivery']->value;?>
<?php } else { ?>DOPRAVU ZDARMA<?php }?>?
            </strong>&nbsp;<br>
            <?php if (isset($_smarty_tpl->tpl_vars['label_info_free_delivery']->value)&&(strlen($_smarty_tpl->tpl_vars['label_info_free_delivery']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_info_free_delivery']->value;?>
<?php } else { ?>Nakúpte ešte za<?php }?>: 
            <strong>
              <?php echo $_smarty_tpl->tpl_vars['data']->value->diff_price;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value->cart->sign;?>

            </strong>
          </p>
        <?php }?>
      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
      <h4 class="text-center" style="margin-bottom: 35px;padding-left: 5px;">Teraz máte v nákupnej taške</h4>
      <table class="table last">
        <tbody>
          <tr>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['data']->value->cart->items==1) {?>
                1 produkt
              <?php } elseif (($_smarty_tpl->tpl_vars['data']->value->cart->items>1)&&($_smarty_tpl->tpl_vars['data']->value->cart->items<5)) {?><?php echo $_smarty_tpl->tpl_vars['data']->value->cart->items;?>

                produkty
              <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value->cart->items;?>
 produktov
              <?php }?> 
              v celkovej cene:</td>
            <td>
              <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value->cart->amount,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value->cart->sign;?>

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
          <?php if (isset($_smarty_tpl->tpl_vars['label_back_to_store']->value)&&(strlen($_smarty_tpl->tpl_vars['label_back_to_store']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['label_back_to_store']->value;?>
<?php } else { ?>Späť do obchodu<?php }?>
        </button>
        <a href="nakupna-taska" class="btn btn-block btn-order pull-left" title="Pokračovať v objednávke">
          <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
          <span class="text-uppercase">
            <?php if (isset($_smarty_tpl->tpl_vars['title_shopping_bag']->value)&&(strlen($_smarty_tpl->tpl_vars['title_shopping_bag']->value)>0)) {?><?php echo $_smarty_tpl->tpl_vars['title_shopping_bag']->value;?>
<?php } else { ?>Nákupna taška<?php }?>
          </span>
        </a>
      </div><!-- order-actions -->
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->
<?php }} ?>
