<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-30 09:33:20
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_attr_v_list_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1203905588efa5100e961-35666032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1203905588efa5100e961-35666032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attrList' => 0,
    'store_section_attributes' => 0,
    'global_alert_please_wait' => 0,
    'global_form_select_choose' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'global_form_button_close' => 0,
    'store_attributes_alert_no_attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588efa510d23b6_71532270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa510d23b6_71532270')) {function content_588efa510d23b6_71532270($_smarty_tpl) {?><style>
    #modal-lyr {
      position: relative;
    }
    #messenger {
      display: none;
      margin: 15px 0 0 0;
    }
    #ow {
      position: relative;
      min-height: 1px;
      z-index: 100;
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
      margin: 2.7em auto 0 auto;
      font-size: 1.5em;
      letter-spacing: .1em;
      text-align: center;
      color: #fff;
    }
    .circ-idc {
      background: #FFFFFF;
      display: inline-block;
      position: absolute;
      top: .45px;
      right: 10px;
      width: 25px;
      height: 25px;
      margin: 1px;
      padding: 0;
      border-radius: 100%;
    }
    #pop {
      position: relative;
      width: 100%;
      min-height: 1px;
      max-height: 502px;
      overflow: hidden;
      overflow-x: hidden;
      overflow-y: auto;
    }
    #addParXCL,
    #addParXF {
      display: none;
    }
</style>
<div id="modal-lyr">
  <div class="f-img"><!-- --></div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php if (count($_smarty_tpl->tpl_vars['attrList']->value)>0) {?>
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <?php if (!empty($_smarty_tpl->tpl_vars['store_section_attributes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_attributes']->value, 'UTF-8');
} else { ?>ATTRIBUTES<?php }?>
            </h3>
            <div id="messenger" class="alert pull-right" role="alert"><!-- --></div>
          </div>
          <div id="ow" class="panel-body panel-body-table panel-body-form">
            <div class="ovl row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="txt"><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_please_wait']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_please_wait']->value;
} else { ?>Please wait<?php }?>...</p>
              </div>
            </div><!-- end row -->
            <div class="row" style="margin: 15px auto;">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group x-ar">
                  <select id="alc" name="alc" class="form-control select" data-style="btn-info" data-live-search="true">
                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attrList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_attribute;?>
" data-subtext="<?php echo $_smarty_tpl->tpl_vars['item']->value->total;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
              <div id="pop" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-warning" role="alert">
                  <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
                  Zvoľte si atribút, ktorého hodnoty chcete pridať.
                </div><!-- end alert -->
              </div><!-- end pop -->
            </div><!-- end row -->
          </div><!-- end panel-body -->
          <div class="panel-footer">
            <button type="button" id="addParXCL" class="btn btn-success">
              PRIDAŤ VYBRATÉ HODNOTY
            </button>
            <button type="button" id="addParXF" class="btn btn-primary">
              PRIDAŤ VŠETKY HODNOTY
            </button>
            <button type="button" class="btn btn-default btn-close pull-right" data-dismiss="modal">
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      <?php } else { ?>
        <div class="alert alert-info" role="alert">
          <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_alert_no_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_attributes_alert_no_attributes']->value;
} else { ?>You have no attributes.<?php }?>
        </div>
      <?php }?>
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end modal-lyr -->
<?php echo '<script'; ?>
>
$(function() {
  if($(".select").length > 0) {
    $(".select").selectpicker();

    $(".select").on("change", function () {
      if ($(this).val() == "" || null === $(this).val()) {
        if(!$(this).attr("multiple")) {
          $(this).val("").find("option").removeAttr("selected").prop("selected", false);
        }
      } else {
        $(this).find("option[value=" + $(this).val() + "]").attr("selected", true);
      }
    });
  }
});
<?php echo '</script'; ?>
><?php }} ?>
