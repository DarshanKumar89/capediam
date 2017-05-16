<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-09 06:57:20
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_edit_form_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92021150587326401f8045-87362553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '92021150587326401f8045-87362553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 1,
    'store_warehouse_edit' => 1,
    'global_info_processing_please_wait' => 1,
    'global_form_header_general' => 1,
    'store_warehouse_name' => 1,
    'store_warehouse_' => 1,
    'global_form_select_choose' => 1,
    'countryList' => 1,
    'item' => 1,
    'global_form_header_settings' => 1,
    'store_warehouse_label_type' => 1,
    'store_warehouse_option_global' => 1,
    'store_warehouse_option_physical' => 1,
    'store_warehouse_option_virtual' => 1,
    'store_warehouse_label_usage' => 1,
    'store_warehouse_option_online_store' => 1,
    'store_warehouse_option_retail_store' => 1,
    'store_warehouse_option_reseller' => 1,
    'store_warehouse_option_transport' => 1,
    'store_label_currency' => 1,
    'currencyList' => 1,
    'store_label_tax' => 1,
    'taxList' => 1,
    'store_warehouse_available_country' => 1,
    'global_form_button_save_changes' => 1,
    'global_form_button_close' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_587326405731f8_27539689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587326405731f8_27539689')) {function content_587326405731f8_27539689($_smarty_tpl) {?>
<style>
  #modal-lyr {
    position: relative;
  }

  #ael {
    display: none;
    margin: 15px 0 0 0;
  }
  #ow {
    position: relative;
    min-height: 577px;
    z-index: 100;
  }
  #messenger {
    display: none;
    margin: 15px 0 0 0;
  }
  .ovl {
      background: rgba(0,0,0,.8);
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      z-index: 9999;
  }
  .ovl p.txt {
      margin: 300px auto 0 auto;
      font-size: 3em;
      letter-spacing: .1em;
      text-align: center;
      color: #fff;
  }
</style>
<div id="modal-lyr">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <form action="cpanel/store-update-warehouse" method="post" role="form">
        <input type="hidden" name="whId" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->id_wh;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" />
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_edit\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_edit\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
EDIT WAREHOUSE<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
:&nbsp;<strong><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</strong>
            </h3>
            <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
          </div><!-- end panel-heading -->
          <div id="ow" class="panel-body panel-body-form">
            <div class="row ovl">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="txt">
                  <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_info_processing_please_wait\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_info_processing_please_wait\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Processing, please wait ...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                </p>
              </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 style="border-bottom:1px solid blue;"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_header_general\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_header_general\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
GENERAL<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</h4>
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_name\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_name\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
WAREHOUSE NAME<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    <span style="color:red;">*</span>
                  </label>
                  <input type="text" name="w-name" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control" minlength="3" maxlength="150" required>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
COUNTRY<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <select name="w-country" class="form-control select" data-live-search="true">
                    <option value="0"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'countryList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                      <option value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_lang;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_wh_country==$_smarty_tpl->tpl_vars[\'item\']->value->id_lang) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->country_name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
STREET<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="text" name="w-street" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->street;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
ZIP / POSTAL CODE<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="text" name="w-zip" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->zip;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
PHONE 1<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="text" name="w-phone-one" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->phone_1;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
PHONE 2<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="text" name="w-phone-two" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->phone_2;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
FAX<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="text" name="w-fax" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->fax;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'store_warehouse_\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
EMAIL<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <input type="email" name="w-email" value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value->email;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" class="form-control">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 style="border-bottom:1px solid #33414e;"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_header_settings\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_header_settings\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
SETTINGS<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</h4>
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_label_type\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_label_type\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Warehouse type<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="w-type" class="form-control select" required>
                    <option value="0" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_type==0) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <option value="1" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_type==1) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_global\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_global\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Central<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                    <option value="2" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_type==2) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_physical\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_physical\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Physical<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                    <option value="3" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_type==3) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_virtual\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_virtual\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Virtual<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_label_usage\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_label_usage\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Warehouse usage<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="w-usage" class="form-control select" required>
                    <option value="0" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_usage==0) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <option value="1" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_usage==1) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_online_store\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_online_store\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Online store<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                    <option value="2" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_usage==2) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_retail_store\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_retail_store\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Retail store<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                    <option value="3" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_usage==3) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_reseller\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_reseller\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Reseller<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                    <option value="4" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_usage==4) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
>
                      <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_option_transport\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_option_transport\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Forwarding and Transportation<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    </option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_label_currency\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_label_currency\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Currency<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="currency" class="form-control select" data-live-search="true" required>
                    <option value="0"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'currencyList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                      <option value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_currency;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_currency==$_smarty_tpl->tpl_vars[\'item\']->value->id_currency) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->currency_name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_label_tax\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_label_tax\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Tax<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="tax" class="form-control select" data-live-search="true" required>
                    <option value="0"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'taxList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                      <option value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_tax;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value->id_tax==$_smarty_tpl->tpl_vars[\'item\']->value->id_tax) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->tax_name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'store_warehouse_available_country\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_warehouse_available_country\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Available for country<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </label>
                  <select name="country[]" class="form-control select" data-live-search="true" multiple>
                    <option value="0"><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'countryList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                      <option value="<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_lang;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
" <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'data\']->value->country[$_smarty_tpl->tpl_vars[\'item\']->value->id_lang])) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
selected<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
><?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->country_name;?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
</option>
                    <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end panel-body -->
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_save_changes\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
SAVE CHANGES<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              <?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_button_close\']->value)) {?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_form_button_close\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';
echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php } else { ?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>
CLOSE<?php echo '/*%%SmartyNocache:92021150587326401f8045-87362553%%*/<?php }?>/*/%%SmartyNocache:92021150587326401f8045-87362553%%*/';?>

            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      </form>
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end modal-lyr -->
<?php }} ?>
