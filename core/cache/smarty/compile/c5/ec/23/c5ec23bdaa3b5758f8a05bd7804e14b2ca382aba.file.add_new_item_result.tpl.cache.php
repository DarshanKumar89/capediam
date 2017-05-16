<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:35:58
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/app/themes/default/store/ajax/add_new_item_result.tpl" */ ?>
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
    'label_back_to_store' => 1,
    'title_shopping_bag' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57989c9e130a96_08644842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989c9e130a96_08644842')) {function content_57989c9e130a96_08644842($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.replace.php\';
?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

<div class="container-fluid" style="min-height: 260px;">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="thumbnail" style="border: none;box-shadow: none;">
          <img src="<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->image->file_url;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
">
        </div><!-- end thumbnail -->
      </div><!-- end col -->
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h4 class="text-center">
          <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

        </h4>
        <table class="table">
          <tbody>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_price_per_a_piece\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Cena za 1ks s DPH<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->article->retail_tax_price,\'.00\',\'\');?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
</td>
            </tr>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_number_of_units_sold\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Počet pridaných kusov<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->count;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
ks</td>
            </tr>
            <tr>
              <td>
                <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_total_value_of_choice\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Celková hodnota výberu<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
:
              </td>
              <td><?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->subtotal,\'.00\',\'\');?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
</td>
            </tr>
          </tbody>
        </table>
        <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->is_discount==false) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

          <p class="text-left delivery-discount-info">
            <strong>
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_q_free_delivery\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
DOPRAVU ZDARMA<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
?
            </strong>&nbsp;<br>
            <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_info_free_delivery\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Nakúpte ešte za<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
: 
            <strong>
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->diff_price;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

            </strong>
          </p>
        <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
      <h4 class="text-center" style="margin-bottom: 35px;padding-left: 5px;">Teraz máte v nákupnej taške</h4>
      <table class="table last">
        <tbody>
          <tr>
            <td>
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->cart->items==1) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

                1 produkt
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } elseif (($_smarty_tpl->tpl_vars[\'data\']->value->cart->items>1)&&($_smarty_tpl->tpl_vars[\'data\']->value->cart->items<5)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->items;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

                produkty
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

                <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->items;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
 produktov
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
 
              v celkovej cene:</td>
            <td>
              <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->cart->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

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
          <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'label_back_to_store\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'label_back_to_store\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'label_back_to_store\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Späť do obchodu<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

        </button>
        <a href="nakupna-taska" class="btn btn-block btn-order pull-left" title="Pokračovať v objednávke">
          <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
          <span class="text-uppercase">
            <?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)&&(strlen($_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value)>0)) {?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php echo $_smarty_tpl->tpl_vars[\'title_shopping_bag\']->value;?>
/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';
echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php } else { ?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>
Nákupna taška<?php echo '/*%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/<?php }?>/*/%%SmartyNocache:69589943757989c9e0f88c7-17417787%%*/';?>

          </span>
        </a>
      </div><!-- order-actions -->
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->
<?php }} ?>
