<?php /*%%SmartyHeaderCode:92021150587326401f8045-87362553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129db11b45ec07aa8e39c87d7789fc21319652c0' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_edit_form_modal.tpl',
      1 => 1469707251,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '92021150587326401f8045-87362553',
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
  'unifunc' => 'content_587326405a8021_31424683',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587326405a8021_31424683')) {function content_587326405a8021_31424683($_smarty_tpl) {?><style>
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
        <input type="hidden" name="whId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_wh;?>
" />
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_edit']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_edit']->value, 'UTF-8');?>
<?php } else { ?>EDIT WAREHOUSE<?php }?>:&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
</strong>
            </h3>
            <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
          </div><!-- end panel-heading -->
          <div id="ow" class="panel-body panel-body-form">
            <div class="row ovl">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="txt">
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value;?>
<?php } else { ?>Processing, please wait ...<?php }?>
                </p>
              </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 style="border-bottom:1px solid blue;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_general']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_general']->value, 'UTF-8');?>
<?php } else { ?>GENERAL<?php }?></h4>
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_name']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_name']->value, 'UTF-8');?>
<?php } else { ?>WAREHOUSE NAME<?php }?>
                    <span style="color:red;">*</span>
                  </label>
                  <input type="text" name="w-name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" class="form-control" minlength="3" maxlength="150" required>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>COUNTRY<?php }?>
                  </label>
                  <select name="w-country" class="form-control select" data-live-search="true">
                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_wh_country==$_smarty_tpl->tpl_vars['item']->value->id_lang) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>STREET<?php }?>
                  </label>
                  <input type="text" name="w-street" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->street;?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>ZIP / POSTAL CODE<?php }?>
                  </label>
                  <input type="text" name="w-zip" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->zip;?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>PHONE 1<?php }?>
                  </label>
                  <input type="text" name="w-phone-one" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->phone_1;?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>PHONE 2<?php }?>
                  </label>
                  <input type="text" name="w-phone-two" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->phone_2;?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>FAX<?php }?>
                  </label>
                  <input type="text" name="w-fax" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->fax;?>
" class="form-control">
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['store_warehouse_']->value, 'UTF-8');?>
<?php } else { ?>EMAIL<?php }?>
                  </label>
                  <input type="email" name="w-email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->email;?>
" class="form-control">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 style="border-bottom:1px solid #33414e;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_settings']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_settings']->value, 'UTF-8');?>
<?php } else { ?>SETTINGS<?php }?></h4>
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_label_type']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_label_type']->value;?>
<?php } else { ?>Warehouse type<?php }?>
                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="w-type" class="form-control select" required>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==1) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_global']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_global']->value;?>
<?php } else { ?>Central<?php }?>
                    </option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==2) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_physical']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_physical']->value;?>
<?php } else { ?>Physical<?php }?>
                    </option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_type==3) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_virtual']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_virtual']->value;?>
<?php } else { ?>Virtual<?php }?>
                    </option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_label_usage']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_label_usage']->value;?>
<?php } else { ?>Warehouse usage<?php }?>
                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="w-usage" class="form-control select" required>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_usage==0) {?>selected<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_usage==1) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_online_store']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_online_store']->value;?>
<?php } else { ?>Online store<?php }?>
                    </option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_usage==2) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_retail_store']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_retail_store']->value;?>
<?php } else { ?>Retail store<?php }?>
                    </option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_usage==3) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_reseller']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_reseller']->value;?>
<?php } else { ?>Reseller<?php }?>
                    </option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_usage==4) {?>selected<?php }?>>
                      <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_option_transport']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_option_transport']->value;?>
<?php } else { ?>Forwarding and Transportation<?php }?>
                    </option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_label_currency']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_label_currency']->value;?>
<?php } else { ?>Currency<?php }?>
                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="currency" class="form-control select" data-live-search="true" required>
                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_currency;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_currency==$_smarty_tpl->tpl_vars['item']->value->id_currency) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->currency_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_label_tax']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_label_tax']->value;?>
<?php } else { ?>Tax<?php }?>
                    <span style="color:red;">*</span>
                  </label>                                                                              
                  <select name="tax" class="form-control select" data-live-search="true" required>
                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_tax;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_tax==$_smarty_tpl->tpl_vars['item']->value->id_tax) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->tax_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['store_warehouse_available_country']->value)) {?><?php echo $_smarty_tpl->tpl_vars['store_warehouse_available_country']->value;?>
<?php } else { ?>Available for country<?php }?>
                  </label>
                  <select name="country[]" class="form-control select" data-live-search="true" multiple>
                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value->country[$_smarty_tpl->tpl_vars['item']->value->id_lang])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end panel-body -->
          <div class="panel-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');?>
<?php } else { ?>SAVE CHANGES<?php }?>
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');?>
<?php } else { ?>CLOSE<?php }?>
            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      </form>
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end modal-lyr -->
<?php }} ?>
