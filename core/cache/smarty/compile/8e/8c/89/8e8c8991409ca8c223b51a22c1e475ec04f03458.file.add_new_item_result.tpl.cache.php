<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:23:51
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/ajax/add_new_item_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59392395357432e970b09c3-54551207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8c8991409ca8c223b51a22c1e475ec04f03458' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/ajax/add_new_item_result.tpl',
      1 => 1464014532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59392395357432e970b09c3-54551207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432e970dc3a3_15930802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432e970dc3a3_15930802')) {function content_57432e970dc3a3_15930802($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_replace\')) include \'/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php\';
?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

<div class="container-fluid" style="min-height: 260px;">
  <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="thumbnail" style="border: none;box-shadow: none;">
          <img src="<?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->image->file_url;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
">
        </div><!-- end thumbnail -->
      </div><!-- end col -->
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h4 class="text-center">
          <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->article->article_name;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

        </h4>
        <table class="table">
          <tbody>
            <tr>
              <td>Cena za 1ks s DPH:</td>
              <td><?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->article->retail_tax_price,\'.00\',\'\');?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';
echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
</td>
            </tr>
            <tr>
              <td>Počet pridaných kusov:</td>
              <td><?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->count;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
ks</td>
            </tr>
            <tr>
              <td>Celková hodnota výberu:</td>
              <td><?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->subtotal,\'.00\',\'\');?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';
echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
</td>
            </tr>
          </tbody>
        </table>
        <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->is_discount==false) {?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

          <p class="text-left delivery-discount-info">
            <strong>DOPRAVU ZDARMA?</strong>&nbsp;<br>
            Nakúpte ešte za: <strong><?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->diff_price;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
</strong>
          </p>
        <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php }?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
      <h4 class="text-center" style="margin-bottom: 35px;padding-left: 5px;">Teraz máte v nákupnej taške</h4>
      <table class="table last">
        <tbody>
          <tr>
            <td>
              <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->cart->items==1) {?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

                1 produkt
              <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php } elseif (($_smarty_tpl->tpl_vars[\'data\']->value->cart->items>1)&&($_smarty_tpl->tpl_vars[\'data\']->value->cart->items<5)) {?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';
echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->items;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

                produkty
              <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php } else { ?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

                <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->items;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
 produktov
              <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php }?>/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
 
              v celkovej cene:</td>
            <td>
              <?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars[\'data\']->value->cart->amount,\'.00\',\'\');?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:59392395357432e970b09c3-54551207%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->cart->sign;?>
/*/%%SmartyNocache:59392395357432e970b09c3-54551207%%*/';?>

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
          Späť do obchodu
        </button>
        <a href="nakupna-taska" class="btn btn-block btn-order pull-left" title="Pokračovať v objednávke">
          <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
          <span class="text-uppercase">Nákupna taška</span>
        </a>
      </div><!-- order-actions -->
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->
<?php }} ?>
